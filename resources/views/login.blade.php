@extends('layout')
@section('content')
<div class="d-felx justify-content-center center pt-5">
    <h1 class="text-center display-6 pt-3 pb-1 fw-bold">Login</h1>
    <div class="login pb-2 w-25 mx-auto">
        <hr class="w-100 mx-auto">
        <div class="modal-content">
            <div class="modal-body pt-3 pe-5 ps-5">
                <form method="POST">
                    @csrf
                    <div class="mt-3 col-8 mx-auto">
                        <label for="username" class="form-label fs-6">Username:</label>
                        <input type="username" name="username" class="form-control">
                        @error('username')
                        <p class="text-danger pt-2"><b>{{$message}}</b></p>
                        @enderror
                    </div>
                    <div class="mt-3 col-8 mx-auto">
                        <label for="password" class="form-label fs-6">Password:</label>
                        <input type="password" name="password" class="form-control">
                        @error('password')
                        <p class="text-danger pt-2"><b>{{$message}}</b></p>
                        @enderror
                    </div>
                    </div>
                    <div class="modal-footer col-4 mx-auto mt-4">
                        <button type="submit" class="btn-register w-75">Login</button>
                    </div>
                </form>
            </div>
            <hr class="w-100 mx-auto">
        </div>
    </div>
</div>
@endsection
