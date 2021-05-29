@extends('website/layouts.tempMain')
@section('content')   

<main id="content">
    <section class="pb-8 page-title shadow">
        <div class="container">
            <nav aria-label="breadcrumb">
            
                <h1 class="fs-30 lh-1 mb-0 text-heading font-weight-600">Invoice</h1>
            </nav>
        </div>
    </section>

    <section class="pt-8 pb-11 bg-gray-01">
        <div class="container">

            <section class="row">
                <div class="col-md-12">
                    <table class="table">
                        
                        <div class="card">
                            <div class="card-body">

                              <section class="row">

                                  <div class="col-md-12">

                                    <div class="card">
                                        <div class="card-body">
                                        <p class="text-left text-dark"><b>Check-in:</b> <?= date("l, M d, Y", strtotime($list[0]->check_in)); ?></p>
                                        <p class="text-left text-dark" style="margin-top: -1.4em"><b>Check-out:</b> <?= date("l, M d, Y", strtotime($list[0]->check_out)); ?></p>
                                        </div>
                                    </div>

                                    <p class="text-dark mt-2"><b>Accommodation Booking</b></p>

                                    <?php  if(!empty($list)): ?>
                                    <?php foreach($list as $item): ?>
                                    <div class="card">
                                        <div class="card-body row">

                                            <section class="col">

                                              <p class="h6"><b><?= $item->room_name; ?></b></p>

                                              <p><b>Details: </b><?= $item->total_night ?> ninght, <?= $item->guest; ?> adults  

                                                <?php if(!empty($item->additional_guest)): ?>
                                                + <?= $item->additional_guest; ?> extra adults 
                                                <?php endif; ?>

                                             </p>


                                            </section>

                                            <section class="col">

                                            </section>

                                            <section class="col">
                                                <?php  if(!empty($item->additional_guest)): ?>
                                               <p class="h6">US$ <?= ($item->price * $item->total_night) + ($item->additional_guest * explode("****", $item->additional_guest_price)[1]);  ?></p>
                                                <?php else: ?>
                                                <p class="h6">US$ <?= ($item->price)*$item->total_night;  ?></p>
                                                <?php endif; ?>
                                            </section>

                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                    <?php endif; ?>

                                    
                                  </div>

                                  <div class="col-md-6">

                                    <p class="text-dark mt-2"><b>Guest Details</b></p>

                                    <div class="card">
                                        <div class="card-body">

                                            <form>
                                                <div class="form-row">

                                                  <div class="form-group col-md-6">
                                                    <label for="inputEmail4">First name *                                                    </label>
                                                    <input type="email" class="form-control" id="inputEmail4">
                                                  </div>
                                                  <div class="form-group col-md-6">
                                                    <label for="inputPassword4">Last name *</label>
                                                    <input type="text" class="form-control" id="">
                                                  </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                      <label for="inputEmail4">Email</label>
                                                      <input type="email" class="form-control" id="inputEmail4">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="inputEmail4">Retype Email</label>
                                                        <input type="email" class="form-control" id="inputEmail4">
                                                      </div>
                                                  </div>
                                           
                                                <div class="form-row">
                                                  <div class="form-group col-md-6">
                                                    <label for="inputCity">Countact phone *</label>
                                                    <input type="text" class="form-control" id="inputCity">
                                                  </div>
                                                  <div class="form-group col-md-6">
                                                    <label for="inputState">Country</label>
                                                    <select id="inputState" class="form-control">
                                                      <option selected>Choose...</option>
                                                      <option>...</option>
                                                    </select>
                                                  </div>

                                                  <div class="form-group col-md-12">
                                                    <label for="inputCity">Contact phone *</label>
                                                    <textarea type="text" class="form-control" id="inputCity"></textarea>
                                                  </div>
                                             
                                                </div>
                                             
                                              </form>



                                        </div>
                                    </div>


                                  </div>

                                  <div class="col-md-6">

                                    <p class="text-dark mt-2"><b>Guest Details</b></p>

                                    <div class="card">
                                        <div class="card-body">

                                            <p class="text-dark mt-2"><b>Room charges </b></p>

                                            <p class="text-dark mt-2"><b>Total Price: </b></p>
                                         </div>
                                      </div>
                                      
                                     </div>

                                     <section class="col-md-12">
                                         <center>
                                          <button class="btn btn-primary btn-md">Confirm and Book</button>
                                         </center>
                                     </section>

                              </section>
                            </div>
                          </div>

                    </table>
                </div>

            </section>
            

        </div>
    </section>
</main>

@endsection
