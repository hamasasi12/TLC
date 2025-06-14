<?php

namespace App\Http\Controllers\Asesi;

use App\Models\ExamA;
use App\Models\CategoryA;
use App\Models\Payment;
use App\Models\QuestionA;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SertifikasiController extends Controller
{
    public function index()
    {
        $exams = ExamA::with('user', 'categoryA')
            ->where('user_id', Auth::id())
            ->paginate(10);
        return view('dashboard.asesi.sertifikasi', compact('exams'));
    }

    public function nilai()
    {
        $exams = ExamA::with(['user', 'categoryA', 'questionsA'])
            ->where('user_id', Auth::id())
            ->get()
            ->map(function ($exam) {
                // Hitung statistik
                $totalQuestions = $exam->questionsA->count();
                $correctAnswers = $exam->questionsA->where('pivot.is_correct', true)->count();
                $wrongAnswers = $exam->questionsA->where('pivot.is_correct', false)->count();
                $unansweredQuestions = $totalQuestions - ($correctAnswers + $wrongAnswers);

                // Tambahkan data yang dihitung
                $exam->total_questions = $totalQuestions;
                $exam->correct_answers = $correctAnswers;
                $exam->wrong_answers = $wrongAnswers;
                $exam->unanswered_questions = $unansweredQuestions;

                return $exam;
            });

        return view('dashboard.asesi.nilai', compact('exams'));
    }

    public function mySertifikat(string $id) {
        return view('user.sertifikasi.mySertifikasi.index');
    }
}
