@extends('layout')
@section('bg','background')
@section('content')
@section('bg-name', asset('assets/img/homebg.png'))
<!--vagas-->
<main>
    <section id="head" class="container pt-5">
        <div class="search d-flex justify-content-center">
            <input type="text" class="form-control w-75 bg-dark mb-4" name="search" id="search" placeholder="Search for a movie, TV show or celebrity that you are looking for...">
        </div>
            <div class="text-center pt-5">
                    <div class="sldr">
                        <div class="films slider-for">
                            <!--<a href="/horror">-->
                                <img class="img-fluid category h-100" src="{{asset("assets/img/category/horror.png")}}">
                                <span class="overlay-text">Horror</span>
                        </div>
                        <div class="films slider-for">
                            <!--<a href="/action">-->
                                <img class="img-fluid category h-100" src="{{asset("assets/img/category/action.png")}}">
                                <span class="overlay-text">Action</span>
                        </div>
                        <div class="films slider-for">
                            <!--<a href="/comedy">-->
                                <img class="img-fluid category h-100" src="{{asset("assets/img/category/comedy.png")}}">
                                <span class="overlay-text">Comedy</span>
                        </div>
                        <div class="films slider-for">
                            <!--<a href="/romance">-->
                                <img class="img-fluid category h-100" src="{{asset("assets/img/category/romance.png")}}">
                                <span class="overlay-text">Romance</span>
                        </div>
                        <div class="films slider-for">
                            <!--<a href="/adventure">-->
                                <img class="img-fluid category h-100" src="{{asset("assets/img/category/adventure.png")}}">
                                <span class="overlay-text">Adventure</span>
                        </div>
                        <div class="films slider-for">
                            <!--<a href="/fantasy">-->
                                <img class="img-fluid category h-100" src="{{asset("assets/img/category/fantasy.png")}}">
                                <span class="overlay-text">Fantasy</span>
                        </div>
                        <div class="films slider-for">
                            <!--<a href="/musical">-->
                                <img class="img-fluid category h-100" src="{{asset("assets/img/category/musical.png")}}">
                                <span class="overlay-text">Musical</span>
                        </div>
                        <div class="films slider-for">
                            <!--<a href="/mystery">-->
                                <img class="img-fluid category h-100" src="{{asset("assets/img/category/mystery.png")}}">
                                <span class="overlay-text">Mystery</span>
                        </div>
                        <div class="films slider-for">
                            <!--<a href="/scifi">-->
                                <img class="img-fluid category h-100" src="{{asset("assets/img/category/scifi.png")}}">
                                <span class="overlay-text">Sci-fi</span>
                        </div>
                        <div class="films slider-for">
                            <!--<a href="/sport">-->
                                <img class="img-fluid category h-100" src="{{asset("assets/img/category/sport.png")}}">
                                <span class="overlay-text">Sport</span>
                        </div>
                        <div class="films slider-for">
                            <!--<a href="/thriller">-->
                                <img class="img-fluid category h-100" src="{{asset("assets/img/category/thriller.png")}}">
                                <span class="overlay-text">Thriller</span>
                        </div>
                        <div class="films slider-for">
                            <!--<a href="/western">-->
                                <img class="img-fluid category h-100" src="{{asset("assets/img/category/western.png")}}">
                                <span class="overlay-text">Western</span>
                        </div>
                        <div class="films slider-for">
                            <!--<a href="/movie">-->
                                <img class="img-fluid category h-100" src="{{asset("assets/img/category/others.png")}}">
                                <span class="overlay-text">Others+</span>
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
                            <div>
                                <div class="filmkep_cim">Aquaman and the Lost Kingdom</div>
                                <p class="filmkep_szoveg">
                                    2023. Action 1 h 55 m
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="filmek cols">
                        <img class="filmkep img-fluid" src="{{asset("assets/img/movies/film14.png")}}">
                        <div class="filmkep_overlay">
                            <div>
                                <div class="filmkep_cim">57 Seconds</div>
                                <p class="filmkep_szoveg">
                                    2023. Sci-fi 1 h 39 m
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="categ row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2">
                    <div class="filmek cols">
                        <img class="filmkep img-fluid" src="{{asset("assets/img/movies/film15.png")}}">
                        <div class="filmkep_overlay">
                            <div>
                                <div class="filmkep_cim">Five Nights at Freddys</div>
                                <p class="filmkep_szoveg">
                                    2023. Horror 1 h 50 m
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="filmek cols">
                        <img class="filmkep img-fluid" src="{{asset("assets/img/movies/film16.png")}}">
                        <div class="filmkep_overlay">
                            <div>
                                <div class="filmkep_cim">Anyone but You</div>
                                <p class="filmkep_szoveg">
                                    2023. Romance 1 h 44 m
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 d-flex flex-column">
                <h1 class="pt-5">Actors</h1>
                <div class="my-2">
                    <div class="p-2 row row-cols-2 row-cols-sm-2 row-cols-md-2 row-cols-lg-2">
                        <div class="cols p-0">
                            <img class="actor img-fluid w-50" src="{{asset("assets/img/actors/actor3.png")}}" alt="actor3.png" title="Ryan Gosling">
                        </div>
                        <div class="cols d-flex justify-content-center align-items-center">
                            <h2>Ryan Gosling</h2>
                        </div>
                    </div>
                </div>
                <div class="my-2">
                    <div class="p-2 row row-cols-2 row-cols-sm-2 row-cols-md-2 row-cols-lg-2">
                        <div class="cols p-0">
                            <img class="actor img-fluid w-50" src="{{asset("assets/img/actors/actor8.png")}}" alt="actor8.png" title="Taika Waititi">
                        </div>
                        <div class="cols d-flex justify-content-center align-items-center">
                            <h2>Taika Waititi</h2>
                        </div>
                </div>
                <div class="my-2">
                    <div class="p-2 row row-cols-2 row-cols-sm-2 row-cols-md-2 row-cols-lg-2">
                        <div class="cols p-0">
                            <img class="actor img-fluid w-50" src="{{asset("assets/img/actors/actor2.png")}}" alt="actor2.png" title="Brad Pitt">
                        </div>
                        <div class="cols d-flex justify-content-center align-items-center">
                            <h2>Brad Pitt</h2>
                        </div>
                </div>
                <div class="my-2">
                    <div class="p-2 row row-cols-2 row-cols-sm-2 row-cols-md-2 row-cols-lg-2">
                        <div class="cols p-0">
                            <img class="actor img-fluid w-50" src="{{asset("assets/img/actors/actor6.png")}}" alt="actor6.png" title="Robert Pattinson">
                        </div>
                        <div class="cols d-flex justify-content-center align-items-center">
                            <h2>Robert Pattinson</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
          <div class="ratio ratio-16x9 w-50">
			<iframe src="https://www.youtube.com/embed/TqtW4YcvKbU?si=G9TF6OAtPyVloLV1" title="YouTube video player" allowfullscreen></iframe>
          </div>
</section>
</body>
</html>
@endsection
