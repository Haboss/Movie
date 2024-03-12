<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /*public function Login(){
        return redirect(route(name:'login'));
    }*/

    public function Login(){
        return view('login');
    }
    public function LoginData(Request $request){
        $request->validate([
            'email'     => 'required',
            'password'  => 'required'
        ],[
            'email.required'    => 'Nem lehet üres!',
            'password.required' => 'Nem lehet üres!'
        ]);
        $auth = $request->only('email','password');
        if(Auth::attempt($auth)){
            return redirect('/profil');
        } else {
            return view('/login',[
                'hiba' => 'Nem sikerült :)'
            ]); // View helyett egy redirectet
        }
    }
}
