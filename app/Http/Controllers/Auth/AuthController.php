<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\loginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.loginPage');
    }

    public function login(loginRequest $request)
    {
        $credentials = $request->validated();

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard')->with('success', 'You are logged in!');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'You have been logged out!');
    }

    public function registerUser(RegisterRequest $request)
    {
        $request->validated();

        DB::beginTransaction();
        try {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);
            DB::commit();

            return redirect()->route('login')->with('success', 'Registration successful! Please log in.');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->withErrors([
                'error' => 'An error occurred during registration. Please try again.',
            ])->withInput();
        }
    }
}
