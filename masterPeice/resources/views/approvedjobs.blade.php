@extends('layouts/profile')
@section('content')
    <div class="container mt-0 text-dark px-3">
        @if (session('message'))
            <div class="alert alert-success" role="alert">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <div class="container" style="height:60vh">
        <div class="row mt-4 d-flex justify-content-between">
            <h1>In Proccess Jobs</h1>
            @if (!empty($jobOffers))
              @if (Auth::user()->role_id == 3)
              @foreach ($jobOffers as $item)
                  <div class="card col-lg-xl-3 col-md-6 col-sm-10" style="width: fit-content; height:18rem; white-space: nowrap;overflow: hidden; text-overflow: ellipsis">
                      <div class="card-body">
                          <p class="card-text">Customer Name: {{$item->name}}</p>
                          <p class="card-text">Customer phone: {{$item->phone}}</p>
                          <p class="card-text">Job Description: {{$item->job_description}}</p>
                          <p class="card-text">Job Date :{{$item->job_time}}</p>
                          <p class="card-text">Job price :{{$item->job_price}}</p>
                          <p class="card-text">Job location :{{$item->city}}</p>
                          <button type="button" data-toggle="modal" data-target="#workerDoneModal{{$item->id}}" class="col-2 col-sm-12 btn btn-warning mt-3"><h6 class="text-danger">finish?</h6></button>
                      </div>
                  </div>
              @endforeach      
              @else
                  @foreach ($jobOffers as $item)
                      <div class="card col-lg-xl-3 col-md-6 col-sm-10" style="width: fit-content; height:18rem; white-space: nowrap;overflow: hidden; text-overflow: ellipsis">
                          <div class="card-body">
                              <p class="card-text">Worker Name: {{$item->name}}</p>
                              <p class="card-text">Worker phone: {{$item->phone}}</p>
                              <p class="card-text">Job Description: {{$item->job_description}}</p>
                              <p class="card-text">Job Date :{{$item->job_time}}</p>
                              <p class="card-text">Job price :{{$item->job_price}}</p>
                              <p class="card-text">Job location :{{$item->city}}</p>
                              <button type="button" data-toggle="modal" data-target="#customerDoneModal{{$item->id}}" class="col-2 col-sm-12 btn btn-warning mt-3"><h6 class="text-danger">Done!</h6></button>
                          </div>
                      </div>
                  @endforeach      
              @endif
            @else
              <h5 class="text-white">There is no data yet</h5>
            @endif
        </div>
    </div>

    @if (Auth::user()->role_id == 3)
    @foreach ($jobOffers as $item)
    <div class="modal fade" id="workerDoneModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="/confirmjob/{{$item->id}}" method="POST">
            @csrf
            <div class="modal-body">
              <div class="form-floating mb-3">
                <input type="range" min="1" max="5" class="form-control" id="reciptant" name="rate" >
                <input type="hidden" class="form-control disabled" id="worker_id" name="workerRateCustomer" value="{{Auth::id()}}">
                <label for="reciptant">Rate the Customer</label>
              </div>
              <div class="form-floating mb-3">
                <textarea class="form-control" id="description" name="note" placeholder="" required></textarea>
                <label for="description">notes</label>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" name="submit" class="btn btn-primary">Confirm</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    @endforeach
    @else
    @foreach ($jobOffers as $item)
    <div class="modal fade" id="customerDoneModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="/confirmjob/{{$item->id}}" method="post">
            @csrf
            <div class="modal-body">
              <div class="form-floating mb-3">
                <input type="range" min="1" max="5" class="form-control range" id="reciptant" name="rate">
                <input type="hidden" class="form-control disabled" id="worker_id" name="customerRateWorker" value="{{Auth::id()}}">
                <label for="reciptant">Rate the Worker</label>
              </div>
              <div class="form-floating mb-3">
                <textarea class="form-control" id="description" name="note" placeholder="" required></textarea>
                <label for="description">notes</label>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" name="submit" class="btn btn-primary">Confirm</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    @endforeach
    @endif
@endsection
