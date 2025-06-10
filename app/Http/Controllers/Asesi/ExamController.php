<?php

namespace App\Http\Controllers\Asesi;

use App\Events\ExamCompleted;
use App\Models\ExamA;
use App\Models\CategoryA;
use App\Models\QuestionA;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ExamController extends Controller
{

    public function instruction(Request $request)
    {
        $request->validate([
            'category_id' => 'required|numeric',
        ]);
        $category = CategoryA::find($request->category_id);

        switch ($request->category_id) {
            case 1:
                return view('user.sertifikasi.levelA.HOTS.instruction', [
                    'category' => $category,
                ]);
            case 2:
                return view('user.sertifikasi.levelA.PCK.instruction', [
                    'category' => $category,
                ]);
            case 3:
                return view('user.sertifikasi.levelA.LITERASI.instruction', [
                    'category' => $category,
                ]);
            case 4:
                return view('user.sertifikasi.levelA.NUMERASI.instruction', [
                    'category' => $category,
                ]);
            default:
                Log::warning('Kategori tidak valid diakses', [
                    'category_id' => $request->category_id,
                    'user_id' => Auth::id(),
                    'ip_address' => $request->ip(),
                    'user_agent' => $request->userAgent()
                ]);
                return redirect()->back();
        }
    }
    public function start(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required'
        ]);

        $unfinishedExam = ExamA::where('user_id', Auth::id())
            ->where('category_a_id', $validated['category_id'])
            ->where('status', 'started')
            ->first();

        if ($unfinishedExam) {
            return redirect()->route('exams.continue', $unfinishedExam); // belum selesai
            // return 'ok';
        }

        DB::beginTransaction();
        try {
            $exam = ExamA::create([
                'user_id' => Auth::id(),
                'category_a_id' => $validated['category_id'],
                'status' => 'started',
                'start_time' => now(),
                'is_passed' => false,
            ]);

            Log::channel('exam')->info('New exam started', [
                'id' => $exam->id,
                'user_id' => Auth::id(),
                'category_id' => $validated['category_id']
            ]);

            DB::commit();
        } catch (\Exception $e) {

            DB::rollBack();
            Log::channel('exam')->error('Error starting exam', [
                'error' => $e->getMessage(),
                'user_id' => Auth::id(),
                'category_id' => $validated['category_id']
            ]);

            return redirect()->back();
        }


        $questions = QuestionA::where('category_a_id', $validated['category_id'])
            ->inRandomOrder()
            ->limit(30)
            ->get();

        foreach ($questions as $question) {
            $exam->questionsA()->attach($question->id);
        }

        return redirect()->route('asesi.sertifikasi.level.a.show', $exam);
    }

    public function show(ExamA $exam)
    {
        // Ensure the exam belongs to the authenticated user
        if ($exam->user_id != Auth::id()) {
            abort(403, 'Unauthorized action.');
            Log::channel('exam')->warning('Unauthorized exam access attempt', [
                'user_id' => Auth::id(),
                'attempted_exam_id' => $exam->id,
                'exam_owner_id' => $exam->user_id,
                'ip_address' => request()->ip(),
                'user_agent' => request()->userAgent()
            ]);
        }

        $questions = $exam->questionsA()->paginate(1);
        $totalQuestions = $exam->questionsA()->count();
        $answeredQuestions = $exam->questionsA()->wherePivotNotNull('user_answer')->count();
        // dd($answeredQuestions);
        // $answeredQuestions = $exam->questionsA()
        //     ->where('category_a_id', 2) 
        //     ->wherePivotNotNull('user_answer')
        //     ->count();


        return view('user.sertifikasi.levelA.exam.show', [
            'exam' => $exam,
            'questions' => $questions,
            'totalQuestions' => $totalQuestions,
            'answeredQuestions' => $answeredQuestions
        ]);
    }

    public function answer(Request $request, ExamA $exam)
    {
        // Ensure the exam belongs to the authenticated user
        if ($exam->user_id != Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        $validated = $request->validate([
            'question_a_id' => 'required|exists:questions_a,id',
            'user_answer' => 'required|in:a,b,c,d',
        ]);

        // Get the question
        $question = QuestionA::findOrFail($validated['question_a_id']);

        // Check if the answer is correct
        $isCorrect = $question->correct_answer === $validated['user_answer'];

        // Update the pivot record
        $exam->questionsA()->updateExistingPivot($validated['question_a_id'], [
            'user_answer' => $validated['user_answer'],
            'is_correct' => $isCorrect,
        ]);

        // Redirect to the next question or to the finish page
        if ($request->has('next_question')) {
            return redirect()->route('asesi.sertifikasi.level.a.show', [
                'exam' => $exam,
                'page' => $request->input('next_question'),
            ]);
        }
        return redirect()->route('asesi.sertifikasi.level.a.show', $exam);
    }

    public function finish(ExamA $exam)
    {
        if ($exam->user_id != Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        $category = CategoryA::find($exam->category_a_id);
        $questionCount = QuestionA::where('category_a_id', $exam->category_a_id)->count();
        $score = $exam->calculateScore();

        $count = round(($score / $questionCount) * 100, 2);

        // Update exam
        $exam->update([
            'status' => 'finished',
            'end_time' => now(),
            'score' => $count,
            'is_passed' => $count >= $category->passing_score ? true : false,
        ]);

        return redirect()->route('asesi.sertifikasi.level.a.result', $exam);
    }

    public function result(ExamA $exam)
    {
        if ($exam->user_id != Auth::id()) {
            Log::channel('exam')->warning('Unauthorized exam result access attempt', [
                'user_id' => Auth::id(),
                'attempted_exam_id' => $exam->id,
                'exam_owner_id' => $exam->user_id,
                'ip_address' => request()->ip(),
                'user_agent' => request()->userAgent()
            ]);
        }

        $totalQuestions = $exam->questionsA()->count();
        $correctAnswers = $exam->questionsA()->wherePivot('is_correct', true)->count();
        $wrongAnswers = $exam->questionsA()->wherePivot('is_correct', false)->count();
        $unansweredQuestions = $totalQuestions - ($correctAnswers + $wrongAnswers);

        $category = CategoryA::find($exam->category_a_id);

        // if ($exam->score >= $category->passing_score) {
        //     $exam->is_passed = true;
        //     $exam->save();
        // }
        $exam->update([
            'correct_answers' => $correctAnswers,
            'wrong_answers' => $wrongAnswers,
            'total_questions' => $totalQuestions,
            'unanswered_questions' => $unansweredQuestions,
        ]);

        if ($exam->score >= $category->passing_score) {
            $user = $exam->user;
            $user->givePermissionTo($category->name);
            event(new ExamCompleted($exam, $user, $category->name));
        }

        // event new ExamCompleted($exam, $user);

        return view('user.sertifikasi.levelA.exam.result', compact(
            'exam',
            'totalQuestions',
            'correctAnswers',
            'wrongAnswers',
            'unansweredQuestions'
        ));
    }

    public function continue()
    {
        return 'ok';
    }


}
