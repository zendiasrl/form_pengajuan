<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserLoginController extends Controller
{

    public function showLogin()
    {
        return view('auth.login');
    }

    public function loginauth(Request $request)
    {
        $request->validate(
            [
                'email' => 'required',
                'password' => 'required'
            ],
            [
                'email.required' => 'Email is Required',
                'password.required' => 'Password is Required'
            ]
        );

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            $user = Auth::user();

            if ($user->role == 'karyawan') {
                return redirect()->route('dashboard.karyawan');
            } else if ($user->role == 'manajer') {
                return redirect()->route('dashboard.manajer');;
            }
        }
        return redirect();
    }
}
