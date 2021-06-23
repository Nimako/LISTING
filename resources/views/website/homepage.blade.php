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
            What Can We Help You Find?
         </h2>
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
                        <span class="d-none d-sm-flex align-items-center ml-2 text-primary fs-42 lh-1">
                           <svg
                              class="icon icon-long-arrow">
                              <use xlink:href="#icon-long-arrow"></use>
                           </svg>
                        </span>
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
                        <span class="d-none d-sm-flex align-items-center ml-2 text-primary fs-42 lh-1">
                           <svg
                              class="icon icon-long-arrow">
                              <use xlink:href="#icon-long-arrow"></use>
                           </svg>
                        </span>
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
                        <span class="d-none d-sm-flex align-items-center ml-2 text-primary fs-42 lh-1">
                           <svg
                              class="icon icon-long-arrow">
                              <use xlink:href="#icon-long-arrow"></use>
                           </svg>
                        </span>
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
            Our Locations
         </h2>
         <span class="heading-divider mx-auto mb-7"></span>
         <div class="row">
            <div class="col-lg-6">
               <div class="row flex-md-row flex-column">

                  <?php if(!empty($list[1]->featuredImage)): ?>
                   <div class="col-md-6 mb-6">
                     <div class="card border-0 text-white bg-overlay hover-zoom-in" data-animate="zoomIn">
                        <img src="{{'storage/'.$list[1]->featuredImage}}" style="width:268px;height:181px" class="card-img" alt="New York">
                        <div class="card-img-overlay d-flex justify-content-end flex-column p-4">
                           <h2 class="mb-0 fs-20 lh-182"><a href="listing-full-width-list.html" class="text-white">{{ucfirst($list[1]->location)}}</a></h2>
                           {{-- <p class="fs-13 font-weight-500 letter-spacing-087 mb-0">FROM<span class="ml-2 fs-15 font-weight-bold">$540.000 - $900.000</span> --}}
                           </p>
                        </div>
                     </div>
                   </div>
                  <?php endif; ?>

                  <?php if(!empty($list[2]->featuredImage)): ?>
                  <div class="col-md-6 mb-6">
                     <div class="card border-0 text-white bg-overlay hover-zoom-in" data-animate="zoomIn">
                        <img src="{{'storage/'.$list[2]->featuredImage}}" style="width:268px;height:181px" class="card-img" alt="New York">
                        <div class="card-img-overlay d-flex justify-content-end flex-column p-4">
                           <h2 class="mb-0 fs-20 lh-182"><a href="listing-full-width-list.html" class="text-white">{{ucfirst($list[2]->location)}}</a></h2>
                           {{-- <p class="fs-13 font-weight-500 letter-spacing-087 mb-0">FROM<span class="ml-2 fs-15 font-weight-bold">$340.000 - $600.000</span> --}}
                           </p>
                        </div>
                     </div>
                  </div>
                  <?php endif; ?>

                  <?php if(!empty($list[3]->featuredImage)): ?>
                  <div class="col-md-6 mb-6">
                     <div class="card border-0 text-white bg-overlay hover-zoom-in" data-animate="zoomIn">
                        <img src="{{'storage/'.$list[3]->featuredImage}}" style="width:268px;height:181px" class="card-img" alt="New York">
                        <div class="card-img-overlay d-flex justify-content-end flex-column p-4">
                           <h2 class="mb-0 fs-20 lh-182"><a href="listing-full-width-list.html" class="text-white">{{ucfirst($list[3]->location)}}</a></h2>
                           {{-- <p class="fs-13 font-weight-500 letter-spacing-087 mb-0">FROM<span class="ml-2 fs-15 font-weight-bold">$310.000 - $700.000</span> --}}
                           </p>
                        </div>
                     </div>
                  </div>
                  <?php endif; ?>

                  <?php if(!empty($list[4]->featuredImage)): ?>
                  <div class="col-md-6 mb-6">
                     <div class="card border-0 text-white bg-overlay hover-zoom-in" data-animate="zoomIn">
                        <img src="{{'storage/'.$list[4]->featuredImage}}" style="width:268px;height:181px" class="card-img" alt="New York">
                        <div class="card-img-overlay d-flex justify-content-end flex-column p-4">
                           <h2 class="mb-0 fs-20 lh-182"><a href="listing-full-width-list.html" class="text-white">{{ucfirst($list[4]->location)}}</a></h2>
                           {{-- <p class="fs-13 font-weight-500 letter-spacing-087 mb-0">FROM<span class="ml-2 fs-15 font-weight-bold">$150.000 - $700.000</span> --}}
                           </p>
                        </div>
                     </div>
                  </div>
                  <?php endif; ?>
               </div>
            </div>

            <?php if(!empty($list[0]->featuredImage)): ?>
            <div class="col-lg-6">
               <div class="card text-white bg-overlay hover-zoom-in" data-animate="zoomIn">
                  <img src="{{'storage/'.$list[0]->featuredImage}}" style="height:390px" class="card-img" alt="New York">
                  <div class="card-img-overlay d-flex justify-content-end flex-column p-4">
                     <h2 class="card-title mb-0 fs-20 lh-182"><a href="listing-full-width-list.html" class="text-white">{{ucfirst($list[0]->location)}}</a>
                     </h2>
                     {{-- <p class="card-text fs-13 font-weight-500 letter-spacing-087 mb-0">FROM<span class="ml-2 fs-15 font-weight-bold">$250.000 - $900.000</span> --}}
                     </p>
                  </div>
               </div>
            </div>
            <?php endif; ?>
         </div>
      </div>
   </section>

   <section class="bg-gray-02 pt-9 pb-10">
    <div class="container container-xxl">
        <h2 class="text-center text-dark line-height-base">
            Featured Rooms
        </h2>
        <span class="heading-divider mx-auto mb-6"></span>
        <div class="slick-slider slick-dots-mt-0"
            data-slick-options='{"slidesToShow": 4, "autoplay":true,"dots":true,"arrows":false,"responsive":[{"breakpoint": 1600,"settings": {"slidesToShow":3}},{"breakpoint": 992,"settings": {"slidesToShow":2}},{"breakpoint": 768,"settings": {"slidesToShow": 2,"autoplay":true}},{"breakpoint": 576,"settings": {"slidesToShow": 1,"autoplay":true}}]}'>
            
            <?php if(!empty($rooms)):  ?>
            <?php foreach($rooms as $item): ?>
            <div class="box pt-2 pb-4" data-animate="fadeInUp">
                <div class="card shadow-hover-xs-2">
                    <div class="card-header bg-transparent px-4 pt-4 pb-3 card-img">
                        <h2 class="fs-16 lh-2 mb-0"><a href="single-property-1.html"
                                class="text-dark hover-primary"><?= $item->room_name; ?></a></h2>
                        <p class="font-weight-500 text-gray-light mb-3">1421 San Pedro St, Los Angeles</p>
                        <div class="hover-change-image bg-hover-overlay rounded-lg">
                            <img src="{{'storage/'.$item->featured_image}}" alt="Home in Metric Way" style="width:320px, height:229px">
                            <div class="card-img-overlay d-flex flex-column">
                                <div><span class="badge badge-orange">Featured</span></div>
                                <div class="mt-auto d-flex hover-image">
                                    <ul class="list-inline mb-0 d-flex align-items-end mr-auto">
                                        <li class="list-inline-item mr-2" data-toggle="tooltip" title="9 Images">
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
                                        <li class="list-inline-item mr-3 h-32" data-toggle="tooltip" title="Wishlist">
                                            <a href="#" class="text-white fs-20 hover-primary">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item mr-3 h-32" data-toggle="tooltip" title="Compare">
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
                        <p class="mb-0">
                            <?=  Str::limit($item->summary_text, $limit = 100, $end = '...'); ?>
                        </p>
                    </div>
                    <div class="card-footer bg-transparent pt-3 pb-4 pb-3">
                        <ul class="list-inline d-flex justify-content-between mb-0 flex-wrap">
                            <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center">
                                <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                    <use xlink:href="#icon-bedroom"></use>
                                </svg>
                                3 Br
                            </li>
                            <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center">
                                <svg class="icon icon-shower fs-18 text-primary mr-1">
                                    <use xlink:href="#icon-shower"></use>
                                </svg>
                                3 Ba
                            </li>
                            <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center">
                                <svg class="icon icon-square fs-18 text-primary mr-1">
                                    <use xlink:href="#icon-square"></use>
                                </svg>
                                2300 Sq.Ft
                            </li>
                            <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center">
                                <svg class="icon icon-Garage fs-18 text-primary mr-1">
                                    <use xlink:href="#icon-Garage"></use>
                                </svg>
                                1 Gr
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>


        </div>
    </div>
