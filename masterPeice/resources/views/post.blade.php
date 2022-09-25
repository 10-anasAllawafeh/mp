@extends('layouts/app')

@section('content')
    <div class="container">
        @foreach ($post as $post)
        <h2>{{$post->title}}</h2>
        <img src="/storage/{{$post->image}}" alt="post image">
        <h6>{{$post->body}}</h6>
        <p>Auther: <a href="/poster/{{$post->id}}">{{$post->name}}</a></p>
            
        @endforeach
    </div>
@endsection