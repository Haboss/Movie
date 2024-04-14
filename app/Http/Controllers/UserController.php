<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;
use App\Models\felhasznaloModel;
use App\Models\hatterekModel;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function Login(){
        return view('login');
    }

    public function LoginData(Request $request){
        $request->validate([
            'username'  => 'required',
            'password'  => 'required'
        ],[
            'username.required' => 'Nem lehet üres!',
            'password.required' => 'Nem lehet üres!'
        ]);
        $auth = $request->only('username','password');
        if(Auth::attempt($auth)){
            return redirect('/');
        } else {
            return view('/login',[
                'hiba' => 'Nem sikerült :)'
            ]);
        }
    }

    public function Profil(){
        if(Auth::check()){
            return view('profil',[
                "hatter" => felhasznaloModel::select('hatterek.nev as hatter_nev')
                ->join('hatterek', 'felhasznalo.hatterid', '=', 'hatterek.id')
                ->first()->hatter_nev,
                'result' => felhasznaloModel::select('id','name','username','password','email','age','rangid')
                ->where('id',Auth::user()->id)
                ->get()
            ]);
        } else{
            return redirect('/');
        }
    }

    public function ProfilMod(Request $request){
        $request->validate([
            'name'              => 'required',
            'password'              => ['required', Password::min(8)
                                                    ->letters()
                                                    ->mixedCase()
                                                    ->numbers()],
            'age'                   => 'required|numeric|min:18'
        ],[
            'name.required'                  => 'Név mező nem lehet üres!',
            'password.required'              => 'Jelszó mező nem lehet üres!',
            'password.min'                   => 'Minimum 8 karakter legyen a jelszó!',
            'password.letters'               => 'A jelszó tartalmazzon betüt!',
            'password.mixedCase'             => 'A jelszó tartalmozzon kis és nagy betűt!',
            'age'                            => 'Kor mező nem lehet üres!',
            'age.numeric'                    => 'A kor szám lehet!',
            'age.min'                        => 'Regisztráció csak 18 év felett!'
        ]);
        felhasznaloModel::where('id', Auth::user()->id)->update(['name'=>$request->name, 'password'=>Hash::make($request->password), 'age'=>$request->age]);
        return redirect('/profil');
    }

    public function Mod(){
        return view('profilmod',[
            'result' => felhasznaloModel::select('id','name','username','password','email','age','rangid')
                ->where('id',Auth::user()->id)
                ->get(),
                "hatter" => felhasznaloModel::select('hatterek.nev as hatter_nev')
                ->join('hatterek', 'felhasznalo.hatterid', '=', 'hatterek.id')
                ->first()->hatter_nev,
        ]);
    }

    public function Logout(){
        Auth::logout();
        return Redirect('/');
    }

    public function Movie(){
        return view('movie',[
        ]);
    }

    public function Actor(){
        return view('actor',[
        ]);
    }

    public function Categ(){
        return view('category',[
        ]);
    }

    public function Register(Request $request){
        $request -> validate([
            'email'                 => 'required|email|unique:felhasznalo,email',
            'name'                  => 'required',
            'username'              => 'required|unique:felhasznalo,username',
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

        $data                     = new felhasznaloModel;
        $data -> name             = $request->name;
        $data -> username         = $request->username;
        $data -> password         = Hash::make($request->password);
        $data -> email            = $request->email;
        $data -> age              = $request->age;
        $data -> admin            = "felhasznalo";
        $data -> rangid           = 1;
        $data -> Save();

        // $userid = felhaszanaloModel::find($data->id);
        // Auth::loginUsingId($userid);
    //     $auth = $request -> only('felhasznalonev','jelszo');
    //      if(Auth::attempt($auth)){
    //         return redirect('/');
    //     }
    // }
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('/');
        }
    }

    //     function Register(Request $request){
    //     $request->validate([
    //         'email'                 => 'required|email|unique:felhasznalo,email',
    //         'name'                  => 'required',
    //         'username'              => 'required|unique:felhasznalo,felhasznalonev',
    //         'password'              => ['required', 'confirmed', Password::min(8)
    //                                                                     ->letters()
    //                                                                     ->mixedCase()
    //                                                                     ->numbers()],
    //         'password_confirmation' => 'required',
    //         'age'                   => 'required|numeric|min:18'
    //     ],[
    //         'email.required'                 => 'E-mail mező nem lehet üres!',
    //         'email.email'                    => 'Szabványos e-mail címet adjon meg!',
    //         'email.unique'                   => 'Ez az email már foglalt!',
    //         'name.required'                  => 'Név mező nem lehet üres!',
    //         'username.required'              => 'Név mező nem lehet üres!',
    //         'username.unique'                => 'Ez a felhasználónév már foglalt!',
    //         'password.required'              => 'Jelszó mező nem lehet üres!',
    //         'password.confirmed'             => 'A két jelszó nem egyezik meg!',
    //         'password.min'                   => 'Minimum 8 karakter legyen a jelszó!',
    //         'password.letters'               => 'A jelszó tartalmazzon betüt!',
    //         'password.mixedCase'             => 'A jelszó tartalmozzon kis és nagy betűt!',
    //         'password'                       => 'A jelszó nem elég erős!',
    //         'password_confirmation.required' => 'Jelszó mező nem lehet üres!',
    //         'age'                            => 'Kor mező nem lehet üres!',
    //         'age.numeric'                    => 'A kor szám lehet!',
    //         'age.min'                        => 'Regisztráció csak 18 év felett!'
    //     ]);

    //     $data = new felhasznaloModel;
    //     $data -> teljesnev = $request->name;
    //     $data -> felhasznalonev = $request->username;
    //     $data -> email = $request->email;
    //     $data -> jelszo = Hash::make($request->password);
    //     $data -> szuldatum = $request->age;
    //     $data -> admin = "felhasznalo";
    //     $data -> rangid = 1;
    //     $data -> Save();
    //     $auth = $request->only('name', 'username', 'email', 'password', 'age');
    //     if (Auth::attempt($auth)) {
    //         return redirect('layout');

    //     }

    // }

}
