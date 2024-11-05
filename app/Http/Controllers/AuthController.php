<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/home');
        }
    }

    public function register(Request $request)
    {
        $validator = $request->validate($request->all(), [
            "email"=> "required",
            "password"=> "required",
            "username" => "required",
            "name" => "required",
        ]);

        if ($validator) {
            User::create([
                "email"=> $request->email,
                "password"=> bcrypt($request->password),
                "username"=> $request->username,
                "name"=> $request->name
            ]);

            return redirect("/");
        }else{
            return back();
        }
    }
}
