<?php

namespace App\Http\Controllers\Asesi;

use App\Models\CategoryB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LevelBController extends Controller
{
    public function instructionModulAjar()
    {
        return view('user.sertifikasi.levelB.MODULAJAR.instruction');
    }

    public function instructionPPT()
    {
        return view('user.sertifikasi.levelB.PPT.instruction');
    }

    public function instruction(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required|numeric',
            'user_id' => 'required|numeric',
        ]);

        if ($validated['category_id'] == 1) {
            return view('user.sertifikasi.levelB.MODULAJAR.instruction', [
                'user_id' => $validated['user_id'],
            ]);

        } else if ($validated['category_id'] == 2) {
            return view('user.sertifikasi.levelB.PPT.instruction', [
                'user_id' => $validated['user_id'],
            ]);
        }
    }
}
