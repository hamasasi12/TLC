<?php

namespace App\Http\Controllers\Asesi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LevelBController extends Controller
{
    public function instructionModulAjar()
    {
        return view('user.sertifikasi.levelB.instruction.modulAjar');
    }

    public function instructionPPT()
    {
        return view('user.sertifikasi.levelB.instruction.ppt');
    }

    public function instruction(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required|numeric',
            'user_id' => 'required|numeric',
        ]);

        // 1 = kategory modul ajar
        // 2 = kategory ppt
        if ($validated['category_id'] == 1) {
            return view('user.sertifikasi.levelB.instruction.modulAjar', [
                'user_id' => $validated['user_id'],
            ]);
            
        } else if ($validated['category_id'] == 2) {
            return view('user.sertifikasi.levelB.instruction.ppt', [
                'user_id' => $validated['user_id'],
            ]);
        }
    }
}
