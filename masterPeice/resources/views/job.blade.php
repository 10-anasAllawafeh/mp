@extends('layouts/profile')
@section('content')
<div class="container">
    <form action="" method="" >
        <div class="row d-grid">
            <div class="form-group col-3 offset-4">    
                <label for="">Job Title</label><br>
                <input type="text" class="form-control">
            </div>
            <div class="form-group col-3 offset-4">
                <label for="">Worker</label><br>
                <input type="text" class="form-control">
            </div>
            <div class="form-group col-3 offset-4">
                <label for="">Attach Files</label><br>
                <input type="text" class="form-control">
            </div>
            <div class="form-group col-3 offset-4">
                <label for="">Rating</label><br>
                <input type="range" class="form-control">
            </div>
            <div class="form-group col-3 offset-4">
                <label for="">Job Description</label><br>
                <textarea class="form-control"></textarea>
            </div>
            <div class="form-group col-2 offset-5 mt-4">
                <button type="submit" class="form-control btn btn-warning">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection