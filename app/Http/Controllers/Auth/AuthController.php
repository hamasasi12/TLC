<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function login() {
        return view('auth.loginPage');
    }

    public function register() {
        return view('auth.register');
    }

    public function loginProcess(LoginRequest $request) {
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();

            if (auth()->user()->hasRole('asesi')) {
                return redirect()->route('asesi.dashboard')->with('success', 'Berhasil login');
            }
            
        }

        // JIKA GAGAL
        Alert::error('Login Gagal!', 'Email atau Password salah')->autoClose(3000);
        Log::warning('User login failed', ['email' => $request->email, 'ip' => $request->ip()]);
        return back()->withInput($request->only('email'))->with('error', 'Email atau Password salah');
    }

    public function registerProcess(RegisterRequest $request) 
    {
        $validated = $request->validated();
        $validated['password'] = Hash::make($validated['password']);
        $validated['status'] = 'active';

        try {
            DB::beginTransaction();

            $user = User::create($validated);
            $user->assignRole('asesi');

            Alert::success('Berhasil!', 'Akun berhasil dibuat')->autoClose(3000);
            DB::commit();
            Auth::login($user); 
            return redirect()->route('asesi.dashboard'); //ARAHKAN KEARAH DASHBORD

        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('User registration failed', ['error' => $e->getMessage()]);
            Alert::error('Gagal!', 'Akun gagal dibuat')->autoClose(3000);
            return back()->withInput($request->only('email'))->with('error', 'Akun gagal dibuat');
        }
    }

    public function logout() {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/')->with('success', 'Berhasil logout');
    }
}
