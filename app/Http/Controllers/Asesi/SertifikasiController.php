<?php

namespace App\Http\Controllers\Asesi;

use App\Models\ExamA;
use App\Models\CategoryA;
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
}
