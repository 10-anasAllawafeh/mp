@extends('layouts.app')

@section('content')
<div class="row mx-2 mt-4 d-flex justify-content-between">
    @if (count($categoryPosts) === 0)
    <div class="container"><h6 style="color: grey;text-align:center">no posts yet</h6></div>  
    @else
    <h3>{{$categoryPosts[0]->name}} Posts</h3>
    @foreach ($categoryPosts as $post)
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
    @endif
</div>
@endsection