@extends('layouts/app')

@section('content')
    

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
                        <h6 class="text-primary text-uppercase mb-2">About Us</h6>
                        <h1 class="display-6 mb-4">We Help The Youth To Make Their Environment A Better Place</h1>
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
    </div>
    {{-- <!-- About End --> --}}

@endsection