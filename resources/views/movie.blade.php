@extends('layout')
@section('bg','background')
@section('bg-name', asset('assets/img/categorybg.png'))
@section('content')
<div class="h-75 w-100 d-flex justify-content-center align-items-center">
<h1 class="movieka">{{$film->movietitle}}</h1>
</div>
@endsection
@section('content2')
<div class="text-center d-flex justify-content-center">
    <div class="categ row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-1 row-cols-xl-1 justify-content-center align-items-center">
        <div class="filmek cols">
            <img class="filmkep1 img-fluid" src="{{asset("assets/img/movies/film$film->filmid.png")}}">
            <div class="filmkep_overlay1">
                <div>
                    <div class="filmkep_cim">{{ $film->movietitle }}</div>
                    <p class="filmkep_szoveg">
                        {{ $film->date }}. {{ $film->categoryname }} {{ $film->movielength }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
