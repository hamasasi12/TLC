<?php

namespace App\Http\Controllers;

use Log;
use App\Models\ExamA;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestimonialController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|min:10|max:2000',
            'rating' => 'nullable|integer|between:1,5',
            'exam_a_id' => 'required|exists:exams_a,id',
            'category_a_id' => 'required|exists:categories_a,id'
        ]);

        $exam = ExamA::findOrFail($request->exam_a_id);

        // Pastikan user sudah lulus ujian ini
        if ($exam->user_id !== Auth::id() || $exam->is_passed !== 1) {
            return response()->json([
                'success' => false,
                'message' => 'Anda tidak memiliki akses untuk memberikan testimonial pada ujian ini.'
            ], 403);
        }

        // Cek apakah user sudah pernah memberikan testimonial untuk kategori ini
        $existingTestimonial = Testimonial::where('user_id', Auth::id())
            ->where('category_a_id', $request->category_a_id)
            ->exists();

        if ($existingTestimonial) {
            return response()->json([
                'success' => false,
                'message' => 'Anda sudah memberikan testimonial untuk kategori ini.'
            ], 422);
        }

        try {
            $testimonial = Testimonial::create([
                'user_id' => Auth::id(),
                'category_a_id' => $request->category_a_id,
                'exam_a_id' => $request->exam_a_id,
                'content' => $request->content,
                'rating' => $request->rating ?? 5, 
                'is_approved' => false
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Testimonial berhasil dikirim. Menunggu persetujuan admin.',
                'testimonial' => $testimonial
            ]);

        } catch (\Exception $e) {
            Log::error('Error creating testimonial: ' . $e->getMessage());
            
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat menyimpan testimonial. Silakan coba lagi.'
            ], 500);
        }
    }
}