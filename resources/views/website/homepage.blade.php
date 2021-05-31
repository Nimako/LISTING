
@extends('website/layouts.tempMain')
@section('content')    


<main id="content">

    {{-- @include('website/searchFilter') --}}
    
    <section class="py-15 text-center bg-cover" style="background-image: url({{asset('websiteAssets/images/bg-home-8.jpg')}}">
        <div class="container">
            <div data-animate="fadeInDown">
                <p class="text-white letter-spacing-34 fs-15 text-uppercase lh-186 mb-0 pt-1">let us find your home
                </p>
                <h2 class="fs-md-42 text-white pt-5">
                    We have the most Listing in
                    <span class="fs-md-52 font-weight-bold text-white pt-2 d-block">Accra</span>
                </h2>
                <img class="mxw-180 d-block mx-auto mt-4 mb-1" src="images/line-01.png" alt="">
            </div>
            <a href="{{url('short-stay')}}" class="btn btn-primary btn-lg mt-10 mb-4"
                data-animate="fadeInUp">Book now<i class="far fa-long-arrow-right ml-1"></i>
            </a>
        </div>
    </section>
    <section class="pt-10 pb-9">
        <div class="container">
            <h2 class="text-dark text-center lh-1625">
                What Can We Help You Find?</h2>
            <span class="heading-divider mx-auto"></span>
            <div class="row info-box-4 mt-7">
                <div class="col-lg-4 mb-6 mb-lg-0">
                    <div class="card border-0 bg-transparent shadow-xs-2 shadow-hover-lg-1 pl-8 pr-6 py-5"
                        data-animate="fadeInUp">
                        <div class="card-img-top d-flex align-items-end justify-content-center">
                            <img src="{{asset('websiteAssets/images/group-16.png')}}" alt="Buy a new home">
                        </div>
                        <div class="card-body px-0 pt-6 pb-0">
                            <a href="single-property-1.html"
                                class="text-decoration-none d-flex align-items-center justify-content-center">
                                <h4 class="card-title fs-20 lh-1625 text-dark mb-1">Buy a new home</h4>
                                <span class="d-none d-sm-flex align-items-center ml-2 text-primary fs-42 lh-1"><svg
                                        class="icon icon-long-arrow">
                                        <use xlink:href="#icon-long-arrow"></use>
                                    </svg></span>
                            </a>
                            <p class="card-text text-center">
                                Lorem ipsum dolor sit amet, consec tetur cing elit. Suspe ndisse suscipit
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-6 mb-lg-0">
                    <div class="card border-0 bg-transparent shadow-xs-2 shadow-hover-lg-1 pl-8 pr-6 py-5"
                        data-animate="fadeInUp">
                        <div class="card-img-top d-flex align-items-end justify-content-center">
                            <img src="{{asset('websiteAssets/images/group-17.png')}}" alt="Sell a home">
                        </div>
                        <div class="card-body px-0 pt-6 pb-0">
                            <a href="single-property-1.html"
                                class="text-decoration-none d-flex align-items-center justify-content-center">
                                <h4 class="card-title fs-20 lh-1625 text-dark mb-1">Sell a home</h4>
                                <span class="d-none d-sm-flex align-items-center ml-2 text-primary fs-42 lh-1"><svg
                                        class="icon icon-long-arrow">
                                        <use xlink:href="#icon-long-arrow"></use>
                                    </svg></span>
                            </a>
                            <p class="card-text text-center">
                                Lorem ipsum dolor sit amet, consec tetur cing elit. Suspe ndisse suscipit
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-6 mb-lg-0">
                    <div class="card border-0 bg-transparent shadow-xs-2 shadow-hover-lg-1 pl-8 pr-6 py-5"
                        data-animate="fadeInUp">
                        <div class="card-img-top d-flex align-items-end justify-content-center">
                            <img src="{{asset('websiteAssets/images/group-21.png')}}" alt="Rent a home">
                        </div>
                        <div class="card-body px-0 pt-6 pb-0">
                            <a href="single-property-1.html"
                                class="text-decoration-none d-flex align-items-center justify-content-center">
                                <h4 class="card-title fs-20 lh-1625 text-dark mb-1">Rent a home</h4>
                                <span class="d-none d-sm-flex align-items-center ml-2 text-primary fs-42 lh-1"><svg
                                        class="icon icon-long-arrow">
                                        <use xlink:href="#icon-long-arrow"></use>
                                    </svg></span>
                            </a>
                            <p class="card-text text-center">
                                Lorem ipsum dolor sit amet, consec tetur cing elit. Suspe ndisse suscipit
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-6">
        <div class="container">
            <h1 class="text-dark text-center lh-1625">
            Our Locations
            </h1>
            <span class="heading-divider mx-auto mb-7"></span>
            <div class="row">
                <?php if(!empty($list)): ?>
                <?php foreach($list as $item): ?>
                    <div class="col-md-3">
                        <p class="h3 text-center"><?= Str::ucfirst($item->location); ?></p>
                        <a style="cursor: pointer" href="{{url($item->slug.'/rooms')}}">
                         <?php if(!empty($item->featuredImage)): ?>
                         <img style="cursor: pointer" src="{{'storage/'.$item->featuredImage}}" width="300" height="350" alt="<?= Str::ucfirst($item->location); ?>">
                         <?php else: ?>
                           <img style="cursor: pointer" src="{{asset('assets/images/featuredlocationDefault.jpg')}}" width="300" height="350" alt="<?= Str::ucfirst($item->location); ?>">
                         <?php endif; ?>
                        </a>
                    </div>
                <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>


    {{-- <section class="pt-10 pb-7">
        <div class="container">
            <h2 class="text-heading text-center">Services Offered</h2>
            <span class="heading-divider mx-auto mb-2"></span>
            <div class="slick-slider arrow-haft-inner mx-0"
                data-slick-options='{"slidesToShow": 4, "autoplay":true,"dots":false,"responsive":[{"breakpoint": 1200,"settings": {"slidesToShow":3,"arrows":false,"dots":true}},{"breakpoint": 992,"settings": {"slidesToShow":2,"arrows":false}},{"breakpoint": 768,"settings": {"slidesToShow": 2,"arrows":false,"autoplay":true}},{"breakpoint": 576,"settings": {"arrows":false,"slidesToShow": 1}}]}'>
                <div class="box px-0 py-6" data-animate="fadeInUp">
                    <div class="card border-0 py-7 px-4 shadow-hover-3 bg-transparent bg-hover-white">
                        <div class="d-flex justify-content-center card-img-top">
                            <img src="{{asset('websiteAssets/images/house.png')}}" alt="Property Management">
                        </div>
                        <div class="card-body px-0 pt-5 pb-0 text-center">
                            <h4 class="card-title fs-16 lh-13 text-dark mb-2 px-10">Property Management</h4>
                            <p class="card-text text-body px-8">Suspe ndisse suscipit sagittis leo sit met condim
                                entum</p>
                        </div>
                    </div>
                </div>
                <div class="box px-0 py-6" data-animate="fadeInUp">
                    <div class="card border-0 py-7 px-4 shadow-hover-3 bg-transparent bg-hover-white">
                        <div class="d-flex justify-content-center card-img-top">
                            <img src="{{asset('websiteAssets/images/mortgage.png')}}" alt="Mortgage Service">
                        </div>
                        <div class="card-body px-0 pt-5 pb-0 text-center">
                            <h4 class="card-title fs-16 lh-13 text-dark mb-2 px-10">Mortgage Service</h4>
                            <p class="card-text text-body px-8">Suspe ndisse suscipit sagittis leo sit met condim
                                entum</p>
                        </div>
                    </div>
                </div>
                <div class="box px-0 py-6" data-animate="fadeInUp">
                    <div class="card border-0 py-7 px-4 shadow-hover-3 bg-transparent bg-hover-white">
                        <div class="d-flex justify-content-center card-img-top">
                            <img src="{{asset('websiteAssets/images/clipboard.png')}}" alt="Consulting Service">
                        </div>
                        <div class="card-body px-0 pt-5 pb-0 text-center">
                            <h4 class="card-title fs-16 lh-13 text-dark mb-2 px-10">Consulting Service</h4>
                            <p class="card-text text-body px-8">Suspe ndisse suscipit sagittis leo sit met condim
                                entum</p>
                        </div>
                    </div>
                </div>
                <div class="box px-0 py-6" data-animate="fadeInUp">
                    <div class="card border-0 py-7 px-4 shadow-hover-3 bg-transparent bg-hover-white">
                        <div class="d-flex justify-content-center card-img-top">
                            <img src="{{asset('websiteAssets/images/building.png')}}" alt="Recover Asset Value">
                        </div>
                        <div class="card-body px-0 pt-5 pb-0 text-center">
                            <h4 class="card-title fs-16 lh-13 text-dark mb-2 px-10">Recover Asset Value</h4>
                            <p class="card-text text-body px-8">Suspe ndisse suscipit sagittis leo sit met condim
                                entum</p>
                        </div>
                    </div>
                </div>
                <div class="box px-0 py-6" data-animate="fadeInUp">
                    <div class="card border-0 py-7 px-4 shadow-hover-3 bg-transparent bg-hover-white">
                        <div class="d-flex justify-content-center card-img-top">
                            <img src="{{asset('websiteAssets/images/house.png')}}" alt="Property Management">
                        </div>
                        <div class="card-body px-0 pt-5 pb-0 text-center">
                            <h4 class="card-title fs-16 lh-13 text-dark mb-2 px-10">Property Management</h4>
                            <p class="card-text text-body px-8">Suspe ndisse suscipit sagittis leo sit met condim
                                entum</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section data-animated-id="6">
        <div class="bg-patten-01 pt-12 pb-10 bg-secondary">
        <div class="container">
      
        <span class="heading-divider mx-auto"></span>
        <div class="row info-box-3 mt-7 no-gutters mx-auto">

        <div class="col-md-5 card p-5  col-sm-6 mb-6 mb-md-0 zoomIn animated" data-animate="zoomIn">
            <p class="h5"><b>Short Apartment Stay</b></p>
            <div class="card-img-top  d-flex align-items-center justify-content-center border-md-right rounded-0">
            <div class=" position-relative">
            <img src="{{asset('websiteAssets/images/verified.png')}}" class="hover-image position-absolute pos-fixed-top" alt="Apartment">
            <img src="{{asset('websiteAssets/images/white-verified.png')}}" class="image" alt="Apartment">
            </div>
            </div>
            <div class="card-body px-0 pt-5 pb-0">
            <h6 class="card-title text-center text-dark p-2">
                For Short Let Apartment Rentals;
                From Daily Booking To Over 3 Weeks Stay
            </h6>
            <center>
            <a href="{{url('short-stay')}}" class="btn btn-primary">Book now</a>
            </center>
            </div>
        </div>

        

        <div class="col-md-2 col-sm-6 mb-6 mb-md-0 zoomIn animated" data-animate="zoomIn">
            
        </div>

        <div class="col-md-5 card p-5  col-sm-6 mb-6 mb-md-0 zoomIn animated" data-animate="zoomIn">
            <p class="h5"><b>Long Apartment Stay</b></p>
            <div class="card-img-top  d-flex align-items-center justify-content-center border-md-right rounded-0">
            <div class=" position-relative">
            <img src="{{asset('websiteAssets/images/verified.png')}}" class="hover-image position-absolute pos-fixed-top" alt="Apartment">
            <img src="{{asset('websiteAssets/images/white-verified.png')}}" class="image" alt="Apartment">
            </div>
            </div>
            <div class="card-body px-0 pt-5 pb-0">
                <p> Call / Whatsapp:<br> <b>+233 244 274 699 / +233 000000</b></p>

                <p>Email:<br><b>customerservice@staylug.com</b></p>

            </div>
        </div>


        </div>
        </div>
        </div>
        </section>





</main>

@endsection