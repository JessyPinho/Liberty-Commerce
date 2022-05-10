<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use Illuminate\Http\Request;
use App\Models\Lcf_user;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
    
    public function authenticate(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($validated)) {
            $request->session()->regenerate();

            return redirect()->intended('catalogue');
        }

        return back()->withErrors([
            'email' => "l'adresse mail utilisée n'est pas la bonne",
        ]);
    }
}
