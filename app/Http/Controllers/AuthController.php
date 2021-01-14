<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login_page () {
        return view('app.login');
    }

    public function validate_login (Request $request) {
        $creadentials = request(['email', 'password']);
        $rememberMe = !$request->remember ? False : True;

        if (!Auth::attempt($creadentials, $rememberMe)) {
            return back ()->withError('Invalid Credentials');
        } else {
            return redirect()->route('profile.index');
        }
    }

    public function logout () {
        Auth::logout();
        return redirect()->route('app.home');
    }
}
