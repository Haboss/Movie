@extends('layout')
@section('content')
<!--vagas-->
<main>
    <section id="head" class="container">
        <div class="search d-flex justify-content-center">
            <input type="text" class="form-control w-75 bg-dark mb-4" name="search" id="search" placeholder="Search for a movie, TV show or celebrity that you are looking for...">
        </div>
        <div class="text-center">
            <div class="categ row row-cols-2 row-cols-sm-2 row-cols-md-2 row-cols-lg-4">
                <div class="films cols">
                    <!--<a href="/horror">-->
                        <img class="img-fluid category h-100" src="{{asset("assets/img/category/horror.png")}}">
                        <span class="overlay-text">Horror</span>
                </div>
                <div class="films cols">
                    <!--<a href="/action">-->
                        <img class="img-fluid category h-100" src="{{asset("assets/img/category/action.png")}}">
                        <span class="overlay-text">Action</span>
                </div>
                <div class="films cols">
                    <!--<a href="/comedy">-->
                        <img class="img-fluid category h-100" src="{{asset("assets/img/category/comedy.png")}}">
                        <span class="overlay-text">Comedy</span>
                </div>
                <div class="films cols">
                    <!--<a href="/romance">-->
                        <img class="img-fluid category h-100" src="{{asset("assets/img/category/romance.png")}}">
                        <span class="overlay-text">Romance</span>
                </div>
            </div>
        </div>
    </section>
<!--vagas-->
@endsection
@section('content2')
<section id="movies" class="text-center mx-4 mb-5">
    <div class="text-center">
        <div class="categ row">
            <div class="col-8">
                <h1 class="pt-5">New Movies</h1>
                <div class="categ row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2">
                    <div class="filmek cols">
                            <img class="filmkep img-fluid" src="{{asset("assets/img/movies/film13.png")}}">
                            <div class="filmkep_overlay">
                                <div class="filmkep_cim">Aquaman és az Elveszett Királyság</div>
                                <p class="filmkep_szoveg">
                                    2023. ‧ Akció/Fantasy ‧ 1 ó 55 p
                                </p>
                            </div>
                        </div>
                    <div class="filmek cols">
                            <img class="img-fluid" src="{{asset("assets/img/movies/film14.png")}}">
                            <span class="overlay-text">Action</span>
                    </div>
                </div>
                <div class="categ row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2">
                    <div class="filmek cols">
                            <img class="img-fluid" src="{{asset("assets/img/movies/film15.png")}}">
                            <span class="overlay-text">Horror</span>
                    </div>
                    <div class="filmek cols">
                            <img class="img-fluid" src="{{asset("assets/img/movies/film16.png")}}">
                            <span class="overlay-text">Romance</span>
                    </div>
                </div>
            </div>
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
