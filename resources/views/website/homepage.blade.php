
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
                    <span class="fs-md-52 font-weight-bold text-white pt-2 d-block">Los Angeles</span>
                </h2>
                <img class="mxw-180 d-block mx-auto mt-4 mb-1" src="images/line-01.png" alt="">
            </div>
            <a href="listing-full-width-list.html" class="btn btn-primary btn-lg mt-10 mb-4"
                data-animate="fadeInUp">Find out more<i class="far fa-long-arrow-right ml-1"></i>
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
            <h2 class="text-dark text-center lh-1625">
                Featured Neighborhoods
            </h2>
            <span class="heading-divider mx-auto mb-7"></span>
            <div class="row">
                <div class="col-lg-6">
                    <div class="row flex-md-row flex-column">
                        <div class="col-md-6 mb-6">
                            <div class="card border-0 text-white bg-overlay hover-zoom-in" data-animate="zoomIn">
                                <img src="{{asset('websiteAssets/images/properties-city-15.jpg')}}" class="card-img" alt="New York">
                                <div class="card-img-overlay d-flex justify-content-end flex-column p-4">
                                    <h2 class="mb-0 fs-20 lh-182"><a href="listing-full-width-list.html"
                                            class="text-white">New York</a></h2>
                                    <p class="fs-13 font-weight-500 letter-spacing-087 mb-0">FROM<span
                                            class="ml-2 fs-15 font-weight-bold">$540.000 - $900.000</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-6">
                            <div class="card border-0 text-white bg-overlay hover-zoom-in" data-animate="zoomIn">
                                <img src="{{asset('websiteAssets/images/properties-city-16.jpg')}}" class="card-img" alt="New York">
                                <div class="card-img-overlay d-flex justify-content-end flex-column p-4">
                                    <h2 class="mb-0 fs-20 lh-182"><a href="listing-full-width-list.html"
                                            class="text-white">Los Angeles</a></h2>
                                    <p class="fs-13 font-weight-500 letter-spacing-087 mb-0">FROM<span
                                            class="ml-2 fs-15 font-weight-bold">$340.000 - $600.000</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-6">
                            <div class="card border-0 text-white bg-overlay hover-zoom-in" data-animate="zoomIn">
                                <img src="{{asset('websiteAssets/images/properties-city-17.jpg')}}" class="card-img" alt="New York">
                                <div class="card-img-overlay d-flex justify-content-end flex-column p-4">
                                    <h2 class="mb-0 fs-20 lh-182"><a href="listing-full-width-list.html"
                                            class="text-white">Chicago</a></h2>
                                    <p class="fs-13 font-weight-500 letter-spacing-087 mb-0">FROM<span
                                            class="ml-2 fs-15 font-weight-bold">$310.000 - $700.000</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-6">
                            <div class="card border-0 text-white bg-overlay hover-zoom-in" data-animate="zoomIn">
                                <img src="{{asset('websiteAssets/images/properties-city-18.jpg')}}" class="card-img" alt="New York">
                                <div class="card-img-overlay d-flex justify-content-end flex-column p-4">
                                    <h2 class="mb-0 fs-20 lh-182"><a href="listing-full-width-list.html"
                                            class="text-white">Las Vegas</a></h2>
                                    <p class="fs-13 font-weight-500 letter-spacing-087 mb-0">FROM<span
                                            class="ml-2 fs-15 font-weight-bold">$150.000 - $700.000</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card text-white bg-overlay hover-zoom-in" data-animate="zoomIn">
                        <img src="{{asset('websiteAssets/images/properties-city-14.jpg')}}" class="card-img" alt="New York">
                        <div class="card-img-overlay d-flex justify-content-end flex-column p-4">
                            <h2 class="card-title mb-0 fs-20 lh-182"><a href="listing-full-width-list.html"
                                    class="text-white">Atlanta</a>
                            </h2>
                            <p class="card-text fs-13 font-weight-500 letter-spacing-087 mb-0">FROM<span
                                    class="ml-2 fs-15 font-weight-bold">$250.000 - $900.000</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-gray-02 pt-9 pb-10">
        <div class="container container-xxl">
            <h2 class="text-center text-dark line-height-base">
                HomeID Exclusives
            </h2>
            <span class="heading-divider mx-auto mb-6"></span>
            <div class="slick-slider slick-dots-mt-0"
                data-slick-options='{"slidesToShow": 4, "autoplay":true,"dots":true,"arrows":false,"responsive":[{"breakpoint": 1600,"settings": {"slidesToShow":3}},{"breakpoint": 992,"settings": {"slidesToShow":2}},{"breakpoint": 768,"settings": {"slidesToShow": 2,"autoplay":true}},{"breakpoint": 576,"settings": {"slidesToShow": 1,"autoplay":true}}]}'>
                <div class="box pt-2 pb-4" data-animate="fadeInUp">
                    <div class="card shadow-hover-xs-2">
                        <div class="card-header bg-transparent px-4 pt-4 pb-3 card-img">
                            <h2 class="fs-16 lh-2 mb-0"><a href="single-property-1.html"
                                    class="text-dark hover-primary">Home in Metric Way</a></h2>
                            <p class="font-weight-500 text-gray-light mb-3">1421 San Pedro St, Los Angeles</p>
                            <div class="hover-change-image bg-hover-overlay rounded-lg">
                                <img src="{{asset('websiteAssets/images/properties-grid-31.jpg')}}" alt="Home in Metric Way">
                                <div class="card-img-overlay d-flex flex-column">
                                    <div><span class="badge badge-orange">Featured</span></div>
                                    <div class="mt-auto d-flex hover-image">
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-auto">
                                            <li class="list-inline-item mr-2" data-toggle="tooltip"
                                                title="9 Images">
                                                <a href="#" class="text-white hover-primary">
                                                    <i class="far fa-images"></i><span class="pl-1">9</span>
                                                </a>
                                            </li>
                                            <li class="list-inline-item" data-toggle="tooltip" title="2 Video">
                                                <a href="#" class="text-white hover-primary">
                                                    <i class="far fa-play-circle"></i><span class="pl-1">2</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-n3">
                                            <li class="list-inline-item mr-3 h-32" data-toggle="tooltip"
                                                title="Wishlist">
                                                <a href="#" class="text-white fs-20 hover-primary">
                                                    <i class="far fa-heart"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item mr-3 h-32" data-toggle="tooltip"
                                                title="Compare">
                                                <a href="#" class="text-white fs-20 hover-primary">
                                                    <i class="fas fa-exchange-alt"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center pt-3">
                                <p class="fs-17 font-weight-bold text-heading mb-0 lh-1">$1.250.000</p>
                                <span class="badge badge-primary">For Sale</span>
                            </div>
                        </div>
                        <div class="card-body py-2">
                            <p class="mb-0">Lorem ipsum dolor sit amet, sectetur cing elit uspe ndisse suscorem
                                ipsum dolor sitorem sit amet, sectetur cing elit uspe ndisse suscorem ipsum dolor
                                sitorem</p>
                        </div>
                        <div class="card-footer bg-transparent pt-3 pb-4 pb-3">
                            <ul class="list-inline d-flex justify-content-between mb-0 flex-wrap">
                                <li
                                    class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center">
                                    <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-bedroom"></use>
                                    </svg>
                                    3 Br
                                </li>
                                <li
                                    class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center">
                                    <svg class="icon icon-shower fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-shower"></use>
                                    </svg>
                                    3 Ba
                                </li>
                                <li
                                    class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center">
                                    <svg class="icon icon-square fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-square"></use>
                                    </svg>
                                    2300 Sq.Ft
                                </li>
                                <li
                                    class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center">
                                    <svg class="icon icon-Garage fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-Garage"></use>
                                    </svg>
                                    1 Gr
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="box pt-2 pb-4" data-animate="fadeInUp">
                    <div class="card shadow-hover-xs-2">
                        <div class="card-header bg-transparent px-4 pt-4 pb-3 card-img">
                            <h2 class="fs-16 lh-2 mb-0"><a href="single-property-1.html"
                                    class="text-dark hover-primary">Home in Metric Way</a></h2>
                            <p class="font-weight-500 text-gray-light mb-3">1421 San Pedro St, Los Angeles</p>
                            <div class="hover-change-image bg-hover-overlay rounded-lg">
                                <img src="{{asset('websiteAssets/images/properties-grid-32.jpg')}}" alt="Home in Metric Way">
                                <div class="card-img-overlay d-flex flex-column">
                                    <div class="mt-auto d-flex hover-image">
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-auto">
                                            <li class="list-inline-item mr-2" data-toggle="tooltip"
                                                title="9 Images">
                                                <a href="#" class="text-white hover-primary">
                                                    <i class="far fa-images"></i><span class="pl-1">9</span>
                                                </a>
                                            </li>
                                            <li class="list-inline-item" data-toggle="tooltip" title="2 Video">
                                                <a href="#" class="text-white hover-primary">
                                                    <i class="far fa-play-circle"></i><span class="pl-1">2</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-n3">
                                            <li class="list-inline-item mr-3 h-32" data-toggle="tooltip"
                                                title="Wishlist">
                                                <a href="#" class="text-white fs-20 hover-primary">
                                                    <i class="far fa-heart"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item mr-3 h-32" data-toggle="tooltip"
                                                title="Compare">
                                                <a href="#" class="text-white fs-20 hover-primary">
                                                    <i class="fas fa-exchange-alt"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center pt-3">
                                <p class="fs-17 font-weight-bold text-heading mb-0 lh-1">$1.250.000</p>
                                <span class="badge badge-primary">For Sale</span>
                            </div>
                        </div>
                        <div class="card-body py-2">
                            <p class="mb-0">Lorem ipsum dolor sit amet, sectetur cing elit uspe ndisse suscorem
                                ipsum dolor sitorem sit amet, sectetur cing elit uspe ndisse suscorem ipsum dolor
                                sitorem</p>
                        </div>
                        <div class="card-footer bg-transparent pt-3 pb-4 pb-3">
                            <ul class="list-inline d-flex justify-content-between mb-0 flex-wrap">
                                <li
                                    class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center">
                                    <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-bedroom"></use>
                                    </svg>
                                    3 Br
                                </li>
                                <li
                                    class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center">
                                    <svg class="icon icon-shower fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-shower"></use>
                                    </svg>
                                    3 Ba
                                </li>
                                <li
                                    class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center">
                                    <svg class="icon icon-square fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-square"></use>
                                    </svg>
                                    2300 Sq.Ft
                                </li>
                                <li
                                    class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center">
                                    <svg class="icon icon-Garage fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-Garage"></use>
                                    </svg>
                                    1 Gr
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="box pt-2 pb-4" data-animate="fadeInUp">
                    <div class="card shadow-hover-xs-2">
                        <div class="card-header bg-transparent px-4 pt-4 pb-3 card-img">
                            <h2 class="fs-16 lh-2 mb-0"><a href="single-property-1.html"
                                    class="text-dark hover-primary">Home in Metric Way</a></h2>
                            <p class="font-weight-500 text-gray-light mb-3">1421 San Pedro St, Los Angeles</p>
                            <div class="hover-change-image bg-hover-overlay rounded-lg">
                                <img src="{{asset('websiteAssets/images/properties-grid-33.jpg')}}" alt="Home in Metric Way">
                                <div class="card-img-overlay d-flex flex-column">
                                    <div><span class="badge badge-orange">Featured</span></div>
                                    <div class="mt-auto d-flex hover-image">
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-auto">
                                            <li class="list-inline-item mr-2" data-toggle="tooltip"
                                                title="9 Images">
                                                <a href="#" class="text-white hover-primary">
                                                    <i class="far fa-images"></i><span class="pl-1">9</span>
                                                </a>
                                            </li>
                                            <li class="list-inline-item" data-toggle="tooltip" title="2 Video">
                                                <a href="#" class="text-white hover-primary">
                                                    <i class="far fa-play-circle"></i><span class="pl-1">2</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-n3">
                                            <li class="list-inline-item mr-3 h-32" data-toggle="tooltip"
                                                title="Wishlist">
                                                <a href="#" class="text-white fs-20 hover-primary">
                                                    <i class="far fa-heart"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item mr-3 h-32" data-toggle="tooltip"
                                                title="Compare">
                                                <a href="#" class="text-white fs-20 hover-primary">
                                                    <i class="fas fa-exchange-alt"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center pt-3">
                                <p class="fs-17 font-weight-bold text-heading mb-0 lh-1">$5.700<span
                                        class="text-gray-light font-weight-500 fs-14"> / year</span></p>
                                <span class="badge badge-indigo">For Rent</span>
                            </div>
                        </div>
                        <div class="card-body py-2">
                            <p class="mb-0">Lorem ipsum dolor sit amet, sectetur cing elit uspe ndisse suscorem
                                ipsum dolor sitorem sit amet, sectetur cing elit uspe ndisse suscorem ipsum dolor
                                sitorem</p>
                        </div>
                        <div class="card-footer bg-transparent pt-3 pb-4 pb-3">
                            <ul class="list-inline d-flex justify-content-between mb-0 flex-wrap">
                                <li
                                    class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center">
                                    <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-bedroom"></use>
                                    </svg>
                                    3 Br
                                </li>
                                <li
                                    class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center">
                                    <svg class="icon icon-shower fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-shower"></use>
                                    </svg>
                                    3 Ba
                                </li>
                                <li
                                    class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center">
                                    <svg class="icon icon-square fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-square"></use>
                                    </svg>
                                    2300 Sq.Ft
                                </li>
                                <li
                                    class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center">
                                    <svg class="icon icon-Garage fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-Garage"></use>
                                    </svg>
                                    1 Gr
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="box pt-2 pb-4" data-animate="fadeInUp">
                    <div class="card shadow-hover-xs-2">
                        <div class="card-header bg-transparent px-4 pt-4 pb-3 card-img">
                            <h2 class="fs-16 lh-2 mb-0"><a href="single-property-1.html"
                                    class="text-dark hover-primary">Home in Metric Way</a></h2>
                            <p class="font-weight-500 text-gray-light mb-3">1421 San Pedro St, Los Angeles</p>
                            <div class="hover-change-image bg-hover-overlay rounded-lg">
                                <img src="{{asset('websiteAssets/images/properties-grid-34.jpg')}}" alt="Home in Metric Way">
                                <div class="card-img-overlay d-flex flex-column">
                                    <div><span class="badge badge-orange">Featured</span></div>
                                    <div class="mt-auto d-flex hover-image">
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-auto">
                                            <li class="list-inline-item mr-2" data-toggle="tooltip"
                                                title="9 Images">
                                                <a href="#" class="text-white hover-primary">
                                                    <i class="far fa-images"></i><span class="pl-1">9</span>
                                                </a>
                                            </li>
                                            <li class="list-inline-item" data-toggle="tooltip" title="2 Video">
                                                <a href="#" class="text-white hover-primary">
                                                    <i class="far fa-play-circle"></i><span class="pl-1">2</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-n3">
                                            <li class="list-inline-item mr-3 h-32" data-toggle="tooltip"
                                                title="Wishlist">
                                                <a href="#" class="text-white fs-20 hover-primary">
                                                    <i class="far fa-heart"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item mr-3 h-32" data-toggle="tooltip"
                                                title="Compare">
                                                <a href="#" class="text-white fs-20 hover-primary">
                                                    <i class="fas fa-exchange-alt"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center pt-3">
                                <p class="fs-17 font-weight-bold text-heading mb-0 lh-1">$5.700<span
                                        class="text-gray-light font-weight-500 fs-14"> / year</span></p>
                                <span class="badge badge-indigo">For Rent</span>
                            </div>
                        </div>
                        <div class="card-body py-2">
                            <p class="mb-0">Lorem ipsum dolor sit amet, sectetur cing elit uspe ndisse suscorem
                                ipsum dolor sitorem sit amet, sectetur cing elit uspe ndisse suscorem ipsum dolor
                                sitorem</p>
                        </div>
                        <div class="card-footer bg-transparent pt-3 pb-4 pb-3">
                            <ul class="list-inline d-flex justify-content-between mb-0 flex-wrap">
                                <li
                                    class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center">
                                    <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-bedroom"></use>
                                    </svg>
                                    3 Br
                                </li>
                                <li
                                    class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center">
                                    <svg class="icon icon-shower fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-shower"></use>
                                    </svg>
                                    3 Ba
                                </li>
                                <li
                                    class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center">
                                    <svg class="icon icon-square fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-square"></use>
                                    </svg>
                                    2300 Sq.Ft
                                </li>
                                <li
                                    class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center">
                                    <svg class="icon icon-Garage fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-Garage"></use>
                                    </svg>
                                    1 Gr
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="box pt-2 pb-4" data-animate="fadeInUp">
                    <div class="card shadow-hover-xs-2">
                        <div class="card-header bg-transparent px-4 pt-4 pb-3 card-img">
                            <h2 class="fs-16 lh-2 mb-0"><a href="single-property-1.html"
                                    class="text-dark hover-primary">Home in Metric Way</a></h2>
                            <p class="font-weight-500 text-gray-light mb-3">1421 San Pedro St, Los Angeles</p>
                            <div class="hover-change-image bg-hover-overlay rounded-lg">
                                <img src="{{asset('websiteAssets/images/properties-grid-32.jpg')}}" alt="Home in Metric Way">
                                <div class="card-img-overlay d-flex flex-column">
                                    <div class="mt-auto d-flex hover-image">
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-auto">
                                            <li class="list-inline-item mr-2" data-toggle="tooltip"
                                                title="9 Images">
                                                <a href="#" class="text-white hover-primary">
                                                    <i class="far fa-images"></i><span class="pl-1">9</span>
                                                </a>
                                            </li>
                                            <li class="list-inline-item" data-toggle="tooltip" title="2 Video">
                                                <a href="#" class="text-white hover-primary">
                                                    <i class="far fa-play-circle"></i><span class="pl-1">2</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-n3">
                                            <li class="list-inline-item mr-3 h-32" data-toggle="tooltip"
                                                title="Wishlist">
                                                <a href="#" class="text-white fs-20 hover-primary">
                                                    <i class="far fa-heart"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item mr-3 h-32" data-toggle="tooltip"
                                                title="Compare">
                                                <a href="#" class="text-white fs-20 hover-primary">
                                                    <i class="fas fa-exchange-alt"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center pt-3">
                                <p class="fs-17 font-weight-bold text-heading mb-0 lh-1">$1.250.000</p>
                                <span class="badge badge-primary">For Sale</span>
                            </div>
                        </div>
                        <div class="card-body py-2">
                            <p class="mb-0">Lorem ipsum dolor sit amet, sectetur cing elit uspe ndisse suscorem
                                ipsum dolor sitorem sit amet, sectetur cing elit uspe ndisse suscorem ipsum dolor
                                sitorem</p>
                        </div>
                        <div class="card-footer bg-transparent pt-3 pb-4 pb-3">
                            <ul class="list-inline d-flex justify-content-between mb-0 flex-wrap">
                                <li
                                    class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center">
                                    <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-bedroom"></use>
                                    </svg>
                                    3 Br
                                </li>
                                <li
                                    class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center">
                                    <svg class="icon icon-shower fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-shower"></use>
                                    </svg>
                                    3 Ba
                                </li>
                                <li
                                    class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center">
                                    <svg class="icon icon-square fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-square"></use>
                                    </svg>
                                    2300 Sq.Ft
                                </li>
                                <li
                                    class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center">
                                    <svg class="icon icon-Garage fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-Garage"></use>
                                    </svg>
                                    1 Gr
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="box pt-2 pb-4" data-animate="fadeInUp">
                    <div class="card shadow-hover-xs-2">
                        <div class="card-header bg-transparent px-4 pt-4 pb-3 card-img">
                            <h2 class="fs-16 lh-2 mb-0"><a href="single-property-1.html"
                                    class="text-dark hover-primary">Home in Metric Way</a></h2>
                            <p class="font-weight-500 text-gray-light mb-3">1421 San Pedro St, Los Angeles</p>
                            <div class="hover-change-image bg-hover-overlay rounded-lg">
                                <img src="{{asset('websiteAssets/images/properties-grid-33.jpg')}}" alt="Home in Metric Way">
                                <div class="card-img-overlay d-flex flex-column">
                                    <div><span class="badge badge-orange">Featured</span></div>
                                    <div class="mt-auto d-flex hover-image">
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-auto">
                                            <li class="list-inline-item mr-2" data-toggle="tooltip"
                                                title="9 Images">
                                                <a href="#" class="text-white hover-primary">
                                                    <i class="far fa-images"></i><span class="pl-1">9</span>
                                                </a>
                                            </li>
                                            <li class="list-inline-item" data-toggle="tooltip" title="2 Video">
                                                <a href="#" class="text-white hover-primary">
                                                    <i class="far fa-play-circle"></i><span class="pl-1">2</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-n3">
                                            <li class="list-inline-item mr-3 h-32" data-toggle="tooltip"
                                                title="Wishlist">
                                                <a href="#" class="text-white fs-20 hover-primary">
                                                    <i class="far fa-heart"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item mr-3 h-32" data-toggle="tooltip"
                                                title="Compare">
                                                <a href="#" class="text-white fs-20 hover-primary">
                                                    <i class="fas fa-exchange-alt"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center pt-3">
                                <p class="fs-17 font-weight-bold text-heading mb-0 lh-1">$5.700<span
                                        class="text-gray-light font-weight-500 fs-14"> / year</span></p>
                                <span class="badge badge-indigo">For Rent</span>
                            </div>
                        </div>
                        <div class="card-body py-2">
                            <p class="mb-0">Lorem ipsum dolor sit amet, sectetur cing elit uspe ndisse suscorem
                                ipsum dolor sitorem sit amet, sectetur cing elit uspe ndisse suscorem ipsum dolor
                                sitorem</p>
                        </div>
                        <div class="card-footer bg-transparent pt-3 pb-4 pb-3">
                            <ul class="list-inline d-flex justify-content-between mb-0 flex-wrap">
                                <li
                                    class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center">
                                    <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-bedroom"></use>
                                    </svg>
                                    3 Br
                                </li>
                                <li
                                    class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center">
                                    <svg class="icon icon-shower fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-shower"></use>
                                    </svg>
                                    3 Ba
                                </li>
                                <li
                                    class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center">
                                    <svg class="icon icon-square fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-square"></use>
                                    </svg>
                                    2300 Sq.Ft
                                </li>
                                <li
                                    class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center">
                                    <svg class="icon icon-Garage fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-Garage"></use>
                                    </svg>
                                    1 Gr
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="box pt-2 pb-4" data-animate="fadeInUp">
                    <div class="card shadow-hover-xs-2">
                        <div class="card-header bg-transparent px-4 pt-4 pb-3 card-img">
                            <h2 class="fs-16 lh-2 mb-0"><a href="single-property-1.html"
                                    class="text-dark hover-primary">Home in Metric Way</a></h2>
                            <p class="font-weight-500 text-gray-light mb-3">1421 San Pedro St, Los Angeles</p>
                            <div class="hover-change-image bg-hover-overlay rounded-lg">
                                <img src="{{asset('websiteAssets/images/properties-grid-34.jpg')}}" alt="Home in Metric Way">
                                <div class="card-img-overlay d-flex flex-column">
                                    <div><span class="badge badge-orange">Featured</span></div>
                                    <div class="mt-auto d-flex hover-image">
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-auto">
                                            <li class="list-inline-item mr-2" data-toggle="tooltip"
                                                title="9 Images">
                                                <a href="#" class="text-white hover-primary">
                                                    <i class="far fa-images"></i><span class="pl-1">9</span>
                                                </a>
                                            </li>
                                            <li class="list-inline-item" data-toggle="tooltip" title="2 Video">
                                                <a href="#" class="text-white hover-primary">
                                                    <i class="far fa-play-circle"></i><span class="pl-1">2</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-n3">
                                            <li class="list-inline-item mr-3 h-32" data-toggle="tooltip"
                                                title="Wishlist">
                                                <a href="#" class="text-white fs-20 hover-primary">
                                                    <i class="far fa-heart"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item mr-3 h-32" data-toggle="tooltip"
                                                title="Compare">
                                                <a href="#" class="text-white fs-20 hover-primary">
                                                    <i class="fas fa-exchange-alt"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center pt-3">
                                <p class="fs-17 font-weight-bold text-heading mb-0 lh-1">$5.700<span
                                        class="text-gray-light font-weight-500 fs-14"> / year</span></p>
                                <span class="badge badge-indigo">For Rent</span>
                            </div>
                        </div>
                        <div class="card-body py-2">
                            <p class="mb-0">Lorem ipsum dolor sit amet, sectetur cing elit uspe ndisse suscorem
                                ipsum dolor sitorem sit amet, sectetur cing elit uspe ndisse suscorem ipsum dolor
                                sitorem</p>
                        </div>
                        <div class="card-footer bg-transparent pt-3 pb-4 pb-3">
                            <ul class="list-inline d-flex justify-content-between mb-0 flex-wrap">
                                <li
                                    class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center">
                                    <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-bedroom"></use>
                                    </svg>
                                    3 Br
                                </li>
                                <li
                                    class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center">
                                    <svg class="icon icon-shower fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-shower"></use>
                                    </svg>
                                    3 Ba
                                </li>
                                <li
                                    class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center">
                                    <svg class="icon icon-square fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-square"></use>
                                    </svg>
                                    2300 Sq.Ft
                                </li>
                                <li
                                    class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center">
                                    <svg class="icon icon-Garage fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-Garage"></use>
                                    </svg>
                                    1 Gr
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-10 pb-7">
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
    </section>



    <section data-animated-id="6">
        <div class="bg-patten-01 pt-12 pb-10 bg-secondary">
        <div class="container">
        <h2 class="text-white text-center lh-1625 mxw-589 font-weight-normal">Looking to Buy a new property or Sell
        an existing
        one?</h2>
        <span class="heading-divider mx-auto"></span>
        <div class="row info-box-3 mt-7 no-gutters mx-auto">
        <div class="col-md-3 col-sm-6 mb-6 mb-md-0 zoomIn animated" data-animate="zoomIn">
        <a href="listing-with-left-sidebar.html" class="card border-0 align-items-center justify-content-center pb-5 pt-7 px-0 shadow-hover-3 bg-transparent bg-hover-white text-decoration-none hover-change-image">
        <div class="card-img-top d-flex align-items-center justify-content-center border-md-right rounded-0">
        <div class=" position-relative">
        <img src="{{asset('websiteAssets/images/verified.png')}}" class="hover-image position-absolute pos-fixed-top" alt="Apartment">
        <img src="{{asset('websiteAssets/images/white-verified.png')}}" class="image" alt="Apartment">
        </div>
        </div>
        <div class="card-body px-0 pt-5 pb-0">
        <h4 class="card-title fs-16 lh-2 text-white mb-0">Apartment</h4>
        </div>
        </a>
        </div>
        <div class="col-md-3 col-sm-6 mb-6 mb-md-0 zoomIn animated" data-animate="zoomIn">
        <a href="listing-with-left-sidebar.html" class="card border-0 align-items-center justify-content-center pb-5 pt-7 px-0 shadow-hover-3 bg-transparent bg-hover-white text-decoration-none hover-change-image">
        <div class="card-img-top d-flex align-items-center justify-content-center border-md-right rounded-0">
        <div class=" position-relative">
        <img src="{{asset('websiteAssets/images/sofa.png')}}" class="hover-image position-absolute pos-fixed-top" alt="House">
        <img src="{{asset('websiteAssets/images/white-sofa.png')}}" class="image" alt="House">
        </div>
        </div>
        <div class="card-body px-0 pt-5 pb-0">
        <h4 class="card-title fs-16 lh-2 text-white mb-0">House</h4>
        </div>
        </a>
        </div>
        <div class="col-md-3 col-sm-6 mb-6 mb-md-0 zoomIn animated" data-animate="zoomIn">
        <a href="listing-with-left-sidebar.html" class="card border-0 align-items-center justify-content-center pb-5 pt-7 px-0 shadow-hover-3 bg-transparent bg-hover-white text-decoration-none hover-change-image">
        <div class="card-img-top d-flex align-items-center justify-content-center border-md-right rounded-0">
        <div class=" position-relative">
        <img src="{{asset('websiteAssets/images/architecture-and-city.png')}}" class="hover-image position-absolute pos-fixed-top" alt="Office">
        <img src="{{asset('websiteAssets/images/white-architecture-and-city.png')}}" class="image" alt="Office">
        </div>
        </div>
        <div class="card-body px-0 pt-5 pb-0">
        <h4 class="card-title fs-16 lh-2 text-white mb-0">Office</h4>
        </div>
        </a>
        </div>
        <div class="col-md-3 col-sm-6 mb-6 mb-md-0 zoomIn animated" data-animate="zoomIn">
        <a href="listing-with-left-sidebar.html" class="card border-0 align-items-center justify-content-center pb-5 pt-7 px-0 shadow-hover-3 bg-transparent bg-hover-white text-decoration-none hover-change-image">
        <div class="card-img-top d-flex align-items-center justify-content-center  rounded-0">
        <div class=" position-relative">
        <img src="{{asset('websiteAssets/images/eco-house.png')}}" class="hover-image position-absolute pos-fixed-top" alt="Villa">
        <img src="{{asset('websiteAssets/images/white-eco-house.png')}}" class="image" alt="Villa">
        </div>
        </div>
        <div class="card-body px-0 pt-5 pb-0">
        <h4 class="card-title fs-16 lh-2 text-white mb-0">Villa</h4>
        </div>
        </a>
        </div>
        </div>
        </div>
        </div>
        </section>



    <div id="compare" class="compare">
        <button
            class="btn shadow btn-open bg-white bg-hover-accent text-secondary rounded-right-0 d-flex justify-content-center align-items-center w-30px h-140 p-0">
        </button>
        <div class="list-group list-group-no-border bg-dark py-3">
            <a href="#" class="list-group-item bg-transparent text-white fs-22 text-center py-0">
                <i class="far fa-bars"></i>
            </a>
            <div class="list-group-item card bg-transparent">
                <div class="position-relative hover-change-image bg-hover-overlay">
                    <img src="{{asset('websiteAssets/images/compare-01.jpg')}}" class="card-img" alt="properties">
                    <div class="card-img-overlay">
                        <a href="#"
                            class="text-white hover-image fs-16 lh-1 pos-fixed-top-right position-absolute m-2"><i
                                class="fal fa-minus-circle"></i></a>
                    </div>
                </div>
            </div>
            <div class="list-group-item card bg-transparent">
                <div class="position-relative hover-change-image bg-hover-overlay">
                    <img src="{{asset('websiteAssets/images/compare-02.jpg')}}" class="card-img" alt="properties">
                    <div class="card-img-overlay">
                        <a href="#"
                            class="text-white hover-image fs-16 lh-1 pos-fixed-top-right position-absolute m-2"><i
                                class="fal fa-minus-circle"></i></a>
                    </div>
                </div>
            </div>
            <div class="list-group-item card card bg-transparent">
                <div class="position-relative hover-change-image bg-hover-overlay ">
                    <img src="{{asset('websiteAssets/images/compare-03.jpg')}}" class="card-img" alt="properties">
                    <div class="card-img-overlay">
                        <a href="#"
                            class="text-white hover-image fs-16 lh-1 pos-fixed-top-right position-absolute m-2"><i
                                class="fal fa-minus-circle"></i></a>
                    </div>
                </div>
            </div>
            <div class="list-group-item bg-transparent">
                <a href="compare-details.html"
                    class="btn btn-lg btn-primary w-100 px-0 d-flex justify-content-center">
                    Compare
                </a>
            </div>
        </div>
    </div>
</main>

@endsection