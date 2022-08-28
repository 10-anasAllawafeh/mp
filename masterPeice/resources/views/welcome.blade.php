@extends('layouts.app')

@section('title')
    Home page
@endsection

@section('content')
<div class="jumbotron jumbotron-fluid d-grid justify-content-center align-content-center" style="background-image:url(https://pix4free.org/assets/library/2021-10-15/originals/workers-rights.jpg);background-size:cover;width:100vw; height:85vh">
  <h1 class="" style="font-size: 3rem;color:azure">The Future of work</h1>
  <div class="input-group rounded mt-2" style="width: 20rem;">
    <input type="search" class="form-control rounded" id="search" onkeyup="searcher()" placeholder="Search" aria-label="Search" aria-describedby="search-addon" style="width: 12rem !important;" />
    <span class="input-group-text border-0" id="search-addon">
        <button style="border: none"><i class="fas fa-search"></i></button>
    </span>
    <ul id="results" style="background-color: white;color:orange;text-decoration:none;width:25vw"></ul>
</div>
</div>
{{-- <header class="container-fluid p-0" id="home">
  <img class="w3-image" style="width: 100vw; height:800px"  src="https://pix4free.org/assets/library/2021-10-15/originals/workers-rights.jpg" alt="Architecture" width="auto" height="auto">
  
</header> --}}
    <div class="row bg-light">
        <div class="row col-lg-3 col-xl-3 col-md-10 col-sm-10 px-5 pt-5 d-grid justify-content-start">
          <div class="col-12">
            <h3>Categories</h3>
            <ul>
                @foreach ($categories as $category)
                @if ($category->parent_id == NULL)
                <li><a href="category/{{$category->id}}" style="text-decoration: none;color:orange">{{$category->name}}</a></li>
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
                      <h3>latest Posts</h3>
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
                @if ($cityPosts)   
                <ul>
                    @foreach ($cityPosts as $post)
                    <li>{{$post->title}}</li>
                    @endforeach
                </ul>
                @endif
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
    <script>
        const data = {!! json_encode($categories, JSON_HEX_TAG) !!};
        console.log(data);
        const search = document.getElementById("search");
        const results = document.getElementById("results");
        let search_term = "";
        results.style.display='none';
        const showList = () => {
          results.innerHTML = "";
          data
            .filter((item) => {
              return (
                item.name.toLowerCase().includes(search_term)
              );
            })
            .forEach((e) => {
              const li = document.createElement("li");
              li.innerHTML = `<i>category: <a href='category/${e.id}'>${e.name}</a></i> `;
              results.appendChild(li);
            });
        };
      
        showList();
      
        search.addEventListener("change", (event) => {
          search_term = event.target.value.toLowerCase();
          showList();
          results.style.display='block';
        });
        search.addEventListener("blur", (event) => {
            results.style.display='none';
        });
        function searcher(){

          search_term = event.target.value.toLowerCase();
          if(search_term != ''){
            showList();
            results.style.display='block';
          }
          else{
            results.style.display='none';
          }
        }
      </script>
@endsection