<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller
{
    //

    public function save(Request $req) {
        $rules = [
            'name' => 'required|string|min:2|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:2|max:255|confirmed'
        ];

        $validator = Validator::make($req->all(),$rules);
        if ($validator->fails()) {
            return redirect('register')
                ->withErrors($validator)
                ->withInput();
        }
        else {
            $data = $req->input();
                $user = new user();
                $user -> name = $data['name'];
                $user -> email = $data['email'];
                $user -> password = Hash::make($data['password']);
                $user->save();
            return redirect('/login')
                ->with('message', 'Your account have been created :) !');
            }
    }
    public function see() {
        return view('register');
    }
}
