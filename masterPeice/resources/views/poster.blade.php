<?php 
  $rating=0;
?>
@extends('layouts.app')

@section('content')
<div class="row mx-2 mt-4 d-flex justify-content-between">
  @if (session('message'))
    <div class="alert alert-success" role="alert">
        {{ session('message') }}
    </div>
  @endif
  <div class="row d-flex justify-content-between">
    <h1 class="col-4">{{$posterPosts[0]->name}} Profile</h1>
    <button data-toggle="modal" data-target="#exampleModalCenter" class="col-2 col-sm-12 btn btn-warning mt-3"><h6 class="text-danger">Send Job Offer ?</h6></button>
  </div>

  <div class="row">
    <h2>Personal Info</h2>
    <h5>Spicialized : {{$category->name}}</h5>
    <h5>Pricing : {{$posterPosts[0]->Pricing}}$/H</h5>
    <h5>Rating :  /5</h5>
  </div>
    @if (count($posterPosts) === 0)
    <div class="container"><h6 style="color: grey;text-align:center">no posts yet</h6></div>
    @endif
    <h3>{{$posterPosts[0]->name}} Posts</h3>
    @foreach ($posterPosts as $post)
        <div class="card col-lg-4 col-xl-4 col-md-6 col-sm-10" style="width: 12rem; height:18rem; white-space: nowrap;
        overflow: hidden; text-overflow: ellipsis">
            <img class="card-img-top" src="/storage/{{$post->image}}" height="100px" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{$post->title}}</h5>
              <p class="card-text">{{$post->excerpt}}</p>
              <a href="/post/id/{{$post->id}}" class="btn btn-primary">Read More...</a>
            </div>
          </div>
    @endforeach
    <div class="row">
      <h3>Previous Job Deals</h3>
    </div>
</div>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Job Offer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @if ($visitor_id !== '' && $visitor_id != $posterPosts[0]->author_id)
        <form action="/joboffer" method="post">
          @csrf
          <div class="modal-body">
            <div class="form-floating mb-3">
              <input type="text" class="form-control disabled" id="reciptant" >
              <input type="hidden" class="form-control disabled" id="worker_id" name="worker_id" value="{{$posterPosts[0]->author_id}}">
              <label for="reciptant">To : {{$posterPosts[0]->name}}</label>
            </div>
            <div class="form-floating mb-3">
              <textarea class="form-control" id="description" name="description" placeholder="" required></textarea>
              <label for="description">Job Description</label>
            </div>
            <div class="form-floating mb-3">
              <input type="date" class="form-control" id="timing" name="timing" placeholder="" required>
              <label for="timing">Timing</label>
            </div>
            <div class="form-floating">
              <input type="number" min="{{$posterPosts[0]->Pricing}}" value="{{$posterPosts[0]->Pricing}}" class="form-control" id="pricing" name="pricing" placeholder="" required>
              <label for="pricing">Pricing</label>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      @else
        <div class="modal-body">
          <div class="container d-grid" style="justify-items: center">
            <p>You need to be logged In to make a Job offer </p>
            <a href="/login" class="btn btn-primary w-25">log in ?</a>
          </div>
        </div>
      @endif
    </div>
  </div>
</div>
@endsection