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
</head>
<body>
    <div class="background">
    <header>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Register</h1>
                        <i type="button" class="close bi bi-x" data-bs-dismiss="modal" aria-label="Close"></i>
                    </div>
                    <div class="modal-body">
                        <div>
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" name="email" class="email form-control">
                        </div>
                        <div class="mt-3">
                            <label for="name" class="form-label">Name:</label>
                            <input type="name" name="name" class="form-control">
                        </div>
                        <div class="mt-3">
                            <label for="username" class="form-label">Username:</label>
                            <input type="username" name="username" class="form-control">
                        </div>
                        <div class="mt-3">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="mt-3">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="mt-2">
                            <label for="kor" class="form-label">Age:</label>
                            <input type="number" name="kor" min="1" max="111" maxlength="2" class="form-control" value="{{old('kor')}}">
                            @error('kor')
                                <p class="text-danger"><b>{{$message}}</b></p>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn-register w-75">Register</button>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary container">
            <div class="container-fluid">
                <a class="logo navbar-brand" href="/">
                    <img class="logoka" src="{{asset("assets/img/logok/logo.png")}}">
                </a>
                <!-- mobil -->
                      <button class="navbar-toggler collapse d-flex d-lg-none flex-column justify-content-around" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="toggler-icon top-bar"></span>
                        <span class="toggler-icon middle-bar"></span>
                        <span class="toggler-icon bottom-bar"></span>
                      </button>
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
                                <a class="celebrities" href="/celebrity">CELEBRITIES</a>
                            </li>
                        </div>
                        <div class="container">
                            <li class="nav-item">
                                <a class="community" href="/community">COMMUNITY</a>
                            </li>
                        </div>
                    </ul>
                    <ul class="navbar-nav ms-auto navmobil">
                        <div class="container">
                            <li class="nav-item">
                                <a class="help nav-link" href="/help">HELP</a>
                            </li>
                        </div>
                        <div class="container">
                            <li class="nav-item">
                                <a class="signin nav-link" href="/signin">SIGN IN</a>
                            </li>
                        </div>
                        <div class="container">
                            <li class="nav-item">
                                <button class="btn btn-singup px-3" data-bs-toggle="modal" data-bs-target="#exampleModal">SIGN UP
                                    <i class="bi bi-person-circle"></i>
                                </button>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="container">
        <div class="search d-flex justify-content-center">
            <input type="text" class="form-control w-75 bg-dark mb-4" name="search" id="search" placeholder="Search for a movie, TV show or celebrity that you are looking for...">
        </div>
        <div class="text-center">
            <div class="categ row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
                <div class="cols">
                    <a href="/horror">
                        <img class="img-fluid category h-100" src="{{asset("assets/img/category/horror.png")}}">
                        <span class="overlay-text">Horror</span>
                    </a>
                </div>
                <div class="cols">
                    <a href="/action">
                        <img class="img-fluid category h-100" src="{{asset("assets/img/category/action.png")}}">
                        <span class="overlay-text">Action</span>
                    </a>
                </div>
                <div class="cols">
                    <a href="/comedy">
                        <img class="img-fluid category h-100" src="{{asset("assets/img/category/comedy.png")}}">
                        <span class="overlay-text">Comedy</span>
                    </a>
                </div>
                <div class="cols">
                    <a href="/romance">
                        <img class="img-fluid category h-100" src="{{asset("assets/img/category/romance.png")}}">
                        <span class="overlay-text">Romance</span>
                    </a>
                </div>
            </div>
        </div>
    </main>
</div>
</body>
</html>
