<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\felhasznaloModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;

class UserController extends Controller
{
    public function Login(){
        return view('login');
    }

    public function LoginData(Request $request){
        $request->validate([
            'felhasznalonev'     => 'required',
            'password'  => 'required'
        ],[
            'felhasznalonev.required'    => 'Nem lehet üres!',
            'password.required' => 'Nem lehet üres!'
        ]);
        $auth = $request->only('felhasznalonev','password');
        if(Auth::attempt($auth)){
            return redirect('/profil');
        } else {
            return view('/login',[
                'hiba' => 'Nem sikerült :)'
            ]);
        }
    }

    public function Logout(){
        Auth::logout();
        return;
        Redirect('/');
    }

    public function Movie(){
        return view('movie',[
        ]);
    }

    public function Celebrity(){
        return view('celebrity',[
        ]);
    }

    public function Register(Request $request){
        $request -> validate([
            'email'                 => 'required|email|unique:felhasznalo,email',
            'name'                  => 'required',
            'username'              => 'required|unique:felhasznalo,felhasznalonev',
            'password'              => ['required', 'confirmed', Password::min(8)
                ->letters()
                ->mixedCase()
                ->numbers()],
            'password_confirmation' => 'required',
            'age'                   => 'required|numeric|min:18'
        ],[
            'email.required'                 => 'E-mail mező nem lehet üres!',
            'email.email'                    => 'Szabványos e-mail címet adjon meg!',
            'email.unique'                   => 'Ez az email már foglalt!',
            'name.required'                  => 'Név mező nem lehet üres!',
            'username.required'              => 'Név mező nem lehet üres!',
            'username.unique'                => 'Ez a felhasználónév már foglalt!',
            'password.required'              => 'Jelszó mező nem lehet üres!',
            'password.confirmed'             => 'A két jelszó nem egyezik meg!',
            'password.min'                   => 'Minimum 8 karakter legyen a jelszó!',
            'password.letters'               => 'A jelszó tartalmazzon betüt!',
            'password.mixedCase'             => 'A jelszó tartalmozzon kis és nagy betűt!',
            'password'                       => 'A jelszó nem elég erős!',
            'password_confirmation.required' => 'Jelszó mező nem lehet üres!',
            'age'                            => 'Kor mező nem lehet üres!',
            'age.numeric'                    => 'A kor szám lehet!',
            'age.min'                        => 'Regisztráció csak 18 év felett!'
        ]);

        $data             = new felhasznaloModel;
        $data -> teljesnev     = $request->name;
        $data -> felhasznalonev = $request->username;
        $data -> email    = $request->email;
        $data -> kor      = $request->age;
        $data -> password = Hash::make($request->password);
        $data -> admin = "felhasznalo";
        $data -> rang = "ujonc";
        $data -> ertekeloszamlalo = 0;
        $data -> Save();

        // $userid = felhaszanaloModel::find($data->id);
        // Auth::loginUsingId($userid);
        //return redirect('/');


        /*if(Auth::attempt(['felhasznalonev' => $request->username, 'password' => $request->password])){
            return redirect('/');
        }*/
    }

}
