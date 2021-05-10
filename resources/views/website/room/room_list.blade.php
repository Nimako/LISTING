@extends('website/layouts.tempMain')
@section('content')    

<style>
    #amenities li {
      padding: 2px;
      margin:-18px;
      font-size: 1em;
      color:black;
    }
    #summary_text{
        color:black
    } 
</style>
    
<main id="content">
    <section class="pb-8 page-title shadow">
        <div class="container">
            <nav aria-label="breadcrumb">
            
                <h1 class="fs-30 lh-1 mb-0 text-heading font-weight-600"><?= ucwords(@$location->location); ?></h1>
            </nav>
        </div>
    </section>

    <section class="pt-8 pb-11 bg-gray-01">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-3 order-2 order-lg-1 primary-sidebar sidebar-sticky" id="sidebar">
                    <div class="primary-sidebar-inner">
                        <div class="card mb-4">
                            <div class="card-body px-6 py-4">
                                <h4 class="card-title fs-16 lh-2 text-dark mb-3">Find your home</h4>
                                <form>
                                    <div class="form-group">
                                        <label for="key-word" class="sr-only">Key Word</label>
                                        <input type="text" class="form-control form-control-lg border-0 shadow-none"
                                            id="key-word" name="search" placeholder="Enter keyword...">
                                    </div>
                                    <div class="form-group">
                                        <label for="location" class="sr-only">Location</label>
                                        <select
                                            class="form-control border-0 shadow-none form-control-lg selectpicker"
                                            name="location" title="Location" data-style="btn-lg py-2 h-52"
                                            id="location">
                                            <option>Austin</option>
                                            <option>Boston</option>
                                            <option>Chicago</option>
                                            <option>Denver</option>
                                            <option>Los Angeles</option>
                                            <option>New York</option>
                                            <option>San Francisco</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="type" class="sr-only">Type</label>
                                        <select
                                            class="form-control border-0 shadow-none form-control-lg selectpicker"
                                            name="type" title="All Types" data-style="btn-lg py-2 h-52" id="type">
                                            <option>Apartment</option>
                                            <option>Condo</option>
                                            <option>Lot</option>
                                            <option>Multi Family Home</option>
                                            <option>Office</option>
                                            <option>Shop</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="status" class="sr-only">Status</label>
                                        <select
                                            class="form-control border-0 shadow-none form-control-lg selectpicker"
                                            title="All Status" data-style="btn-lg py-2 h-52" id="status"
                                            name="status">
                                            <option>For Rent</option>
                                            <option>For Sale</option>
                                        </select>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="col">
                                            <label for="bed" class="sr-only">Beds</label>
                                            <select
                                                class="form-control border-0 shadow-none form-control-lg selectpicker"
                                                title="Beds" data-style="btn-lg py-2 h-52" id="bed" name="beds">
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label for="baths" class="sr-only">Baths</label>
                                            <select
                                                class="form-control border-0 shadow-none form-control-lg selectpicker"
                                                title="Baths" data-style="btn-lg py-2 h-52" id="baths" name="baths">
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                    </div>
                               
                                    <button type="submit"
                                        class="btn btn-primary btn-lg btn-block shadow-none mt-4">Search
                                    </button>
                                </form>
                            </div>
                        </div>
         
                    </div>
                </div>

                {{-- ------------------- --}}

                <div class="col-lg-9 mb-8 mb-lg-0 order-1 order-lg-2">
                    <div class="row align-items-sm-center mb-4">
                        <div class="col-md-6">
                            <h2 class="fs-15 text-dark mb-0">We found <span class="text-primary">45</span>
                                properties
                                available for
                                you
                            </h2>
                        </div>
                        <div class="col-md-6 mt-4 mt-md-0">
                            <div class="d-flex justify-content-md-end align-items-center">
                                <div class="input-group border rounded input-group-lg w-auto bg-white mr-3">
                                    <label
                                        class="input-group-text bg-transparent border-0 text-uppercase letter-spacing-093 pr-1 pl-3"
                                        for="inputGroupSelect01"><i
                                            class="fas fa-align-left fs-16 pr-2"></i>Sortby:</label>
                                    <select
                                        class="form-control border-0 bg-transparent shadow-none p-0 selectpicker sortby"
                                        data-style="bg-transparent border-0 font-weight-600 btn-lg pl-0 pr-3"
                                        id="inputGroupSelect01" name="sortby">
                                        <option selected>Top Selling</option>
                                        <option value="1">Most Viewed</option>
                                        <option value="2">Price(low to high)</option>
                                        <option value="3">Price(high to low)</option>
                                    </select>
                                </div>
                                <div class="d-none d-md-block">
                                    <a class="fs-sm-18 text-dark" href="#">
                                        <i class="fas fa-list"></i>
                                    </a>
                                    <a class="fs-sm-18 text-dark opacity-2 ml-5"
                                        href="listing-grid-with-left-filter.html">
                                        <i class="fa fa-th-large"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php if(!empty($list)): ?>
                    <?php foreach($list as $item): ?>
                    <div class="py-5 px-4 border rounded-lg shadow-hover-1 bg-white mb-4" data-animate="fadeInUp">
                        <div class="media flex-column flex-sm-row no-gutters" style="">
                            <div class="col-sm-3 mr-sm-5 card border-0 hover-change-image bg-hover-overlay mb-sm-5">
                                <img src="{{asset('storage/'.$item->featured_image)}}" class="card-img" alt="" style="height:191px">
                                <div class="card-img-overlay p-2">
                                    <ul
                                        class="list-inline mb-0 d-flex justify-content-center align-items-center h-100 hover-image">
                                        
                                        <li class="list-inline-item">
                                            <a href="#"
                                                class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-heading bg-white border-white bg-hover-primary border-hover-primary hover-white">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="media-body mt-3 mt-sm-0">
                                <h5 class="my-0">
                                    <?= ucwords(@$item->room_name); ?>
                                </h5>
                                <div class="d-sm-flex mt-2 justify-content-sm-between">
                                    <ul class="list-inline d-flex mb-0 flex-wrap">
                                        
                                        <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                        data-toggle="tooltip" title="1 Garage">
                                        <i class="fas fa-users fs-18 text-primary mr-1"></i>
                                        Sleeps <?= @$item->total_guest_capacity; ?>
                                    </li>
                                        
                                    <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                        data-toggle="tooltip" title="<?= @$item->num_of_rooms; ?> Bedroom">
                                        <i class="fas fa-bed fs-18 text-primary mr-1"></i>
                                        <?= @$item->num_of_rooms; ?> Bedroom
                                    </li>
                               
                                    <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                    data-toggle="tooltip" title="<?= @$item->total_bathrooms; ?> Bathrooms">
                                    {{-- <i class="fas fa-bed fs-18 text-primary mr-1"></i> --}}
                                    <?php 
                                       $bedName = json_decode($item->bed_name, true); 
                                       foreach($bedName as $bed):
                                    ?> 
                                      <i style="margin-left:-20px;font-size:0.8em"> <?= @$bed; ?></i>
                                    <?php endforeach; ?>
                                   </li>
                                    
                                   <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                   data-toggle="tooltip" title="<?= @$item->total_bathrooms; ?> Bathrooms">
                                   <i class="fas fa-bath fs-18 text-primary mr-1"></i>
                                   <?= @$item->total_bathrooms; ?> Bathrooms
                                  </li>

                                    </ul>
                                </div>                             

                                <p id="summary_text" style="font-size:0.4em;line-height:1.5; color:#000">
                                    <?= @$item->summary_text; ?>
                                </p>

                                <p class="mt-1"> 
                                    <a href="javascript:void" onclick="showSummerytext(<?= $item->id; ?>)">view amenities</a>    

                                    <ul class="list-unstyled mb-0 row no-gutters amenities<?= $item->id; ?>" id="amenities" style="display: none">
                                    <?php
                                      $amenities = json_decode($item->amenities,true); 
                                      foreach($amenities as $amenity):
                                    ?>
                                     <li class="col-md-3 col-2 mb-2" style="font-size:0.8em">
                                         <i class="far fa-check mr-1 text-primary" ></i> <?= trim($amenity); ?>
                                     </li>
                                    <?php endforeach; ?>                                   
                                    </ul>
                                </p>
                            </div>

                        </div>
                        <section class="row">
                            <div class="col-md-8">
                                <?php if($item->free_cancellation==1): ?>
                                 <i class="fa fa-check-circle fa-1x"></i> Free Cancellation!
                                <?php endif; ?>
                            </div>

                            <div class="col-md-4 float-right">
                                  
                                <?php if(!empty($item->pricing)): ?> 
                                 <?php foreach($item->pricing as $price): ?>
                                    <h6>USD <?= @$price->price; ?></h6>
                                    <p>Cost 1 night -<?= @$price->guest; ?>  Guests <a class="btn btn-sm btn-primary ml-4" href="">Select</a></p>
                                 <?php endforeach; ?>
                                <?php endif; ?>
                                 
                            </div>
                        </section>
                    </div>
                    <?php endforeach; ?>
                    <?php endif; ?>
                    
