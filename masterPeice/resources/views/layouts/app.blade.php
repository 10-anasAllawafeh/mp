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
    <script src="https://kit.fontawesome.com/ccfa87eec6.js" crossorigin="anonymous"></script>
    
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <style>
      body{
        background-image: url('http://cdn.wallpapersafari.com/13/6/Mpsg2b.jpg');
        background-repeat: no-repeat;
        background-size:cover;
      }
    </style>
</head>
<body onscroll="scrollFunction()">
    <div id="app">
      <button class="btn rounded-circle btn-xl border-0 bg-white" id="scrollbtn" onclick="scrollUp()" style="display:none;position:fixed;bottom:40px;right:40px;color:rgb(0, 0, 0);textAlign:center;backgroundColor:#ffffff;zIndex:999;">
      <i class="fa-solid fa-angles-up fa-xl"></i>
      </button>
      <nav class="navbar navbar-light px-0" 
      {{-- style="background-color: rgb(0 0 0 / 0%) !important;" --}}
      >
        <a class="navbar-brand pl-2 pt-0" href="{{url('/')}}">
          <img src="{{ asset('img/Free_Sample_By_Wix__1_-removebg-preview.png')}}" width="75" height="75" alt="logo">
        </a>
        <ul class="nav justify-content-center">
          <li class="nav-item">
            <a href="/" class="nav-link {{ Request::is('/') ? 'text-white' : 'text-dark' }}"><h4> Home <span class="sr-only">(current)</span></h4></a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('about') ? 'text-white' : 'text-dark' }}" href="/about"><h4>About Us</h4></a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('contact') ? 'text-white' : 'text-dark' }}" href="/contact"><h4>Contact US</h4></a>
          </li>
          <li class="nav-item mx-2">
            {{-- <!-- Authentication Links --> --}}
            @guest
            @if (Route::has('login'))
            <button class="btn btn-outline-warning" type="submit"><a class="text-decoration-none" href="{{ route('login') }}"><h4 class="text-dark">{{ __('Login') }}</h4></a></button>
            @endif
            @if (Route::has('register'))
            <button class="btn btn-outline-warning" type="submit"><a class="text-decoration-none" href="{{ route('register') }}"><h4 class="text-dark">{{ __('Sign Up') }}</h4></a></button>
            @endif
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link text-danger" href="/home">Profile</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-danger" href="{{ route('logout') }}"
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
          <!-- Footer -->
<footer class="bg-dark text-center text-white mt-5">
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

  <!-- Copyright -->
  <div class="text-center p-3" style="">
    © 2020 Copyright:
    <a class="text-white" href="/">Anas Allawafeh</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
  scrollUp=()=>{
    window.scrollTo({top: 0, left: 0, behavior: 'smooth'})
  }
  function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20){
            document.getElementById('scrollbtn').style.display='block';
        } else {
          document.getElementById('scrollbtn').style.display='none';
        }
    }
</script>
</html>
