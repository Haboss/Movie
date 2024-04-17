@extends('layout')
@section('bg','background')
@section('bg-name', asset('assets/img/categorybg.png'))
@section('content')
<div class="h-75 w-100 d-flex justify-content-center align-items-center">
<h1 class="movieka">{{ $film->movietitle }}</h1>
</div>
@endsection
@section('content2')
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 d-flex justify-content-center">
    <div class="col p-4">
        <div class="ratio ratio-16x9">
            <iframe class="elozetes" src="{{$film->link}}" width="150%" height="450" title="YouTube video player" allowfullscreen></iframe>
        </div>
    </div>
    <div class="pt-4">
        <div>
            <h2 class="cim">{{$film->movietitle}}</h2>
            <h2 class="kategoria">{{$film->categoryname}}</h2>
            <h2 class="datum">Release Date: {{$film->date}}</h2>
            <h2 class="szereplok">Protagonist</h2>
            <div class="col-4 d-flex flex-column">
                @foreach ($actors as $actor)
                <div class="my-2">
                    <a href="{{ $actor->link }}" target="_blank" class="actors">
                        <div class="pt-5 row row-cols-2 row-cols-sm-2 row-cols-md-2 row-cols-lg-2">
                            <div class="cols">
                                <img class="actor img-fluid w-50" title="{{$actor->actorname}}" src="{{asset("assets/img/actors/actor$actor->actorid.png")}}">
                                <h2>{{ $actor->actorname }}</h2>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

{{-- <div class="text-center d-flex justify-content-center">
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
</div> --}}
@endsection
