@extends('layout')
@section('content')
@section('bg','background1')
@section('bg-name', asset('assets/img/hatterek/'.$hatter.'.png'))
<!--vágás-->
<div class="container pb-2">
    <h1 class="text-center display-6 pt-3 pb-1 fw-bold">Profile</h1>
    <hr class="w-50 mx-auto">
    <header class="masthead2">
        <div class="ps-4 pt-4" >
            <form method="post">
                @foreach ($result as $row)
            </div>
            <div class="col-md-8 w-100">
                <div class="mysection">
                    <div class="row">
                        <div class="col-md-auto fw-bold fs-5">
                            <label>Email:</label>
                        </div>
                        <div class="col-md-auto fw-bold">
                            <p>{{$row->email}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-auto fw-bold fs-5">
                            <label>Name:</label>
                        </div>
                        <div class="col-md-auto fw-bold">
                            <p>{{$row->name}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-auto fw-bold fs-5">
                            <label>Username:</label>
                        </div>
                        <div class="col-md-auto fw-bold">
                            <p>{{$row->username}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-auto fw-bold fs-5">
                            <label>Password:</label>
                        </div>
                        <div class="col-md-auto fw-bold">
                            <p>*****{{-- {{$row->password}} --}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-auto fw-bold fs-5">
                            <label>Age:</label>
                        </div>
                        <div class="col-md-auto fw-bold">
                            <p>{{$row->age}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-auto fw-bold fs-5">
                            <label>Counter:</label>
                        </div>
                        <div class="col-md-auto fw-bold">
                            <p>{{$row->rangid}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="d-grid gap-2 d-md-block pt-4 mb-4">
                <div class="buttons">
                    <a href="/profilmodositas" class="btn btn-profil px-4 py-3 fs-6 fw-bold">Edit Profile</a>
                    <a href="/hattermodositas" class="btn btn-profil px-4 py-3 fs-6 fw-bold">Edit Background</a>
                </div>
            </div>
        </form>
    </div>
</header>
<hr class="w-25 mx-auto">

{{-- <div class="row">
    <div class="column">
        <div class="col"><img src="{{asset('assets/img/galeria/assassinscreed.png')}}" alt="assassinscreed.png" title="Assassin's Creed"></div>
        <div class="col"><img src="{{asset('assets/img/galeria/avengers.png')}}" alt="avengers.png" title="Avengers "></div>
        <div class="col"><img src="{{asset('assets/img/galeria/batman.png')}}" alt="batman.png" title="Batman"></div>
        <div class="col"><img src="{{asset('assets/img/galeria/blackadam.png')}}" alt="blackadam.png" title="Black Adam"></div>
    </div>
    <div class="column">
        <div class="col"><img src="{{asset('assets/img/galeria/dom.png')}}" alt="dom.png" title="Dominic Toretto"></div>
            <div class="col"><img src="{{asset('assets/img/galeria/fastx.png')}}" alt="fastx.png" title="FAST X"></div>
            <div class="col"><img src="{{asset('assets/img/galeria/ironman.png')}}" alt="ironman.png" title="IRONMAN"></div>
            <div class="col"><img src="{{asset('assets/img/galeria/johnwick.png')}}" alt="johnwick.png" title="John Wick"></div>
        </div>
        <div class="column">
            <div class="col"><img src="{{asset('assets/img/galeria/kungfupanda.png')}}" alt="kungfupanda.png" title="Kung Fu Panda"></div>
            <div class="col"><img src="{{asset('assets/img/galeria/naruto.png')}}" alt="naruto.png" title="Naruto"></div>
            <div class="col"><img src="{{asset('assets/img/galeria/onepiece.png')}}" alt="onepiece.png" title="One Piece"></div>
            <div class="col"><img src="{{asset('assets/img/galeria/optimusprime.png')}}" alt="optimusprime.png" title="Optimus Prime"></div>
          </div>
          <div class="column">
            <div class="col"><img src="{{asset('assets/img/galeria/predator.png')}}" alt="predator.png" title="Predator"></div>
            <div class="col"><img src="{{asset('assets/img/galeria/sid.png')}}" alt="sid.png" title="Sid"></div>
            <div class="col"><img src="{{asset('assets/img/galeria/spiderman.png')}}" alt="spiderman.png" title="Spider Man"></div>
            <div class="col"><img src="{{asset('assets/img/galeria/terminator.png')}}" alt="terminator.png" title="Terminator"></div>
          </div>
    </div> --}}

    {{-- {{$result->nev}} --}}

<!--vagas-->
{{-- <main class="container border-start border-end border-dark">
    <section class="py-4 px-2">
        <div class="mx-auto w-75">
            <form action="/profil" method="post">
                @csrf
                <label for="name" class="form-label">Teljesnév:<span class="text-danger">*</span></label>
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <label for="username" class="form-label">Felhasználónév:<span class="text-danger">*</span></label>
                @error('username')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <label for="password" class="form-label">Jelszó:<span class="text-danger">*</span></label>
                @error('password')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <label for="email" class="form-label">Email:<span class="text-danger">*</span></label>
                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <label for="age" class="form-label">Életkor:<span class="text-danger">*</span></label>
                @error('age')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <button type="submit" class="btn btn-success mt-4">Módosítás</button>
            </form>
        </div>
    </section>
</main> --}}
<!--vagas-->


</div>
<!--vágás-->
@endsection
