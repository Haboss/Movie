@extends('layout')
@section('content')
@section('bg','background1')
@section('bg-name', asset('assets/img/categorybg.png'))
    @yield('content')
    @yield('content2')
<div id="background4">
    <header>
    <div class="col-1 pt-5 ms-5">
        <select class="form-control form-control-lg">
            <option>---All---</option>
            <option>Action</option>
            <option>Adventure</option>
            <option>Comedy</option>
            <option>Fantasy</option>
            <option>Horror</option>
            <option>Musical</option>
            <option>Mystery</option>
            <option>Romance</option>
            <option>Sci-fi</option>
            <option>Sport</option>
            <option>Thriller</option>
            <option>Western</option>
          </select>
        </div>
        <section id="movies" class="text-center mx-4 mb-5">
            <div class="text-center">
                <div class="categ row">
                    <div class="col-8">
                        <h1 class="pt-5">New Movies</h1>
                        <div class="categ row row-cols-1 row-cols-sm-3 row-cols-md-3 row-cols-lg-3">
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
                        <div class="categ row row-cols-1 row-cols-sm-3 row-cols-md-3 row-cols-lg-3">
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
                </div>
            </div>
        </div>
    </div>
    </header>
</div>
</section>
</html>
@endsection
