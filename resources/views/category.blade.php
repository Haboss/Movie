@extends('layout')
@section('bg','background')
@section('bg-name', asset('assets/img/categorybg.png'))
@section('content')
<div class="h-75 w-100 d-flex justify-content-center align-items-center">
<h1 class="movieka">Movies</h1>
</div>
@endsection
@section('content2')
<section id="movies" class="text-center mx-4 mb-5">
    <h1 class="pt-5 text-center mt-5 fw-bold">Movies</h1>
    <div class="col-1 pt-5 ms-5">
        <label class="pb-3">Choose a Category:</label>
        <select class="form-control form-control-lg" onchange="location = this.value;">
            <option value="">All</option>
            @foreach($kategoria as $category)
                <option value="/category/{{$category->categoryid}}">{{$category->categoryname}}
                        {{-- @if ($category->categoryid == $id)
                            {{ $category->categoryname }}
                        @endif --}}
                </option>
            @endforeach
          </select>
    </div>
    <div class="text-center d-flex justify-content-center">
        <div class="categ gap-3 row row-cols-1 row-cols-sm-3 row-cols-md-3 row-cols-lg-3 row-cols-xl-3 justify-content-center align-items-center">
            @foreach ($filmek as $film)
            <div class="filmek cols">
                <img class="filmkep img-fluid" src="{{asset("assets/img/movies/film$film->filmid.png")}}">
                <a href="/movie/{{$film->filmid}}">
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
</section>
@endsection
