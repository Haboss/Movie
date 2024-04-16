@extends('layout')
@section('bg','background')
@section('content')
@section('bg-name', asset('assets/img/homebg.png'))
<main>
    <section id="head" class="container pt-5">
        <div class="search d-flex justify-content-center">
            <input type="text" class="form-control w-75 bg-dark mb-4" name="search" id="search" placeholder="Search for a movie, TV show or celebrity that you are looking for...">
            <button class="btn-search">
                <div class="container d-flex align-items-center gap-2">
                    <a class="logout" href="">Search</a>
                    <i class="kereses fa-solid fa-magnifying-glass"></i>
                </div>
            </button>
        </div>
        <div class="text-center pt-5">
            <div class="sldr">
                @foreach($kategoria as $category)
                    <div class="films slider-for">
                        <a href="movie/{{$category->categoryid}}">
                            <img class="img-fluid category h-100" src="{{asset("assets/img/category/category$category->categoryid.png")}}">
                            <span class="overlay-text">{{$category->categoryname}}</span>
                        </a>
                    </div>
                @endforeach
                <div class="films slider-for">
                    <!--<a href="/movie">-->
                    <img class="img-fluid category h-100" src="{{asset("assets/img/category/others.png")}}">
                    <span class="overlay-text">Others+</span>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('content2')
<section id="movies" class="text-center mx-4 mb-5">
    <div class="text-center">
        <div class="categ row">
            <div class="col-8">
                <h1 class="pt-5 fw-bold">New Movies</h1>
                <div class="text-center d-flex justify-content-center">
                    <div class="categ gap-3 row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 row-cols-xl-2 justify-content-center align-items-center">
                        @foreach ($filmek as $film)
                        <div class="filmek cols">
                            <img class="filmkep img-fluid" src="{{asset("assets/img/movies/film$film->filmid.png")}}">
                            <a href="">
                                <div class="filmkep_overlay">
                                    <div>
                                        <div class="filmkep_cim">{{ $film->movietitle }}</div>
                                        <p class="filmkep_szoveg">
                                            {{ $film->date }}. {{ $film->categoryname }} {{ $film->movielength }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-4 d-flex flex-column">
                <h1 class="pt-5 fw-bold">Actors</h1>
                @foreach ($actors as $actor)
                <div class="my-2">
                    <a href="{{ $actor->link }}" target="_blank" class="actors">
                        <div class="pt-5 row row-cols-2 row-cols-sm-2 row-cols-md-2 row-cols-lg-2">
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
    </div>
    <h1 class="py-5 fw-bold">Trailer</h1>
    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 d-flex justify-content-center align-items-center">
            <div class="col p-4">
                <div class="ratio ratio-16x9">
                    <iframe  src="https://www.youtube.com/embed/TqtW4YcvKbU?si=G9TF6OAtPyVloLV1" width="150%" height="450" title="YouTube video player" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col p-4">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/AMwJ4a9ny7k?si=Lc-My5D3bv2zHWXG" width="150%" height="450" title="YouTube video player" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
@endsection
