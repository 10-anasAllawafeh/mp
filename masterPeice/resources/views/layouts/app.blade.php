<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    {{-- <script src="{{ mix('asset/js/app.js') }}" defer></script> --}}
    <script src="{{ mix('js/app.js') }}" defer></script>

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
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
      <nav class="navbar navbar-light bg-light ml-2 mr-2">
        <a class="navbar-brand pl-2 pt-0" href="{{url('/')}}">
          <img src="{{ asset('img/Free_Sample_By_Wix__1_-removebg-preview.png')}}" width="75" height="75" alt="logo">
        </a>
        <ul class="nav justify-content-center">
          <li class="nav-item">
            <a href="/" class="nav-link {{ Request::is('/') ? 'text-warning' : null }}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('about') ? 'text-warning' : null }}" href="/about">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('contact') ? 'text-warning' : null }}" href="/contact">Contact US</a>
          </li>
        <li class="nav-item mx-2">
          {{-- <!-- Authentication Links --> --}}
          @guest
          @if (Route::has('login'))
            <button class="btn btn-outline-warning" type="submit"><a class="text-decoration-none" href="{{ route('login') }}">{{ __('Login') }}</a></button>
          @endif
          @if (Route::has('register'))
            <button class="btn btn-outline-warning" type="submit"><a class="text-decoration-none" href="{{ route('register') }}">{{ __('Register') }}</a></button>
          @endif
        </li>
          @else
            <li class="nav-item ">
                    <a class="nav-link text-white text-danger" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
            </li>
          @endguest
        </ul>        
      </nav>
    </div>

        {{-- <main class="py-4"> --}}
          <main>
            @yield('content')
        </main>

        {{-- <footer class="bd-footer py-4 py-md-5 mt-5 bg-light">
          <footer class="bd-footer bg-dark">
            <div class=" py-2 py-md-3 px-5 px-md-1">
              <div class="row text-white">
                <div class="col-lg-3 mb-3">
                  <a class="d-inline-flex align-items-center mb-2 link-dark text-decoration-none" href="{{url('/')}}" aria-label="">
                  <img src="img/Free_Sample_By_Wix (1).jfif" width="200" height="200" alt="logo">
                  </a>
                   <ul class="list-unstyled small text-muted">
                    <li class="mb-2">Designed and built with all the love in the world by the <a href="/docs/5.2/about/team/">Bootstrap team</a> with the help of <a href="https://github.com/twbs/bootstrap/graphs/contributors">our contributors</a>.</li>
                    <li class="mb-2">Code licensed <a href="https://github.com/twbs/bootstrap/blob/main/LICENSE" target="_blank" rel="license noopener">MIT</a>, docs <a href="https://creativecommons.org/licenses/by/3.0/" target="_blank" rel="license noopener">CC BY 3.0</a>.</li>
                    <li class="mb-2">Currently v5.2.0-beta1.</li>
                  </ul> 
                </div>
                 <div class="col-6 col-lg-2 offset-lg-1 mb-3"> 
                   <h5>Links</h5>
                  <ul class="list-unstyled">
                    <li class="mb-2"><a href="/">Home</a></li>
                    <li class="mb-2"><a href="/docs/5.2/">Docs</a></li>
                    <li class="mb-2"><a href="/docs/5.2/examples/">Examples</a></li>
                    <li class="mb-2"><a href="https://themes.getbootstrap.com/">Themes</a></li>
                    <li class="mb-2"><a href="https://blog.getbootstrap.com/">Blog</a></li>
                    <li class="mb-2"><a href="">Swag Store</a></li>
                  </ul> 
                 </div> 
                <div class="col-6 col-lg-2 offset-lg-4 mt-5 ">
                  <h5>useful links</h5>
                  <ul class="list-unstyled">
                    <li class="mb-2 text-light"><a href="/">Home</a></li>
                    <li class="mb-2"><a href="/about">About us</a></li>
                    <li class="mb-2"><a href="/contact">Contact us</a></li>
                  </ul>
                </div>
                <div class="col-6 col-lg-2 mt-5">
                  <h5>Contact Information</h5>
                  <div class="d-flex justify-content-between">
                    <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                  </div>
                </div>
                 <div class="col-6 col-lg-2 mb-3">
                  <h5>Community</h5>
                  <ul class="list-unstyled">
                    <li class="mb-2"><a href="https://github.com/twbs/bootstrap/issues">Issues</a></li>
                    <li class="mb-2"><a href="https://github.com/twbs/bootstrap/discussions">Discussions</a></li>
                    <li class="mb-2"><a href="https://github.com/sponsors/twbs">Corporate sponsors</a></li>
                    <li class="mb-2"><a href="https://opencollective.com/bootstrap">Open Collective</a></li>
                  </ul>
                </div> 
              </div>
            </div>
          </footer> --}}
          <!-- Footer -->
<footer class="bg-warning text-center text-white mt-5">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button" target="_blank"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button" target="_blank"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button" target="_blank"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button" target="_blank"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button" target="_blank"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button" target="_blank"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->

    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Sign up for our newsletter</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example21" class="form-control" />
              <label class="form-label" for="form5Example21">Email address</label>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-outline-light mb-4">
              Subscribe
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->

    <!-- Section: Text -->
    <section class="mb-4">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
        repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
        eum harum corrupti dicta, aliquam sequi voluptate quas.
      </p>
    </section>
    <!-- Section: Text -->

    <!-- Section: Links -->
    {{-- <section class="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 6</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container --> --}}

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="/">Anas Allawafeh</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
    </div>
</body>
</html>
