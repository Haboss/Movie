@extends('layout')
@section('content')
@section('bg','background1')
@section('bg-name', asset('assets/img/hatterek/'.$hatter.'.png'))
<div class="container pb-2">
    <h1 class="profilka text-center display-6 pt-3 pb-1">Profile</h1>
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
                            <p>********{{-- {{$row->password}} --}}</p>
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
                    <a href="/profilhattermod" class="btn btn-profil px-4 py-3 fs-6 fw-bold">Edit Background</a>
                </div>
            </div>
        </form>
    </div>
</header>
<hr class="w-25 mx-auto">
</div>
@endsection