{{-- 
                    <div class="py-5 px-4 border rounded-lg shadow-hover-1 bg-white mb-4" data-animate="fadeInUp">
                        <div class="media flex-column flex-sm-row no-gutters">
                            <div class="col-sm-3 mr-sm-5 card border-0 hover-change-image bg-hover-overlay mb-sm-5">
                                <img src="images/properties-list-04.jpg" class="card-img"
                                    alt="Garden Gingerbread House">
                                <div class="card-img-overlay p-2">
                                    <ul
                                        class="list-inline mb-0 d-flex justify-content-center align-items-center h-100 hover-image">
                                        <li class="list-inline-item">
                                            <a href="#"
                                                class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-heading bg-white border-white bg-hover-primary border-hover-primary hover-white">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#"
                                                class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-heading bg-white border-white bg-hover-primary border-hover-primary hover-white">
                                                <i class="fas fa-exchange-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="media-body mt-3 mt-sm-0">
                                <h2 class="my-0"><a href="single-property-1.html"
                                        class="fs-16 lh-2 text-dark hover-primary d-block">Garden Gingerbread
                                        House</a>
                                </h2>
                                <p class="mb-1 font-weight-500 text-gray-light">1421 San Pedro St, Los Angeles</p>
                                <p class="fs-17 font-weight-bold text-heading mb-1">
                                    $1.250.000
                                </p>
                                <p class="mb-2 ml-0">Lorem ipsum dolor sit amet, sectetur cing elit uspe ndisse
                                    suscorem ipsum dolor sitorem sit amet, sectetur cing elit uspe ndisse suscorem
                                </p>
                            </div>
                        </div>
                        <div class="d-sm-flex justify-content-sm-between">
                            <ul class="list-inline d-flex mb-0 flex-wrap">
                                <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                    data-toggle="tooltip" title="3 Bedroom">
                                    <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-bedroom"></use>
                                    </svg>
                                    3 Br
                                </li>
                                <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                    data-toggle="tooltip" title="3 Bathrooms">
                                    <svg class="icon icon-shower fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-shower"></use>
                                    </svg>
                                    3 Ba
                                </li>
                                <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                    data-toggle="tooltip" title="Size">
                                    <svg class="icon icon-square fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-square"></use>
                                    </svg>
                                    2300 Sq.Ft
                                </li>
                                <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                    data-toggle="tooltip" title="1 Garage">
                                    <svg class="icon icon-Garage fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-Garage"></use>
                                    </svg>
                                    1 Gr
                                </li>
                                <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                    data-toggle="tooltip" title="Year">
                                    <svg class="icon icon-year fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-year"></use>
                                    </svg>
                                    2020
                                </li>
                            </ul>
                            <span class="badge badge-primary mr-xl-2 mt-3 mt-sm-0">For Sale</span>
                        </div>
                    </div>
                    <div class="py-5 px-4 border rounded-lg shadow-hover-1 bg-white mb-4" data-animate="fadeInUp">
                        <div class="media flex-column flex-sm-row no-gutters">
                            <div class="col-sm-3 mr-sm-5 card border-0 hover-change-image bg-hover-overlay mb-sm-5">
                                <img src="images/properties-list-11.jpg" class="card-img"
                                    alt="Affordable Urban House">
                                <div class="card-img-overlay p-2">
                                    <ul
                                        class="list-inline mb-0 d-flex justify-content-center align-items-center h-100 hover-image">
                                        <li class="list-inline-item">
                                            <a href="#"
                                                class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-heading bg-white border-white bg-hover-primary border-hover-primary hover-white">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#"
                                                class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-heading bg-white border-white bg-hover-primary border-hover-primary hover-white">
                                                <i class="fas fa-exchange-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="media-body mt-3 mt-sm-0">
                                <h2 class="my-0"><a href="single-property-1.html"
                                        class="fs-16 lh-2 text-dark hover-primary d-block">Affordable Urban
                                        House</a>
                                </h2>
                                <p class="mb-1 font-weight-500 text-gray-light">1421 San Pedro St, Los Angeles</p>
                                <p class="fs-17 font-weight-bold text-heading mb-1">
                                    $2500
                                    <span class="fs-14 font-weight-500 text-gray-light"> /month</span>
                                </p>
                                <p class="mb-2 ml-0">Lorem ipsum dolor sit amet, sectetur cing elit uspe ndisse
                                    suscorem ipsum dolor sitorem sit amet, sectetur cing elit uspe ndisse suscorem
                                </p>
                            </div>
                        </div>
                        <div class="d-sm-flex justify-content-sm-between">
                            <ul class="list-inline d-flex mb-0 flex-wrap">
                                <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                    data-toggle="tooltip" title="3 Bedroom">
                                    <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-bedroom"></use>
                                    </svg>
                                    3 Br
                                </li>
                                <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                    data-toggle="tooltip" title="3 Bathrooms">
                                    <svg class="icon icon-shower fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-shower"></use>
                                    </svg>
                                    3 Ba
                                </li>
                                <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                    data-toggle="tooltip" title="Size">
                                    <svg class="icon icon-square fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-square"></use>
                                    </svg>
                                    2300 Sq.Ft
                                </li>
                                <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                    data-toggle="tooltip" title="1 Garage">
                                    <svg class="icon icon-Garage fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-Garage"></use>
                                    </svg>
                                    1 Gr
                                </li>
                                <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                    data-toggle="tooltip" title="Year">
                                    <svg class="icon icon-year fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-year"></use>
                                    </svg>
                                    2020
                                </li>
                            </ul>
                            <span class="badge badge-indigo mr-xl-2 mt-3 mt-sm-0">for Rent</span>
                        </div>
                    </div>
                    <div class="py-5 px-4 border rounded-lg shadow-hover-1 bg-white mb-4" data-animate="fadeInUp">
                        <div class="media flex-column flex-sm-row no-gutters">
                            <div class="col-sm-3 mr-sm-5 card border-0 hover-change-image bg-hover-overlay mb-sm-5">
                                <img src="images/properties-list-12.jpg" class="card-img"
                                    alt="Villa on Hollywood Boulevard">
                                <div class="card-img-overlay p-2">
                                    <ul
                                        class="list-inline mb-0 d-flex justify-content-center align-items-center h-100 hover-image">
                                        <li class="list-inline-item">
                                            <a href="#"
                                                class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-heading bg-white border-white bg-hover-primary border-hover-primary hover-white">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#"
                                                class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-heading bg-white border-white bg-hover-primary border-hover-primary hover-white">
                                                <i class="fas fa-exchange-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="media-body mt-3 mt-sm-0">
                                <h2 class="my-0"><a href="single-property-1.html"
                                        class="fs-16 lh-2 text-dark hover-primary d-block">Villa on Hollywood
                                        Boulevard</a>
                                </h2>
                                <p class="mb-1 font-weight-500 text-gray-light">1421 San Pedro St, Los Angeles</p>
                                <p class="fs-17 font-weight-bold text-heading mb-1">
                                    $1.250.000
                                </p>
                                <p class="mb-2 ml-0">Lorem ipsum dolor sit amet, sectetur cing elit uspe ndisse
                                    suscorem ipsum dolor sitorem sit amet, sectetur cing elit uspe ndisse suscorem
                                </p>
                            </div>
                        </div>
                        <div class="d-sm-flex justify-content-sm-between">
                            <ul class="list-inline d-flex mb-0 flex-wrap">
                                <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                    data-toggle="tooltip" title="3 Bedroom">
                                    <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-bedroom"></use>
                                    </svg>
                                    3 Br
                                </li>
                                <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                    data-toggle="tooltip" title="3 Bathrooms">
                                    <svg class="icon icon-shower fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-shower"></use>
                                    </svg>
                                    3 Ba
                                </li>
                                <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                    data-toggle="tooltip" title="Size">
                                    <svg class="icon icon-square fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-square"></use>
                                    </svg>
                                    2300 Sq.Ft
                                </li>
                                <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                    data-toggle="tooltip" title="1 Garage">
                                    <svg class="icon icon-Garage fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-Garage"></use>
                                    </svg>
                                    1 Gr
                                </li>
                                <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                    data-toggle="tooltip" title="Year">
                                    <svg class="icon icon-year fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-year"></use>
                                    </svg>
                                    2020
                                </li>
                            </ul>
                            <span class="badge badge-primary mr-xl-2 mt-3 mt-sm-0">For Sale</span>
                        </div>
                    </div>
                    <div class="py-5 px-4 border rounded-lg shadow-hover-1 bg-white mb-4" data-animate="fadeInUp">
                        <div class="media flex-column flex-sm-row no-gutters">
                            <div class="col-sm-3 mr-sm-5 card border-0 hover-change-image bg-hover-overlay mb-sm-5">
                                <img src="images/properties-list-13.jpg" class="card-img"
                                    alt="Explore Old Barcelona">
                                <div class="card-img-overlay p-2">
                                    <ul
                                        class="list-inline mb-0 d-flex justify-content-center align-items-center h-100 hover-image">
                                        <li class="list-inline-item">
                                            <a href="#"
                                                class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-heading bg-white border-white bg-hover-primary border-hover-primary hover-white">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#"
                                                class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-heading bg-white border-white bg-hover-primary border-hover-primary hover-white">
                                                <i class="fas fa-exchange-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="media-body mt-3 mt-sm-0">
                                <h2 class="my-0"><a href="single-property-1.html"
                                        class="fs-16 lh-2 text-dark hover-primary d-block">Explore Old Barcelona</a>
                                </h2>
                                <p class="mb-1 font-weight-500 text-gray-light">1421 San Pedro St, Los Angeles</p>
                                <p class="fs-17 font-weight-bold text-heading mb-1">
                                    $2500
                                    <span class="fs-14 font-weight-500 text-gray-light"> /month</span>
                                </p>
                                <p class="mb-2 ml-0">Lorem ipsum dolor sit amet, sectetur cing elit uspe ndisse
                                    suscorem ipsum dolor sitorem sit amet, sectetur cing elit uspe ndisse suscorem
                                </p>
                            </div>
                        </div>
                        <div class="d-sm-flex justify-content-sm-between">
                            <ul class="list-inline d-flex mb-0 flex-wrap">
                                <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                    data-toggle="tooltip" title="3 Bedroom">
                                    <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-bedroom"></use>
                                    </svg>
                                    3 Br
                                </li>
                                <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                    data-toggle="tooltip" title="3 Bathrooms">
                                    <svg class="icon icon-shower fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-shower"></use>
                                    </svg>
                                    3 Ba
                                </li>
                                <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                    data-toggle="tooltip" title="Size">
                                    <svg class="icon icon-square fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-square"></use>
                                    </svg>
                                    2300 Sq.Ft
                                </li>
                                <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                    data-toggle="tooltip" title="1 Garage">
                                    <svg class="icon icon-Garage fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-Garage"></use>
                                    </svg>
                                    1 Gr
                                </li>
                                <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                    data-toggle="tooltip" title="Year">
                                    <svg class="icon icon-year fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-year"></use>
                                    </svg>
                                    2020
                                </li>
                            </ul>
                            <span class="badge badge-indigo mr-xl-2 mt-3 mt-sm-0">for Rent</span>
                        </div>
                    </div>
                    <div class="py-5 px-4 border rounded-lg shadow-hover-1 bg-white mb-4" data-animate="fadeInUp">
                        <div class="media flex-column flex-sm-row no-gutters">
                            <div class="col-sm-3 mr-sm-5 card border-0 hover-change-image bg-hover-overlay mb-sm-5">
                                <img src="images/properties-list-14.jpg" class="card-img" alt="Home in Metric Way">
                                <div class="card-img-overlay p-2">
                                    <ul
                                        class="list-inline mb-0 d-flex justify-content-center align-items-center h-100 hover-image">
                                        <li class="list-inline-item">
                                            <a href="#"
                                                class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-heading bg-white border-white bg-hover-primary border-hover-primary hover-white">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#"
                                                class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-heading bg-white border-white bg-hover-primary border-hover-primary hover-white">
                                                <i class="fas fa-exchange-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="media-body mt-3 mt-sm-0">
                                <h2 class="my-0"><a href="single-property-1.html"
                                        class="fs-16 lh-2 text-dark hover-primary d-block">Home in Metric Way</a>
                                </h2>
                                <p class="mb-1 font-weight-500 text-gray-light">1421 San Pedro St, Los Angeles</p>
                                <p class="fs-17 font-weight-bold text-heading mb-1">
                                    $2500
                                    <span class="fs-14 font-weight-500 text-gray-light"> /month</span>
                                </p>
                                <p class="mb-2 ml-0">Lorem ipsum dolor sit amet, sectetur cing elit uspe ndisse
                                    suscorem ipsum dolor sitorem sit amet, sectetur cing elit uspe ndisse suscorem
                                </p>
                            </div>
                        </div>
                        <div class="d-sm-flex justify-content-sm-between">
                            <ul class="list-inline d-flex mb-0 flex-wrap">
                                <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                    data-toggle="tooltip" title="3 Bedroom">
                                    <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-bedroom"></use>
                                    </svg>
                                    3 Br
                                </li>
                                <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                    data-toggle="tooltip" title="3 Bathrooms">
                                    <svg class="icon icon-shower fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-shower"></use>
                                    </svg>
                                    3 Ba
                                </li>
                                <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                    data-toggle="tooltip" title="Size">
                                    <svg class="icon icon-square fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-square"></use>
                                    </svg>
                                    2300 Sq.Ft
                                </li>
                                <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                    data-toggle="tooltip" title="1 Garage">
                                    <svg class="icon icon-Garage fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-Garage"></use>
                                    </svg>
                                    1 Gr
                                </li>
                                <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                    data-toggle="tooltip" title="Year">
                                    <svg class="icon icon-year fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-year"></use>
                                    </svg>
                                    2020
                                </li>
                            </ul>
                            <span class="badge badge-indigo mr-xl-2 mt-3 mt-sm-0">for Rent</span>
                        </div>
                    </div>
                    <div class="py-5 px-4 border rounded-lg shadow-hover-1 bg-white mb-4" data-animate="fadeInUp">
                        <div class="media flex-column flex-sm-row no-gutters">
                            <div class="col-sm-3 mr-sm-5 card border-0 hover-change-image bg-hover-overlay mb-sm-5">
                                <img src="images/properties-list-15.jpg" class="card-img"
                                    alt="Garden Gingerbread House">
                                <div class="card-img-overlay p-2">
                                    <ul
                                        class="list-inline mb-0 d-flex justify-content-center align-items-center h-100 hover-image">
                                        <li class="list-inline-item">
                                            <a href="#"
                                                class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-heading bg-white border-white bg-hover-primary border-hover-primary hover-white">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#"
                                                class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-heading bg-white border-white bg-hover-primary border-hover-primary hover-white">
                                                <i class="fas fa-exchange-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="media-body mt-3 mt-sm-0">
                                <h2 class="my-0"><a href="single-property-1.html"
                                        class="fs-16 lh-2 text-dark hover-primary d-block">Garden Gingerbread
                                        House</a>
                                </h2>
                                <p class="mb-1 font-weight-500 text-gray-light">1421 San Pedro St, Los Angeles</p>
                                <p class="fs-17 font-weight-bold text-heading mb-1">
                                    $1.250.000
                                </p>
                                <p class="mb-2 ml-0">Lorem ipsum dolor sit amet, sectetur cing elit uspe ndisse
                                    suscorem ipsum dolor sitorem sit amet, sectetur cing elit uspe ndisse suscorem
                                </p>
                            </div>
                        </div>
                        <div class="d-sm-flex justify-content-sm-between">
                            <ul class="list-inline d-flex mb-0 flex-wrap">
                                <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                    data-toggle="tooltip" title="3 Bedroom">
                                    <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-bedroom"></use>
                                    </svg>
                                    3 Br
                                </li>
                                <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                    data-toggle="tooltip" title="3 Bathrooms">
                                    <svg class="icon icon-shower fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-shower"></use>
                                    </svg>
                                    3 Ba
                                </li>
                                <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                    data-toggle="tooltip" title="Size">
                                    <svg class="icon icon-square fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-square"></use>
                                    </svg>
                                    2300 Sq.Ft
                                </li>
                                <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                    data-toggle="tooltip" title="1 Garage">
                                    <svg class="icon icon-Garage fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-Garage"></use>
                                    </svg>
                                    1 Gr
                                </li>
                                <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                    data-toggle="tooltip" title="Year">
                                    <svg class="icon icon-year fs-18 text-primary mr-1">
                                        <use xlink:href="#icon-year"></use>
                                    </svg>
                                    2020
                                </li>
                            </ul>
                            <span class="badge badge-primary mr-xl-2 mt-3 mt-sm-0">For Sale</span>
                        </div>
                    </div> --}}

                    {{-- <nav class="pt-6">
                        <ul class="pagination rounded-active justify-content-center mb-0">
                            <li class="page-item"><a class="page-link" href="#"><i
                                        class="far fa-angle-double-left"></i></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item d-none d-sm-block"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">...</li>
                            <li class="page-item"><a class="page-link" href="#">6</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i
                                        class="far fa-angle-double-right"></i></a></li>
                        </ul>
                    </nav> --}}

                </div>
            </div>
        </div>
    </section>


</main>
@endsection

<script>
    function showSummerytext(id){
        $(".amenities"+id).toggle()
    }
</script>
