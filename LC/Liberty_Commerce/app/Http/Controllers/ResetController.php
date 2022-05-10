<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lcf_user;
use Illuminate\Support\Facades\Auth;

class ResetController extends Controller
{
    public function authenticate(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required', 'email'],
        ]);

        if (Auth::attempt($validated)) {
            $request->session()->regenerate();

            return redirect()->intended('catalogue');
        }
    }
}
