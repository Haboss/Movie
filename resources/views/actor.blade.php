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
    <div>
        <div>
            <div class="col-4 d-flex flex-column">
                <h1 class="pt-5">Actors</h1>
                <div class="my-2">
                    <div class="p-2 row row-cols-2 row-cols-sm-2 row-cols-md-2 row-cols-lg-2">
                        <div class="cols p-0">
                            <img class="actor img-fluid w-50" src="{{asset("assets/img/actors/actor3.png")}}">
                        </div>
                        <div class="cols d-flex justify-content-center align-items-center">
                            <h2>Ryan Gosling</h2>
                        </div>
                    </div>
                </div>
                <div class="my-2">
                    <div class="p-2 row row-cols-2 row-cols-sm-2 row-cols-md-2 row-cols-lg-2">
                        <div class="cols p-0">
                            <img class="actor img-fluid w-50" src="{{asset("assets/img/actors/actor8.png")}}">
                        </div>
                        <div class="cols d-flex justify-content-center align-items-center">
                            <h2>Taika Waititi</h2>
                        </div>
                </div>
                <div class="my-2">
                    <div class="p-2 row row-cols-2 row-cols-sm-2 row-cols-md-2 row-cols-lg-2">
                        <div class="cols p-0">
                            <img class="actor img-fluid w-50" src="{{asset("assets/img/actors/actor2.png")}}">
                        </div>
                        <div class="cols d-flex justify-content-center align-items-center">
                            <h2>Brad Pitt</h2>
                        </div>
                </div>
                <div class="my-2">
                    <div class="p-2 row row-cols-2 row-cols-sm-2 row-cols-md-2 row-cols-lg-2">
                        <div class="cols p-0">
                            <img class="actor img-fluid w-50" src="{{asset("assets/img/actors/actor6.png")}}">
                        </div>
                        <div class="cols d-flex justify-content-center align-items-center">
                            <h2>Robert Pattinson</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
