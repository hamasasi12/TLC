<?php

namespace App\Http\Controllers\Asesi;

use App\Models\Level;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AsesiDashboardController extends Controller
{
    public function index() {
        $levels = Level::where('id', '!=', 4)->get();
        
        return view('dashboard.asesi.dashboard', [
            'levels' => $levels
        ]);
    }
}
