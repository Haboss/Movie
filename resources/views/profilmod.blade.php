@extends('layout')
@section('content')
@section('bg','background1')
@section('bg-name', asset('assets/img/hatterek/'.$hatter.'.png'))
<!--vagas-->
<main class="border-dark">
    <section class="py-4 px-2">
        <div class="d-felx justify-content-center center pt-5">
            <h1 class="text-center display-6 pt-3 pb-1 fw-bold">Edit Profile</h1>
            <div class="login pb-2 w-25 mx-auto">
                <hr class="w-100 mx-auto">
                <div class="modal-content">
                    <div class="modal-body pt-3 pe-5 ps-5">
                        <form method="post" action="/profilmodositas">
                            @csrf
                            @foreach ($result as $row)
                                <div class="mt-3 col-8 mx-auto">
                                    <label for="name" class="form-label fs-6">Name:</label>
                                    <input id="name" type="text" name="name" class="form-control" value="{{$row->name}}">
                                    @error('name')
                                        <p class="text-danger pt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mt-3 col-8 mx-auto">
                                    <label for="password" class="form-label fs-6">Password:</label>
                                    <input id="password" type="password" name="password" class="form-control">
                                    @error('password')
                                        <p class="text-danger pt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mt-3 col-8 mx-auto">
                                    <label for="age" class="form-label fs-6">Age:</label>
                                    <input id="password" type="number" name="age" class="form-control" value="{{$row->age}}">
                                    @error('age')
                                        <p class="text-danger pt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="modal-footer col-4 mx-auto mt-4">
                                    <button type="submit" class="btn-register w-75">Edit</button>
                                </div>
                            @endforeach
                        </form>
                    </div>
                </div>
                <hr class="w-100 mx-auto">
            </div>
        </div>
    </section>
</main>
<!--vagas-->
@endsection
