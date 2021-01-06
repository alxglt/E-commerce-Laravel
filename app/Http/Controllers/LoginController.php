<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;






class LoginController extends Controller
{
    //

    public function see() {
        return view('login');
    }

    function checklogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:3'
        ]);

        $user_data = array(
            'email' => $request -> get('email'),
            'password' => $request -> get('password')
        );

        if(Auth::attempt($user_data))
        {
            return redirect('/shop');
        }
        else
        {
            return back()->with('error','Wrong login detail');
        }
    }

    public function logout() {
        Auth::logout();
        return redirect('/home');
    }
}
