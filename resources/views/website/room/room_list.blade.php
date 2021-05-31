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
    .RoomPrice{
        font-weight: 500;
        font-size: 1.1rem;
        color: #000
    }
    .RoomGuestNight{
        font-size:1em
    }
    .custom-control-label::before {
        background-color: #ed7373;
    }

    .modal-fullscreen .modal-content {
  background: transparent;
  border: 0;
  -webkit-box-shadow: none;
  box-shadow: none;
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

          <form action="{{url("AddBooking")}}" method="POST" onsubmit="return SubmitBooking()">
            @csrf
            <div class="row">


                <div class="col-md-7 offset-md-1">

                    <br>

                    <div class=" row">
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <label class="text-dark">Select checkin and checkout date</label>
                            <input type="text" name="daterange" id="daterange" class="form-control text-center float-right" style="background-color:white"/>
                        </div>
                        
                    </div><br>

                    <?php if(!empty($list)): ?>
                    <?php foreach($list as $item): ?>
                    <div class="py-5 px-4 border rounded-lg shadow-hover-1 bg-white mb-4" data-animate="fadeInUp">
                        <div class="media flex-column flex-sm-row no-gutters" style="">
                            <div class="col-sm-3 mr-sm-5 card border-0 hover-change-image bg-hover-overlay mb-sm-5">
                                <img src="{{asset('storage/'.$item->featured_image)}}"  class="card-img" alt="" style="height:191px">
                                <div class="card-img-overlay p-2">
                                    <ul
                                        class="list-inline mb-0 d-flex justify-content-center align-items-center h-100 hover-image">
                                        
                                        <li class="list-inline-item">
                                            <a href="javascript:void()" onclick="GetImages(<?= $item->id ?>)"
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
                                        data-toggle="tooltip" title="<?= @$item->total_guest_capacity; ?> Sleeps">
                                        <i class="fas fa-users fs-18 text-primary mr-1"></i>
                                        Sleeps <?= @$item->total_guest_capacity; ?>
                                    </li>
                                        
                                    <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                        data-toggle="tooltip" title="<?= @$item->num_of_rooms; ?> Bedroom">
                                        <i class="fas fa-bed fs-18 text-primary mr-1"></i>
                                        <?= @$item->num_of_rooms; ?> Bedroom
                                    </li>
                               
                                    <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-10"
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
                                <p>
                                    <span class="RoomPrice">USD <span id="price<?=$item->id;?>"><?= @$item->pricing[0]->price; ?></span> </span>
                                    <small class="RoomGuestNight">per night, <span id="guest<?=$item->id;?>"><?= @$item->pricing[0]->guest; ?></span> guest(s) </small>
                                </p>
                            </div>

                        </div>
                        <section class="row" >
                            <div class="col-md-4">
                                <?php if($item->free_cancellation==1): ?>
                                 <i class="fa fa-check-circle fa-1x"></i> Free Cancellation!
                                <?php endif; ?>
                            </div>

                            <div class="col-md-8 float-right">

                                <section class="form-group row">

                                        <div class="col-md-4 text-center">
                                            <?php if(!empty($item->additional_guest)):  ?>
                                            <?php $additional_guest = explode("****",$item->additional_guest); ?>

                                            <span class="text-center">
                                                <i class="fa fa-user text-center"></i>
                                                <i class="fa fa-user-plus text-center"></i>
                                            </span>
                                            <p style="font-weight: normal">
                                                <?= @$additional_guest[0];?> Adults <br>
                                                <small>
                                                    <a onclick="ShowExtraGuest(<?= $item->id; ?>)" href="javascript:void" class="text-danger">Click to add extra persons </a>
                                                <i data-toggle="tooltip" data-placement="top" title="<?= @$additional_guest[0];?> extra person available per room. Guest 0 - 2 years old stay for free if using exsiting bedding." class="fa fa-info-circle"></i>
                                               </small>
                                            </p>
                                             
                                            <div id="additional_guest<?= $item->id; ?>" style="display:none;background-color:#F8F8F8">

                                            <?php for($x=1; $x <=$additional_guest[0]; $x++): ?>
                                               <div class="form-row" style="font-size: 0.8em">
                                                   {{-- <div class="col">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input" id="customSwitch<?= $x; ?>">
                                                        <label class="custom-control-label" for="customSwitch<?= $x; ?>"> $<?= @$additional_guest[1];?>   </label>
                                                      </div> 
                                                    </div> --}}
                                                    <div class="col"> 
                                                      <label>
                                                        <input type="checkbox" disabled id="additional_guestPrice<?= $x; ?>" class="additional_guestPrice<?= $item->id; ?>" onchange="AddAdditionalGuest(<?= $item->id; ?>,<?= @$additional_guest[1];?>,<?= $x; ?>)"   name="additional_guest[]" value="<?= $item->id; ?>"  id="customSwitch<?= $x; ?>">
                                                         1 Adult
                                                       </label>
                                                    </div>
                                                    <div>
                                                        <label for="customSwitch<?= $x; ?>"> $<?= @$additional_guest[1];?></label>
                                                    </div>
                                                 </div>
                                            <?php endfor; ?>
                                            </div>

                                            <?php endif; ?>

                                        </div>

                                    
                                    <div class="col-md-5">
                                      <select class="form-control" id="priceDropDown<?= $item->id; ?>" name="price" onchange="changePrice(<?= $item->id; ?>,this.value)">
                                        <option value="">Select guests</option>
                                        <?php if(!empty($item->pricing)): ?> 
                                         <?php foreach($item->pricing as $price): ?>
                                         <option value='{"pricingID":<?= @$price->id; ?>, "guest":<?= @$price->guest; ?>, "price":"<?= @$price->price; ?>","roomName":"<?= $item->room_name; ?>"}'><?= @$price->guest; ?> Guests</option>
                                         <?php endforeach; ?>
                                        <?php endif; ?>
                                       </select>
                                     </div>

                                     <div class="col-md-3">
                                        <button type="button" id="selectBtn<?= $item->id; ?>" onclick="AddRoomToCart(<?= $item->id; ?>)" class="btn btn-primary btn-md">Select</button>
                                     </div>
                                     
                                </section>
                                 
                            </div>
                        </section>
                    </div>
                    <?php endforeach; ?>
                    <?php endif; ?>
                    
                </div>

                <div class="col-md-3 mt-12">
                    <div class="primary-sidebar-inner" style="">
                        <div class="card mb-4">
                            <div class="card-body px-4 py-3">

                                <p id="selectedPrice"></p>

                                <p style="font-size:1.1em;">
                                    <span id="datedSelected"></span>

                                    <?php $today = date("Y-m-d"); ?>
                                     <input type="hidden" value="<?= date('Y-m-d'); ?>" name="checkIn" id="checkIn">
                                     <input type="hidden" value="<?= date('Y-m-d', strtotime($today. ' + 2 days')); ?>" name="checkOut" id="checkOut">

                                    <span class="NumNights ml-6"></span>
                                    <input type="hidden"  name="NumNights" class="NumNights">

                                </p>
                                <hr>
                                {{-- <p class="h6 text-center">Select a rate to continue</p> --}}

                                 <p>
                                     {{-- <p class="text-center" id="">2 Guests</p> --}}
                                     <p class="text-center h5 pt-0">USD <span id="totalPriceText">0.00</span></p>

                                     <input type="hidden" id="totalPrice" name="totalPrice" value="0">

                                     <p class="text-center" style="margin-top: -10px">for <span class="NumNights"></span></p>
                                 </p>

                                 <table id="CartList" class="table" style="font-size:1em">
                                     
                                 </table>

                                 <hr>

                                 <p class="text-center h4 pt-0">Total: USD <span id="GrandTotal">0.00</span></p>

                                <button type="submit" id="bookBtn" class="btn btn-primary btn-lg btn-block shadow-none mt-4">
                                    Book Now
                                </button>
                            </div>
                        </div>
         
                    </div>
                </div> 
            </div>
          </form>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            {{-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> --}}
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            
            </div>
            {{-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
            </div> --}}
        </div>
        </div>
    </div>


</main>
@endsection


<script>
    function showSummerytext(id){
        $(".amenities"+id).toggle()
    }

    function changePrice(roomID,value){

        $(".additional_guestPrice"+roomID).attr("disabled","disabled");

        if(value != ""){

            console.log(value);

            AddRoomToCart(roomID); //Add to cart

            var obj = JSON.parse(value);

            $("#price"+roomID).text(obj.price);
            $("#guest"+roomID).text(obj.guest);

            $(".additional_guestPrice"+roomID).removeAttr("disabled");

       }else{

       }

    }

    var priceIDArray=[];

    function AddRoomToCart(roomID){

      var priceDropDownValue = $("#priceDropDown"+roomID).val();

      if(priceDropDownValue != ""){

        var obj = JSON.parse(priceDropDownValue);

        if(priceIDArray.indexOf(obj.pricingID) !== -1){

             //alert("Array Exist");

        }else{

            var totalBalance =  $("#totalPrice").val();
            var totalNights  =  $(".NumNights").val();

            $("#totalPrice").val(Number(totalBalance)+Number(obj.price));
            $("#totalPriceText").text(Number(totalBalance)+Number(obj.price));

            $("#GrandTotal").text( Number($("#totalPrice").val()) * Number(totalNights));


            priceIDArray.push(obj.pricingID);

            //alert(obj.pricingID);

            $("#CartList").append('<tr id="cartID'+obj.pricingID+'"><td class="text-dark">'+obj.roomName+'<br><small>'+obj.guest+' Guests</small></td><td>USD '+obj.price+'</td><td><i class="fa fa-trash" style="cursor:pointer" onclick="RemoveFromCart('+obj.pricingID+','+obj.price+')"></i><input type="hidden" name="pricingID[]" value="'+obj.pricingID+'"></td></tr>');


            console.log(priceIDArray);
        }
     } 

    }

    function RemoveFromCart(pricingID,price){

        const index = priceIDArray.indexOf(pricingID);
        if (index > -1) {
            priceIDArray.splice(index, 1);
        }

        $("#cartID"+pricingID).remove();

        var totalBalance =  $("#totalPrice").val();
        var totalNights  =  $(".NumNights").val();

        $("#totalPrice").val(Number(totalBalance)-Number(price));
        $("#totalPriceText").text(Number(totalBalance)-Number(price));

        $("#GrandTotal").text(Number($("#totalPrice").val())*Number(totalNights));

        console.log(priceIDArray); 
    }

    function ShowExtraGuest(id){

        $("#additional_guest"+id).toggle();
    }

    function AddAdditionalGuest(roomID,value,x){

        if($("#additional_guestPrice"+x).is(':checked')){

            var CurrentPrice = $("#price"+roomID).text();
            var currentGuest = $("#guest"+roomID).text();

            $("#price"+roomID).text(Number(CurrentPrice)+Number(value));           
            $("#guest"+roomID).text(Number(currentGuest)+Number(1));

            
            var totalBalance =  $("#totalPrice").val();
            var totalNights  =  $(".NumNights").val();

            if(Number(totalBalance)>0){
               $("#totalPrice").val(Number(totalBalance)+Number(value));
               $("#totalPriceText").text(Number(totalBalance)+Number(value)); 

               $("#GrandTotal").text( Number($("#totalPrice").val()) * Number(totalNights));

            }

        }else{
            var CurrentPrice =  $("#price"+roomID).text();
            var currentGuest = $("#guest"+roomID).text();

            $("#price"+roomID).text(Number(CurrentPrice)-Number(value));           
            $("#guest"+roomID).text(Number(currentGuest)-Number(1));

            var totalBalance =  $("#totalPrice").val();
            var totalNights  =  $(".NumNights").val();

            if(Number(totalBalance)>0){
               $("#totalPrice").val(Number(totalBalance)-Number(value));
               $("#totalPriceText").text(Number(totalBalance)-Number(value)); 
               $("#GrandTotal").text(Number($("#totalPrice").val()) * Number(totalNights));
            }
        }
    }

    function SubmitBooking(){

        $("#bookBtn").attr("disabled","disabled").text('Submiting...');

        return true;

    }


    function GetImages(id){

        $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
            
        });
        jQuery.ajax({
            url:'/get-room-images',
            type: 'POST',
            data: {
                roomID: id,
            },
            success: function( data ){

                //console.log(data);
                $(".modal-body").html(data);
                $("#exampleModal").modal("show");

            },
            error: function (xhr, b, c) {
                console.log("xhr=" + xhr + " b=" + b + " c=" + c);
            }
        });

    }

</script>

