{{-- @extends('layouts.app')

@section('content') --}}
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    {{-- font Awesome --}}
    <script src="https://kit.fontawesome.com/8fdd3e44f7.js" crossorigin="anonymous"></script>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-light ml-2 mr-2">
    <button class="btn btn-primary navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions" style="margin-top: -50px;"><i class="fas fa-bars"></i></button>

    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
    <div class="offcanvas-header">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="list-unstyled">
            <li class="nav-item active d-flex justify-content-center border bg-light py-2">
            <a class="nav-link" href="/">Main page<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item d-flex justify-content-center border bg-light py-2">
            <a class="nav-link" href="/job">Job</a>
            </li>
            {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
            </li> --}}
            <li class="nav-item d-flex justify-content-center border bg-light py-2">
            <a class="nav-link" href="/home">My Information</a>
            </li>
            <li class="nav-item d-flex justify-content-center border bg-light py-2">
            <a class="nav-link" href="/job">My Ratings</a>
            </li>
            <li class="nav-item d-flex justify-content-center border bg-light py-2">
              <a class="nav-link" href="/">Follow list</a>
            </li>
            <li class="nav-item d-flex justify-content-center border bg-light py-2">
              <a class="nav-link text-danger" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
            </li>
            </ul>
    </div>
    </div>  
    <a class="navbar-brand pl-2 pt-0" href="{{url('/')}}">
    <img src="{{ asset('img/Free_Sample_By_Wix (1).jfif')}}" width="100" height="100" alt="logo">
    </a>
    </nav>
{{-- @endsection --}}
<main>
@yield('content')
</main>
          <footer class="bd-footer">
            <div class="container py-4 py-md-5 px-4 px-md-3">
              <div class="row">
                <div class="col-lg-3 mb-3">
                  <a class="d-inline-flex align-items-center mb-2 link-dark text-decoration-none" href="{{url('/')}}" aria-label="">
                  <img src="img/Free_Sample_By_Wix (1).jfif" width="200" height="200" alt="logo">
                  </a>
                  <!-- <ul class="list-unstyled small text-muted">
                    <li class="mb-2">Designed and built with all the love in the world by the <a href="/docs/5.2/about/team/">Bootstrap team</a> with the help of <a href="https://github.com/twbs/bootstrap/graphs/contributors">our contributors</a>.</li>
                    <li class="mb-2">Code licensed <a href="https://github.com/twbs/bootstrap/blob/main/LICENSE" target="_blank" rel="license noopener">MIT</a>, docs <a href="https://creativecommons.org/licenses/by/3.0/" target="_blank" rel="license noopener">CC BY 3.0</a>.</li>
                    <li class="mb-2">Currently v5.2.0-beta1.</li>
                  </ul> -->
                </div>
                <!-- <div class="col-6 col-lg-2 offset-lg-1 mb-3"> -->
                  <!-- <h5>Links</h5>
                  <ul class="list-unstyled">
                    <li class="mb-2"><a href="/">Home</a></li>
                    <li class="mb-2"><a href="/docs/5.2/">Docs</a></li>
                    <li class="mb-2"><a href="/docs/5.2/examples/">Examples</a></li>
                    <li class="mb-2"><a href="https://themes.getbootstrap.com/">Themes</a></li>
                    <li class="mb-2"><a href="https://blog.getbootstrap.com/">Blog</a></li>
                    <li class="mb-2"><a href="">Swag Store</a></li>
                  </ul> -->
                <!-- </div> -->
                <div class="col-6 col-lg-2 offset-lg-5 mb-3">
                  <h5>useful links</h5>
                  <ul class="list-unstyled">
                    <li class="mb-2"><a href="/">Main Page</a></li>
                    <li class="mb-2"><a href="/about">About us</a></li>
                    <li class="mb-2"><a href="/contact">Contact us</a></li>
                  </ul>
                </div>
                <div class="col-6 col-lg-2 mb-3">
                  <h5>Contact Information</h5>
                  <ul class="list-unstyled">
                    <li class="mb-2"><a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="mb-2"><a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li class="mb-2"><a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li class="mb-2"><a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                  </ul>
                </div>
                {{-- <div class="col-6 col-lg-2 mb-3">
                  <h5>Community</h5>
                  <ul class="list-unstyled">
                    <li class="mb-2"><a href="https://github.com/twbs/bootstrap/issues">Issues</a></li>
                    <li class="mb-2"><a href="https://github.com/twbs/bootstrap/discussions">Discussions</a></li>
                    <li class="mb-2"><a href="https://github.com/sponsors/twbs">Corporate sponsors</a></li>
                    <li class="mb-2"><a href="https://opencollective.com/bootstrap">Open Collective</a></li>
                  </ul>
                </div> --}}
              </div>
            </div>
          </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>