@extends('layouts.app')

@section('title')
    Home page
@endsection

@section('content')
    <div class="row bg-light">
        <div class="row col-lg-3 col-xl-3 col-md-10 col-sm-10 px-5 pt-5 d-grid justify-content-start">
            <div class="col-12">
                <h3>Categories</h3>
                <ul>
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                </ul>
            </div>
            <div class="col-12">
                <h3>Similar Search</h3>
                <ul>
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                </ul>
            </div>
        </div>
        <div class="col-lg-6 col-xl-6 col-md-10 col-sm-10" style="display: grid; justify-items:center">
            {{-- <div class="container d-grid justify-content-end"> --}}
                <div class="input-group rounded" style="width: 20rem;">
                    <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" style="width: 12rem !important;" />
                    <span class="input-group-text border-0" id="search-addon">
                      <button style="border: none"><i class="fas fa-search"></i></button>
                    </span>
                  </div>
                <div>
                    <div class="row mt-4 d-flex justify-content-between">
                        <h3>Most Viewed</h3>
                        <div class="card col-lg-xl-2 col-md-6 col-sm-10" style="width: 12rem;">
                            <img class="card-img-top" src={{ asset('img/handymen.png')}} alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div>
                          <div class="card col-lg-xl-2 col-md-6 col-sm-10" style="width: 12rem;">
                            <img class="card-img-top" src={{ asset('img/handymen.png')}} alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div>
                          <div class="card col-lg-xl-2 col-md-6 col-sm-10" style="width: 12rem;">
                            <img class="card-img-top" src={{ asset('img/handymen.png')}} alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div>
                    </div>
                    <div class="row mt-4 d-flex justify-content-between">
                        <h3>Latest Works</h3>
                        <div class="card col-lg-xl-2 col-md-6 col-sm-10" style="width: 12rem;">
                            <img class="card-img-top" src={{ asset('img/handymen.png')}} alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div>
                          <div class="card col-lg-xl-2 col-md-6 col-sm-10" style="width: 12rem;">
                            <img class="card-img-top" src={{ asset('img/handymen.png')}} alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div>
                          <div class="card col-lg-xl-2 col-md-6 col-sm-10" style="width: 12rem;">
                            <img class="card-img-top" src={{ asset('img/handymen.png')}} alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div>
                    </div>
                </div>
            {{-- </div> --}}
        </div>
        <div class="col-lg-3 col-xl-3 col-md-10 col-sm-10 px-5 pt-5 d-grid justify-content-end">
            <div class="col-12">
                <h3>Your Friends</h3>
                <ul>
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                </ul>
            </div>
            <div class="col-12">
                <h3>Around You</h3>
                <ul>
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                </ul>
            </div>
        </div>
    </div>


    <script>
        const searchFocus = document.getElementById('search-focus');
        const keys = [
            { keyCode: 'AltLeft', isTriggered: false },
            { keyCode: 'ControlLeft', isTriggered: false },
        ];

        window.addEventListener('keydown', (e) => {
        keys.forEach((obj) => {
            if (obj.keyCode === e.code) {
            obj.isTriggered = true;
            }
        });

        const shortcutTriggered = keys.filter((obj) => obj.isTriggered).length === keys.length;

        if (shortcutTriggered) {
            searchFocus.focus();
        }
        });

        window.addEventListener('keyup', (e) => {
        keys.forEach((obj) => {
            if (obj.keyCode === e.code) {
            obj.isTriggered = false;
            }
        });
        });
    </script>
@endsection