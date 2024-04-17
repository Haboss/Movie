@extends('layout')
@section('bg','background')
@section('bg-name', asset('assets/img/categorybg.png'))
@section('content')
<div class="h-75 w-100 d-flex justify-content-center align-items-center">
<h1 class="movieka">{{ $film->movietitle }}</h1>
</div>
@endsection
@section('content2')
<a href="/movie"><button><i class="fa-solid fa-backward"></i></button></a>
<div class="py-5 px-5 row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 d-flex justify-content-center" style="max-width: 100%;">
    <div class="col">
        <div class="ratio ratio-16x9">
            <iframe class="elozetes" src="{{$film->link}}" width="150%" height="450" title="YouTube video player" allowfullscreen></iframe>
        </div>
    </div>
    <div class="col ps-5">
        <h2 class="cim">{{$film->movietitle}}</h2>
        <h2 class="kategoria">{{$film->categoryname}}</h2>
        <h2 class="datum">Release Date: {{$film->date}}</h2>
        <h2 class="szereplok">Protagonist</h2>
        <div class="row">
            @foreach ($actormovie as $actor)
            <div class="col">
                <a href="{{ $actor->link }}" target="_blank" class="actors">
                    <img class="actor img-fluid" title="{{$actor->actorname}}" src="{{asset("assets/img/actors/actor$actor->actorid.png")}}" style="max-height: 290px;">
                    <h2>{{ $actor->actorname }}</h2>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="ms-5">
    <div class="mt-5">
        <div class="d-flex justify-content-start w-75">
            <div class="col-md-8">
                <h1>Opinions</h1>
                <div class="headings d-flex justify-content-end align-items-center mb-3">
                    <label class="d-flex align-items-center" for="msg"><b>Messages</b></label>
                </div>
                @foreach ($ertekelesek as $ertekeles)
                    <div class="card p-3 mt-3">
                        <div class="d-flex justify-content-between align-items-center">
                    <div class="user d-flex flex-row align-items-center">
                        <span><small class="font-weight-bold text-primary">{{$ertekeles->username}}: </small> <small class="font-weight-bold">{{$ertekeles->velemeny}}</small></span>
                    </div>
                    </div>
                    <div class="action d-flex justify-content-start mt-2 align-items-center">
                        @for($i = 0; $i < $ertekeles->csillag; $i++)
                            <div class="icons align-items-center">
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-check-circle-o check-icon"></i>
                            </div>
                        @endfor
                    </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @guest
        <p class="pt-3">If you want to write your own review, click<button class="btn btn-registerke px-3" data-bs-toggle="modal" data-bs-target="#exampleModal">register.</button>
        </p>
    @else
    <form action="/comment/{{$film->filmid}}" class="form-container pt-3 d-flex align-items-center w-75 mb-5" method="POST">
        @csrf
        <div class="w-50">
            <textarea class="w-100" placeholder="Type your opinions.." name="msg" required></textarea>
            @error('msg')
                <span class="text-danger">{{$message}}</span>
            @enderror
            <input type="range" name="star" min="1" max="5" value="3">
        </div>
        <div class="ps-2">
            <button class="send btn" type="submit" class="btn">Send</button>
        </div>
    </form>
    @endguest
</div>
@endsection
