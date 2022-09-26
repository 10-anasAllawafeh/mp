<?php $city=Auth::user()->city;  ?>

@extends('layouts/profile')

@section('content')
<div class="container  text-dark px-3 mt-0">
  @if (session('status'))
      <div class="alert alert-success" role="alert">
          {{ session('status') }}
      </div>
  @endif
</div>
<section class="vh-100 bg-image"
style="background-repeat: no-repeat; background-size:cover;"
>
<div class="container h-100">
  
  <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0">
          <div class="card mb-3 mt-3" style="border-radius: .5rem;">
              <div class=" mt-3 text-dark " style="font-size: 30px;text-align:center">{{ __('User Profile') }}</div>
              <div class="row g-0">
                  <div class="col-md-4 col-sm-12 gradient-custom text-center text-info"
                    style="border-top-left-radius: .9rem; border-bottom-left-radius: .9rem;">
                    <img src="storage/{{ Auth::user()->avatar }}"
                      alt="Avatar" height="150px" class=" my-5 mx-3 " style="width: 150px;" />
                </div>
          <div class="col-md-8 col-sm-12">
              <div class=" p-2">
                @switch( Auth::user()->role_id )
                    @case(2)
                      <h6 style="color:lime">User Information</h6>
                      @break
                    @case(3)
                      <h6 style="color: darkorange">Worker Information</h6>
                      @break
                    @default
                      <h6 style="color:blue">Adminstrator Information</h6>
                      @break
                @endswitch
                <hr class="mt-0 mb-4">
                <form action="/edituser/{{Auth::user()->id}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('put')
                <div class="row pt-1">
                  <div class="col-8 mx-3 mb-3">
                    <h6>User name</h6>
                    <input type="text" name="name" id="" class="form-control form-control-lg rounded" value="{{ Auth::user()->name }}" style="border-radius:5px !important ">
                  </div>
                </div>
                <div class="row pt-1">
                  <div class="col-8 mx-3 mb-3">
                    <h6>Email</h6>
                    <input type="email" name="email" id="" class="form-control form-control-lg rounded" value="{{ Auth::user()->email }}" style="border-radius:5px !important ">
                  </div>
                </div>
                <div class="row pt-1">
                  <div class="col-8 mx-3 mb-3">
                    <h6>phone</h6>
                    <input type="number" name="phone" id="" class="form-control form-control-lg " value="{{ Auth::user()->phone }}" style="border-radius:5px !important ">
                  </div>
                </div>
                <div class="row pt-1">
                  <div class="col-8 mx-3 mb-3">
                    <h6>city</h6>
                    <select id="userCity" type="text" class="form-control form-select bg-white rounded form-control-md" name="userCity"  required autocomplete="userCity">
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
                </div>
                <div class="row pt-1">
                  <div class="col-8 mx-3 mb-3">
                    <h6>Avatar</h6>
                    <input type="file" name="image" id="" class="form-control form-control-lg bg-white " value="{{ Auth::user()->avatar }}" style="border-radius:5px !important ">
                  </div>
                </div>
                {{-- <div class="row pt-1">
                  <div class="col-8 mx-3 mb-3">
                    <h6>password</h6>
                    <input type="password" name="password" id="" class="form-control form-control-lg " value="{{ Auth::user()->password }}" style="border-radius:5px !important ">
                  </div>
                </div> --}}
                <div class="row pt-1">
                  <div class="col-xl-4 col-lg-4 col-sm-6  mb-3 offset-5" >
                    <button type="submit" class="btn btn-warning lg">Edit Data</button>
                  </div>
                </div>
              </form>

                {{-- <h6>Services</h6> --}}
                {{-- <hr class="mt-0 mb-4"> --}}
              </div>
            </div>
          </div>
          </div>
         
        </div>
      </div>
    </div>
  {{-- </div> --}}
      {{-- </div> --}}
  {{-- </div> --}}
{{-- </div>
</div> --}}
</section>
<script>
  var userCity=document.getElementById("userCity");
  var selectedCity={!! json_encode($city, JSON_HEX_TAG) !!};
  console.log(selectedCity);
  if (userCity.value == "") {
    document.getElementById("userCity").selectedIndex = -1;
  }
  else{
    document.getElementById("userCity").selectedIndex = $('select option[value='+selectedCity+']').index();
  }
</script>
@endsection