<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        // Ambil 6 berita terbaru untuk ditampilkan di galeri landing page
        $latestNews = News::latest()->take(6)->get();

        // Kirim data ke view welcome
        return view('welcome', compact('latestNews'));
    }

        public function show($slug)
    {
        // Cari berita berdasarkan ID
        $news = News::where('slug',$slug)->firstorFail();

        // Tampilkan view detail berita
        return view('newsDetail', compact('news'));
    }
}
