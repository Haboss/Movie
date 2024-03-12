@extends('layout')
@section('content')
<!--vágás-->
<div class="container pb-2">
    <h1 class="text-center display-6 pt-3 pb-1">Belépés</h1>
    <hr class="w-50 mx-auto">
    <div class="w-50 border bg-white p-2 mx-auto">
        <form action="/login" method="post">
        @csrf
        <div class="mt-2">
            <label for="email" class="form-label">E-mail:</label>
            <input type="text" name="email" class="form-control">
            @error('email')
                <p class="text-danger"><b>{{$message}}</b></p>
            @enderror
        </div>
        <div class="mt-2">
            <label for="password" class="form-label">Jelszó:</label>
            <input type="password" name="password" class="form-control">
            @error('password')
                <p class="text-danger"><b>{{$message}}</b></p>
            @enderror
        </div>
        @isset($hiba)
            <p class="text-danger">{{$hiba}}</p>
        @endisset

        <div class="mt-4">
            <button type="submit" class="btn btn-info text-white w-100">Belépés</button>
        </div>
        </form>
    </div>
</div>
<!--vágás-->
@endsection
