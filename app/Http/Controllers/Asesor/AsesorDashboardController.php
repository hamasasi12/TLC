<?php

namespace App\Http\Controllers\Asesor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AsesorDashboardController extends Controller
{
    public function index() {
        return view('dashboard.asesor.dashboard');
    }
}
