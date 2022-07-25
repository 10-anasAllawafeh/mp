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
                @foreach ($categories as $category)
                @if ($category->parent_id == NULL)
                <li>{{$category->name}}</li>
                @endif
                @endforeach
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
                        <h3>Popular Posts</h3>
                        @foreach ($popularPosts as $post)
                            <div class="card col-lg-xl-2 col-md-6 col-sm-10" style="width: 12rem; height:18rem; white-space: nowrap;
                            overflow: hidden; text-overflow: ellipsis">
                                <img class="card-img-top" src="/storage/{{$post->image}}" height="100px" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title">{{$post->title}}</h5>
                                  <p class="card-text">{{$post->excerpt}}</p>
                                  <a href="/post/id/{{$post->id}}" class="btn btn-primary">Continue reading</a>
                                </div>
                              </div>
                        @endforeach
                    </div>
                    <div class="row mt-4 d-flex justify-content-between">
                      <h3>Popular Posts</h3>
                      @foreach ($latestPosts as $post)
                          <div class="card col-lg-xl-2 col-md-6 col-sm-10" style="width: 12rem; height:18rem; white-space: nowrap;
                          overflow: hidden; text-overflow: ellipsis">
                              <img class="card-img-top" src="/storage/{{$post->image}}" height="100px" alt="Card image cap">
                              <div class="card-body">
                                <h5 class="card-title">{{$post->title}}</h5>
                                <p class="card-text">{{$post->excerpt}}</p>
                                <a href="/post/id/{{$post->id}}" class="btn btn-primary">Continue reading</a>
                              </div>
                            </div>
                      @endforeach
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
                  @foreach ($cityPosts as $post)
                      <li>{{$post->title}}</li>
                  @endforeach
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