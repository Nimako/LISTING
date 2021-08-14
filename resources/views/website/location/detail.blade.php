
@extends('website/layouts.tempMain')
@section('content')  

<style>
  
    
    .zoom:hover {
      transform: scale(1.5); /* (150% zoom)*/
      z-index: 10000;
    }
    </style>

<main id="content">

        <section style="background-image: url('{{asset(STORAGE_URL.$location->bannerImage)}}')"
        class="bg-img-cover-center py-10 pt-md-16 pb-md-17 bg-overlay_">
        <div class="container position-relative z-index-2 text-center">
           
            <div class="mxw-751">
                <h1 style="font-size:5em" class="text-white  mt-4 mb-10"
                    data-animate="fadeInRight"><b><?= @$location->location; ?></b></h1>

            </div>
        </div>
    </section>
    <section class="bg-patten-03 bg-gray-01 pb-13">
        <div class="container-fluid">
            <div class="card border-0 mt-n13 z-index-3 mb-12">
                <div class="card-body p-6 px-lg-14 py-lg-13">
                   
                    <section class="row">

                    <section class="col-md-6">

                    <h2 class="text-heading mb-4 fs-22 fs-md-32 text-center lh-16 px-6">
                        <?= @$location->location ?>
                    </h2>
                    <p class="text-justify px-lg-11 fs-15 lh-17 mb-5">
                       <?= @$location->description; ?>
                    </p>
                    <p class="text-center px-lg-11 fs-15 lh-17 mb-11"><a href="{{url($location->slug.'/rooms')}}" class="btn btn-primary">Start Booking now</a></p>


                    </section>
                    <section class="col-md-1"></section>

                    <section class="col-md-4">

                        <div class="slick-slider mx-0" data-slick-options='{"slidesToShow": 1, "autoplay":true}'>

                            <?php if(!empty($location->locationImages)): ?>
                            <?php  $locationImages = json_decode($location->locationImages,true); ?>
                            <?php foreach($locationImages as $item): ?>
                            <div class="box px-0">
                                <div class="card border-0">
                                    <img src="{{asset(STORAGE_URL.$item)}}" class="card-img"  alt="" style="height:477px">
                                    <div class="card-img-overlay_ d-flex flex-column bg-gradient-3 rounded-lg">
                                       
                                      
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            <?php endif; ?>
            
                        </div>


                    </section>

                </section>

                </div>
            </div>
        </div>
        <div class="container">

            <h2 class="text-dark lh-1625 text-center mb-2 fs-22 fs-md-32">
                Explore these other popular area
            </h2>
            <p class="mxw-751 text-center mb-1 px-8">Attractions near <?= @$location->location;?>
            </p>


            <div class="row mt-8" style="background-color: #F8F8F8">

                <section class="col-md-6">

                    <p class="text-justify px-lg-2 fs-15 lh-17 mb-5">
                        <?= @$location->thingToDo; ?>
                     </p>

                </section>

                <section class="col-md-6 row">
                    <?php if(!empty($location->attractionImages)): ?>
                    <?php  $attractionImages = json_decode($location->attractionImages,true); ?>
                    <?php foreach($attractionImages as $item): ?>
                    <div class="col-6 mb-6 mb-lg-0">
                        <div class="shadow-2 px-2 pb-2 pt-2 h-100 border-0 zoom">
                            <img src="{{asset(STORAGE_URL.$item)}}" class="card-img">                       
                        </div>
                    </div> <br>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </section>

            </div>
        </div>
    </section>
    
  
</main>

@endsection