@extends('layouts/app')

@section('content')
{{-- Custom Testominy style --}}
<link href="../css/css2.css" rel="stylesheet">

    {{-- <!-- Page Header Start --> --}}
    {{-- <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div> --}}
    {{-- <!-- Page Header End --> --}}


    {{-- <!-- About Start --> --}}
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100"
                            src="https://th.bing.com/th/id/OIP.N652YOBzmCNMzjTqW4j4pQHaE8?pid=ImgDet&rs=1"
                            alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 start-0 bg-white pe-3 pb-3"
                            src="https://openclipart.org/image/2400px/svg_to_png/293071/work-in-progress-woman_at_work-o-f-daisy.png"
                            alt="" style="width: 200px; height: 200px;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h6 class=" text-uppercase mb-2">About Us</h6>
                        <h1 class="display-6 mb-4">We Help The Youth To create Their career Greater Choice</h1>
                        <p>Through our technology people build meaningful connections, do good things, and feel
                            healthier and happier as a result. We know people want to do things that improve how they
                            feel but don’t always know where to go or what to do</p>
                        <p class="mb-4">So we’ve created a platform - to help them do things with purpose, and to help
                            people discover their purpose - enabling a kinder world where social wellbeing is a priority
                            for all.</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- Testominy Section --}}
        <div class="container mt-5 mb-5">
            <div class="d-flex justify-content-center"><h2>What People Think About Us</h2></div>
            <div class="row g-2">
                <div class="col-md-4">
                    <div class="card p-3 text-center px-4">
                        
                        <div class="user-image">
                            
                    <img src="https://i.pinimg.com/474x/4b/71/f8/4b71f8137985eaa992d17a315997791e.jpg" class="rounded-circle" width="80"
                            >
                            
                        </div>
                        
                        <div class="user-content">
                            
                            <h5 class="mb-0">Bruce Hardy</h5>
                            <span>Software Developer</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            
                        </div>
                        
                        <div class="ratings">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            
                        </div>
                        
                    </div>
                </div>
                
                <div class="col-md-4">
                    
                    <div class="card p-3 text-center px-4">
                        
                        <div class="user-image">
                            
                    <img src="https://i.pinimg.com/474x/4b/71/f8/4b71f8137985eaa992d17a315997791e.jpg" class="rounded-circle" width="80"
                            >
                            
                        </div>
                        
                        <div class="user-content">
                            
                            <h5 class="mb-0">Mark Smith</h5>
                            <span>Web Developer</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            
                        </div>
                        
                        <div class="ratings">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            
                        </div>
                        
                    </div>
                    
                </div>
                
                <div class="col-md-4">
                    
                    <div class="card p-3 text-center px-4">
                        
                        <div class="user-image">
                            
                    <img src="https://i.pinimg.com/474x/4b/71/f8/4b71f8137985eaa992d17a315997791e.jpg" class="rounded-circle" width="80"
                            >
                            
                        </div>
                        
                        <div class="user-content">
                            
                            <h5 class="mb-0">Veera  Duncan</h5>
                            <span>Software Architect</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            
                        </div>
                        
                        <div class="ratings">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            
                        </div>
                        
                    </div>
                    
                </div>
                
                
            </div>
            
        </div>
    </div>
    {{-- <!-- About End --> --}}

@endsection