<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserRegisterController extends Controller
{
    public function showRegister()
    {
        return view('auth.register');
    }

    // vallidasi data agar masuk ke database
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = new User();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);
        $user->save();

        $request->session()->put('user_id', $user->id);

        return redirect()->route('login.view')->with('alert', 'Register success');
    }
}
