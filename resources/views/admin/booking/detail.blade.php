@extends('admin/layouts.tempDashboard')
@section('content')


<div class="content-page">
    <div class="content">
        
        <!-- Start Content-->
        <div class="container-fluid">
            
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                            </ol>
                        </div>
                        <h4 class="page-title text-center">Booking Details</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

            <div class="row">

                <div class="col-12">

                    <div class="card-box row">

                        <section class="col-md-12">

                        <p class="ml-3 h6 text-uppercase text-black">{{ $room->first_name ." ". $room->last_name   }} | {{ $room->contact_number }} | {{ $room->email }} | {{ $room->country }} | <small>{{ $room->comment }} </small> </p>

                        <hr>
                        </section>
                       

                     

                    <section class="col-md-4">
                        <table class="table_" cellpadding="10" cellspacing="10">
                            <tr>
                                <td><b>Booking number:</b></td>
                                <td><label class="badge badge-danger"><?= $room->order_no; ?></label></td>
                            </tr>
                            <tr>
                                <td><b>Check In:</b></td>
                                <td><?= date('l d F Y', strtotime($room->check_in));; ?></td>
                            </tr>
                            <tr>
                                <td><b>Check Out:</b></td>
                                <td><?= date('l d F Y', strtotime($room->check_out));; ?></td>
                            </tr>
                            <tr>
                                <td><b>Total Amount($):</b></td>
                                <td><?= $room->total; ?></td>
                            </tr>

                        </table>
                    </section>

                    <section class="col-md-8">

                        <?php if(!empty($rooms)): ?>
                        <?php foreach($rooms as $item): ?>
                           <p class="h6 text-secondary"> {{$item->room_name}}</p>
                           <p class="h7">
                                <b class="text-primary">Guest:</b> {{$item->guest}},   
                                <b class="text-primary">Additional Guest:</b> {{ $item->additional_guest !=null?$item->additional_guest:"0"}} ,
                                <b class="text-primary">Night:</b> {{ $item->total_night}}, 
                                <b class="text-primary">Location:</b> {{ $item->location}} 
                                <b class="text-primary ml-5">STATUS:</b> <span class="text-uppercase"> {{ @CART_STATUSES[$item->status]}} </span>
                            </p>

                           <hr>
                        <?php endforeach; ?>
                        <?php endif; ?>




                    </section>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

 @endsection

