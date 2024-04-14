<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie</title>
    <link rel="stylesheet" href="{{asset("assets/css/bootstrap.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/mystyle.css")}}">
    <link rel="shortcut icon" href="{{asset('assets/img/logok/logo.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="{{asset('assets/js/bootstrap.bundle.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('slick-1.8.1/slick/slick.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('slick-1.8.1/slick/slick-theme.css')}}"/>
</head>
<body>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Register</h1>
                    <i type="button" class="close bi bi-x" data-bs-dismiss="modal" aria-label="Close"></i>
                </div>
                <div class="modal-body">
                    <form method="POST">
                        @csrf
                        <div>
                            <label for="email" class="form-label">Email:</label>
                            <input type="text" name="email" class="email form-control">
                            @error('email')
                            <p class="text-danger pt-2"><b>{{$message}}</b></p>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <label for="name" class="form-label">Name:</label>
                            <input type="name" name="name" class="form-control">
                            @error('name')
                            <p class="text-danger pt-2"><b>{{$message}}</b></p>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <label for="username" class="form-label">Username:</label>
                            <input type="username" name="username" class="form-control">
                            @error('username')
                            <p class="text-danger pt-2"><b>{{$message}}</b></p>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" name="password" class="form-control">
                            @error('password')
                            <p class="text-danger pt-2"><b>{{$message}}</b></p>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <label for="password_confirmation" class="form-label">Password:</label>
                            <input type="password" name="password_confirmation" class="form-control">
                            @error('password')
                            <p class="text-danger pt-2"><b>{{$message}}</b></p>
                            @enderror
                        </div>
                        <div class="mt-2">
                            <label for="age" class="form-label">Age:</label>
                            <input type="number" name="age" min="1" max="111" maxlength="2" class="form-control" value="{{old('age')}}">
                            @error('age')
                                <p class="text-danger pt-2"><b>{{$message}}</b></p>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn-register w-75">Register</button>
                    </div>
                </form>
                @if($errors->count() > 0)
                    <script>
                        (function() {
                            document.getElementsByClassName("btn btn-singup px-3")[0].click();
                        })();
                    </script>
                @endif
            </div>
        </div>
    </div>

    <div id="@yield('bg')" style="background-image: url(@yield('bg-name'))">
        <header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary container">
                <div class="container-fluid">
                    <a class="logo navbar-brand" href="/">
                        <img class="logoka" src="{{asset("assets/img/logok/logo.png")}}">
                    </a>
                    <!-- mobil -->
                    <div class="toggle-container d-flex justify-content-center align-items-center d-lg-none">
                        <button class="navbar-toggler collapse d-flex flex-column justify-content-around collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon top-bar"></span>
                            <span class="toggler-icon middle-bar"></span>
                            <span class="toggler-icon bottom-bar"></span>
                        </button>
                    </div>
                    <!-- mobil -->
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <div class="container">
                                <li class="nav-item">
                                    <a class="home" href="/">HOME</a>
                                </li>
                            </div>
                            <div class="container">
                                <li class="nav-item">
                                    <a class="movies" href="/movie">MOVIES</a>
                                </li>
                            </div>
                            <div class="container">
                                <li class="nav-item">
                                    <a class="celebrities" href="/actor">ACTORS</a>
                                </li>
                            </div>
                        </ul>
                        <ul class="navbar-nav ms-auto navmobil">
                            @guest
                                <div class="container">
                                    <li class="nav-item">
                                        <a class="signin nav-link" href="/login">Login</a>
                                    </li>
                                </div>
                                <div class="container">
                                    <li class="nav-item">
                                        <button class="btn btn-singup px-3" data-bs-toggle="modal" data-bs-target="#exampleModal">SIGN UP
                                            <i class="bi bi-person-circle"></i>
                                        </button>
                                    </li>
                                </div>
                            @else
                            <div class="container">
                                <li class="nav-item">
                                    <a class="celebrities" href="/profil">Profil</a>
                                </li>
                            </div>
                            <div class="container">
                                <li class="nav-item">
                                    <button class="btn btn-singup px-3">
                                        <a class="logout" href="/logout">Logout</a>
                                    </button>
                                </li>
                            </div>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        @yield('content')
    </div>
    @yield('content2')
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <ul>
                        <a class="logo navbar-brand" href="/">
                            <img class="logoka pb-3" src="{{asset('assets/img/logok/logo.png')}}">
                        </a>
                        <li>Budapest, Üteg u. 15, 1139</li>
                        <li>Call us: 06(12)345 6789</li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>About us</h4>
                </div>
            </div>
        </div>
    </footer>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="{{asset('slick-1.8.1/slick/slick.min.js')}}"></script>
<script src="{{asset('assets/js/myslick.js')}}"></script>
</body>
</html>
