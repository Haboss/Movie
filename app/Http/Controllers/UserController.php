<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;
use App\Models\felhasznaloModel;
use App\Models\actormovieModel;
use App\Models\filmadatokModel;
use App\Models\kategoriaModel;
use App\Models\hatterekModel;
use App\Models\actorsModel;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // Főoldal
    public function Welcome(){
        return view('welcome',[
            'kategoria' => kategoriaModel::all(),
            'filmek' => filmadatokModel::select('filmid','movietitle','movielength','date','categoryid')
                                                ->limit(4)
                                                ->get(),
            'actors' => actorsModel::select('actorid','actorname','gender','link')
                                            ->limit(3)
                                            ->get(),
        ]);
    }
    // Regisztráció
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

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('/');
        }
    }
    // Login
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
    public function Login(){
        return view('login');
    }
    // Logout
    public function Logout(){
        Auth::logout();
        return Redirect('/');
    }
    // Profil
    public function Profil(){
        if(Auth::check()){
            return view('profil',[
                "hatter" => felhasznaloModel::select('hatterek.nev as hatter_nev')
                ->join('hatterek', 'felhasznalo.hatterid', '=', 'hatterek.id')
                ->where('felhasznalo.id', Auth::user()->id )
                ->first()->hatter_nev,
                'result' => felhasznaloModel::select('id','name','username','password','email','age','rangid')
                ->where('id',Auth::user()->id)
                ->get()
            ]);
        } else{
            return redirect('/');
        }
    }
    // Profil módosítás
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
    // Háttér
    public function Mod(){
        return view('profilmod',[
            'result' => felhasznaloModel::select('id','name','username','password','email','age','rangid')
                ->where('id',Auth::user()->id)
                ->get(),
                "hatter" => felhasznaloModel::select('hatterek.nev as hatter_nev')
                ->join('hatterek', 'felhasznalo.hatterid', '=', 'hatterek.id')
                ->where('felhasznalo.id', Auth::user()->id )
                ->first()->hatter_nev,
        ]);
    }
    // Filmek
    public function MovieId($id){
        return view('movie',[
            'film' => filmadatokModel::select('filmadatok.filmid','filmadatok.movietitle','filmadatok.movielength','filmadatok.date','filmadatok.link','filmadatok.categoryid','kategoria.categoryname')
            ->join('kategoria', 'kategoria.categoryid', '=', 'filmadatok.categoryid')
            ->where('filmadatok.filmid', $id)
            ->first(),
            'kategoria' => kategoriaModel::all(),
            'actormovie' => actormovieModel::select('szineszek_filmekben.actorid','szineszek_filmekben.filmid', 'szineszek.actorname', "szineszek.link")
            ->join('szineszek', 'szineszek.actorid', '=', 'szineszek_filmekben.actorid')
            ->join('filmadatok', 'filmadatok.filmid', '=', 'szineszek_filmekben.filmid')
            ->where('szineszek_filmekben.filmid', $id)
            ->get()
            // 'kateg' => kategoriaModel::select('categoryid','categoryname')
            // ->where('categoryid',Auth::user()->id)
            // ->get(),
            // ->select($category.$category from $filmadatok, $category)
            // ->where($category.$categoryid=$filmadatok.$categoryid)
        ]);
    }
    // Kategóriák
    public function CategoryId($id){
        return view('category',[
            'filmek' => filmadatokModel::select('filmadatok.filmid','filmadatok.movietitle','filmadatok.movielength','filmadatok.date','filmadatok.link','filmadatok.categoryid','kategoria.categoryname')
            ->join('kategoria', 'kategoria.categoryid', '=', 'filmadatok.categoryid')
            ->where('kategoria.categoryid', "=", $id)
            ->orderBy('filmadatok.date','desc')
            ->get(),
            'kategoria' => kategoriaModel::where('categoryid', $id)->first(),
            'kategoriak' => kategoriaModel::all(),
            'id' => $id
        ]);
    }
    public function Category(){
        return view('category',[
            'filmek' => filmadatokModel::select('filmadatok.filmid','filmadatok.movietitle','filmadatok.movielength','filmadatok.date','filmadatok.categoryid','kategoria.categoryname')
            ->join('kategoria', 'kategoria.categoryid', '=', 'filmadatok.categoryid')
            ->orderBy('filmadatok.date','desc')
            ->get(),
            'kategoria' => null,
            'kategoriak' => kategoriaModel::all()
            // 'kateg' => kategoriaModel::select('categoryid','categoryname')
            // ->where('categoryid',Auth::user()->id)
            // ->get(),
            // ->select($category.$category from $filmadatok, $category)
            // ->where($category.$categoryid=$filmadatok.$categoryid)
        ]);
    }
    public function Categ(){
        return view('category',[
        'kategoria' => kategoriaModel::all(),
        'id' => $categoryid
        ]);
    }
    // Színészek
    public function Actor(){
        return view('actor',[
            'actors' => actorsModel::all()
        ]);
    }
}
