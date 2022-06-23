@extends('layouts/profile')

@section('content')
  <div class="container">
    <form action="" method="post" class="form-group">
        <div class="row my-5">
            <div class="col-3 offset-3">
              <label for="">User Name</label><br>
              <input type="text" class="form-control">
            </div>
            <div class="col-3">
              <label for="">Picture</label><br>
              <input type="text" class="form-control">
            </div>
            <div class="col-3 offset-3">
              <label for="">Email</label><br>
              <input type="text" class="form-control">
            </div>
            <div class="col-3">
              <label for="">Phone</label><br>
              <input type="text" class="form-control">
            </div>
            <div class="col-3 offset-3">
              <label for="">Location</label><br>
              <input type="text" class="form-control">
            </div>
            <div class="col-3">
              <label for="">Address</label><br>
              <input type="text" class="form-control">
            </div>
            <div class="col-3 offset-3">
              <label for="">Password</label><br>
              <input type="text" class="form-control">
            </div>
            <div class="col-2 offset-1">
              <button type="submit" class="btn btn-group btn-warning form-control mt-4 justify-content-center">Edit</button>
            </div>
          </div>
        </form>
  </div>
@endsection