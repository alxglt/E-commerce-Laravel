<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ResetController extends Controller
{
    // See the reset password view
    public function see() {
        return view('reset');
    }

    // Send the reset link ( not working )
    function reset(Request $request) {
        $cred = $request->validate(['email' => 'required|email']);
        Password::sendResetLink($cred);
        return view('reset')->with('message','sent');
    }
}