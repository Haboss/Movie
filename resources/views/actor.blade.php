@extends('layout')
@section('bg','background')
@section('bg-name', asset('assets/img/actorbg.png'))
@section('content2')
@section('content')
<div class="h-75 w-100 d-flex justify-content-center align-items-center">
<h1 class="movieka">Actors</h1>
</div>
@endsection
<section id="celebrity" class="text-center mx-4 mb-5">
<div class="text-center d-flex justify-content-center">
    <div class="row">
        <h1 class="pt-5 fw-bold">Actors</h1>
        @foreach ($actors as $actor)
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch p-3 my-2">
            <a href="{{ $actor->link }}" target="_blank" class="actors">
                <div class="p-2 row row-cols-2 row-cols-sm-2 row-cols-md-2 row-cols-lg-2">
                    <div class="cols">
                        <img class="actor img-fluid w-50" title="{{$actor->actorname}}" src="{{asset("assets/img/actors/actor$actor->actorid.png")}}">
                    </div>
                    <div class="cols d-flex justify-content-center align-items-center">
                        <h2>{{ $actor->actorname }}</h2>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
<div>
    <a href="/actor">
        <button class="topgomb d-flex align-items-center fs-3 justify-content-center p-4 bi bi-arrow-up-short"></button>
    </a>
</div>
</section>
@endsection
