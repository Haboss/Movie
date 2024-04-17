@extends('layout')
@section('bg','background1')>
@section('content')
<div class="container pb-2">
    <h1 class="text-center display-6 pt-3 pb-1">Galéria</h1>
    <hr class="w-50 mx-auto">
    <div class="bela row row-cols-sm-3 row-cols-md-3 row-cols-lg-3 d-flex justify-content-center">
        @for($i = 0; $i < count($hatterek); $i++)
            @if ($i % 3 == 0)
                <div class="column">
            @endif
                <a href="/profil/hatter/{{$hatterek[$i]->id}}">
                    <img class="laci" src="{{asset('assets/img/hatterek/'.$hatterek[$i]->nev.'.png')}}">
                </a>
            @if ($i % 3 == 2 || $i == count($hatterek) - 1)
                </div>
            @endif
        @endfor
    </div>
</div>
@endsection
