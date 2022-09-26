@extends('layouts/profile')
@section('content')
    <div class="container" style="height: 60vh">
        <div class="row mt-4 d-flex justify-content-between">
            <h1>My Ratings</h1>
            @if (!empty($jobs))
                @if (Auth::user()->role_id == 3)
                @foreach ($jobs as $item)
                    <div class="card col-lg-xl-3 col-md-6 col-sm-10" style="width: fit-content; height:18rem; white-space: nowrap;overflow: hidden; text-overflow: ellipsis">
                        <div class="card-body">
                            <p class="card-text">Job Description: {{$item->job_description}}</p>
                            <p class="card-text">My Rating: {{$item->customer_rate}}</p>
                            <p class="card-text">Job Date :{{$item->job_time}}</p>
                            <p class="card-text">Job price :{{$item->job_price}}</p>
                        </div>
                    </div>
                    @endforeach      
                    @else
                    @foreach ($jobs as $item)
                    <div class="card col-lg-xl-3 col-md-6 col-sm-10" style="width: fit-content; height:18rem; white-space: nowrap;overflow: hidden; text-overflow: ellipsis">
                        <div class="card-body">
                            <p class="card-text">Job Description: {{$item->job_description}}</p>
                            <p class="card-text">My Rating: {{$item->customer_rate}}</p>
                            <p class="card-text">Job Date :{{$item->job_time}}</p>
                            <p class="card-text">Job price :{{$item->job_price}}</p>
                            </div>
                        </div>
                    @endforeach      
                @endif
            @else
                <h5 class="text-white">There is no data yet</h5>
            @endif
        </div>
    </div>
@endsection