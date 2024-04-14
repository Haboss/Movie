@extends('layout')
@section('bg','background1')
@section('content')
<!--vágás-->
<div class="container pb-2">
    <h1 class="text-center display-6 pt-3 pb-1">Galéria</h1>
    <hr class="w-50 mx-auto">
    <div class="row">
        <div class="column">
          <img src="{{asset('assets/img/galeria/alien.png')}}">
          <img src="{{asset('assets/img/galeria/assassinscreed.png')}}">
          <img src="{{asset('assets/img/galeria/avengers.png')}}">
          <img src="{{asset('assets/img/galeria/batman.png')}}">
          <img src="{{asset('assets/img/galeria/blackadam.png')}}">
          <img src="{{asset('assets/img/galeria/dom.png')}}">
          <img src="{{asset('assets/img/galeria/fastx.png')}}">
        </div>
        <div class="column">
          <img src="{{asset('assets/img/galeria/ironman.png')}}">
          <img src="{{asset('assets/img/galeria/johnwick.png')}}">
          <img src="{{asset('assets/img/galeria/kungfupanda.png')}}">
          <img src="{{asset('assets/img/galeria/lightningmcqueen.png')}}">
          <img src="{{asset('assets/img/galeria/naruto.png')}}">
          <img src="{{asset('assets/img/galeria/onepiece.png')}}">
        </div>
    </div>

</div>
<!--vágás-->
@endsection
