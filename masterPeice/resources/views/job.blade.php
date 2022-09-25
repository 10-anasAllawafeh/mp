@extends('layouts/profile')
@section('content')
<div class="container mt-0 text-dark px-3">
    @if (session('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
        </div>
    @endif
</div>
<div class="container">
    <button class="form-control btn btn-warning" onclick="openForm()" id="openFormBtn" style="width: 12rem">Add new Post</button>
    <div class="form-popup" id="myForm">
        <form action="/addjob" method="" enctype="multipart/form-data">
            <div class="row d-grid">
                <div class="form-group col-3 offset-4">    
                    <label for="title">Job Title</label><br>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
                </div>
                <div class="form-group col-3 offset-4">    
                    <label for="category">Job category</label><br>
                    <select id="category" type="text" class="form-control form-select bg-white rounded form-control-md" name="category" value="{{ old('category') }}" required autocomplete="category">
                        @foreach ($categories as $category)
                        <option value={{$category->id}}>{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-3 offset-4">
                    <label for="excerpt">Excerpt</label><br>
                    <input type="text" class="form-control" id="excerpt" name="excerpt" value="{{ old('excerpt') }}" required>
                </div>
                <div class="form-group col-3 offset-4">
                    <label for="image">Image</label><br>
                    <input type="file" class="form-control" id="image" name="image" value="{{ old('image') }}" required>
                </div>
                <div class="form-group col-3 offset-4">
                    <label for="body">body</label><br>
                    <textarea class="form-control" cols="10" rows="5"  id="body" name="body" value="{{ old('body') }}" required></textarea>
                </div>
                <div class="form-group col-3 offset-4">
                    <label for="jobCity">Job City</label><br>
                    <select id="jobCity" type="text" class="form-control form-select bg-white rounded form-control-md" name="city" value="{{ old('city') }}" required autocomplete="city">
                        <option value="Amman">Amman</option>
                        <option value="Aqaba">Aqaba</option>
                        <option value="Maan">Maan</option>
                        <option value="Irbid">Irbid</option>
                        <option value="Zarqa">Zarqaa</option>
                        <option value="Ajloun">Ajloun</option>
                        <option value="Jarash">Jarash</option>
                        <option value="Al-Mafraq">Al-Mafraq</option>
                        <option value="Al-Tafeela">Al-Tafila</option>
                        <option value="El-Karak">Al-Karak</option>
                        <option value="Madaba">Madaba</option>
                        <option value="Al-Salt">Al-Salt</option>
                    </select>
                </div>
                <div class="form-group col-2 offset-5 mt-4">
                    <button type="submit" class="form-control btn btn-warning">Submit</button>
                </div>
                <div class="form-group col-2 offset-5 mt-4">
                    <button type="button" class="form-control btn btn-warning" onclick="closeForm()">Cancel</button>
                </div>
            </div>
        </form>
    </div>
    <div class="row mt-4 d-flex justify-content-between">
        <h3>My Posts</h3>
        @foreach ($jobs as $post)
                <div class="card col-lg-xl-3 col-md-6 col-sm-10" style="width: 12rem; height:18rem; white-space: nowrap;
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
        <h3>My Jobs</h3>

        <h5>Job Offers</h5>
        @foreach ($jobOffers as $item)
                <div class="card col-lg-xl-4 col-md-6 col-sm-10" style="width:fit-content; height:18rem; white-space: nowrap;
                overflow: hidden; text-overflow: ellipsis">
                    <div class="card-body">
                        {{-- <h5 class="card-title">{{$item->title}}</h5> --}}
                        <p class="card-text">Customer Name: {{$item->name}}</p>
                        <p class="card-text">Job Description: {{$item->job_description}}</p>
                        <p class="card-text">Job Date :{{$item->job_time}}</p>
                        <p class="card-text">Job price :{{$item->job_price}}</p>
                        <p class="card-text">Job location :{{$item->city}}</p>
                        <a href="/approvejob/{{$item->id}}" class="btn btn-success">Approve</a>
                        <a href="/declinejob/{{$item->id}}" class="btn btn-danger">Decline</a>
                    </div>
                </div>
        @endforeach
    </div>

</div>
@endsection