@extends('website/layouts.tempMain')
@section('content')    
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/daterangepicker.min.js" integrity="sha512-mh+AjlD3nxImTUGisMpHXW03gE6F4WdQyvuFRkjecwuWLwD2yCijw4tKA3NsEFpA1C3neiKhGXPSIGSfCYPMlQ==" crossorigin="anonymous"></script> --}}

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

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

    body p {
        font-size: .745rem;
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


                <div class="col-md-7 offset-md-1">

                    <br>

                    <div class=" row">
                        <div class="col-md-6">
                            <input type="text" name="daterange" id="daterange" class="form-control text-center" style="background-color:white"/>
                        </div>
                        <div class="col">
                            <button class="btn btn-primary btn-primary">Search</button>
                        </div>
                    </div><br>

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
                        <section class="row" style="margin-top:-20px">
                            <div class="col-md-6">
                                <?php if($item->free_cancellation==1): ?>
                                 <i class="fa fa-check-circle fa-1x"></i> Free Cancellation!
                                <?php endif; ?>
                            </div>

                            <div class="col-md-6 float-right">

                                <section class="form-group row">
                                    <div class="col-md-6">
                                    <select class="form-control" name="price">
                                        <?php if(!empty($item->pricing)): ?> 
                                         <?php foreach($item->pricing as $price): ?>
                                         <option value="<?= @$price->id; ?>"><?= @$price->guest; ?> Guests -- USD<?= @$price->price; ?></option>
                                         <?php endforeach; ?>
                                        <?php endif; ?>
                                       </select>
                                     </div>

                                     <div class="col-md-3">
                                        <button class="btn btn-primary btn-md">Select</button>
                                     </div>
                                     
                                </section>
                                 
                            </div>
                        </section>
                    </div>
                    <?php endforeach; ?>
                    <?php endif; ?>
                    
                </div>

                <div class="col-md-3 mt-12">
                    <div class="primary-sidebar-inner">
                        <div class="card mb-4">
                            <div class="card-body px-6 py-4">

                                <p id="selectedPrice"></p>

                                <p style="font-size:1.1em;">
                                    <span id="datedSelected"></span>
                                    <span id="NumNights" class="ml-5"></span>
                                </p>
                                <hr>
                                <p class="h6 text-center">Select a rate to continue</p>

                                <button type="submit" class="btn btn-primary btn-lg btn-block shadow-none mt-4">
                                    Book
                                </button>
                            </div>
                        </div>
         
                    </div>
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