</section>

   {{-- <section class="mb-6">
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
               <img style="cursor: pointer" src="{{'storage/'.$item->featuredImage}}" width="500" height="450" alt="<?= Str::ucfirst($item->location); ?>">
               <?php else: ?>
               <img style="cursor: pointer" src="{{asset('assets/images/featuredlocationDefault.jpg')}}" width="300" height="350" alt="<?= Str::ucfirst($item->location); ?>">
               <?php endif; ?>
               </a>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>
         </div>
      </div>
   </section> --}}
   {{-- 
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
                        entum
                     </p>
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
                        entum
                     </p>
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
                        entum
                     </p>
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
                        entum
                     </p>
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
                        entum
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   --}}
   <section data-animated-id="6">
      <div class="bg-patten-01 pt-12 pb-10 bg-secondary">
         <div class="container">
            <span class="heading-divider mx-auto"></span>
            <div class="row info-box-3 mt-7 no-gutters mx-auto">
               <div class="col-md-5 card p-5  col-sm-6 mb-6 mb-md-0 zoomIn animated" data-animate="zoomIn">
                  <p class="h5 text-center"><b>Short Apartment Stay</b></p>
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
                  <p class="h5 text-center"><b>Long Apartment Stay</b></p>
                  <div class="card-img-top  d-flex align-items-center justify-content-center border-md-right rounded-0">
                     <div class=" position-relative">
                        <img src="{{asset('websiteAssets/images/verified.png')}}" class="hover-image position-absolute pos-fixed-top" alt="Apartment">
                        <img src="{{asset('websiteAssets/images/white-verified.png')}}" class="image" alt="Apartment">
                     </div>
                  </div>
                  <div class="card-body px-0 pt-5 pb-0 text-center" >
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
