@extends('website/layouts.tempNoMenu')
@section('content')   

<main id="content">
<section class="pb-8 page-title shadow">
    <div class="container">
        <nav aria-label="breadcrumb">
          <p class="fs-30 lh-1 mb-0 pt-5 text-heading  font-weight-600">
             <span class="text-left">STAYLUG</span>

             <span class="text-right h7"><small><?= $list[0]->location; ?></small></span>
          </p>

        </nav>
    </div>
</section>

  <?php if(!empty($list[0]->check_in)): ?>
  <?php $totalAmount = 0; $discount = 0; $total= 0;?>
  <section class="pt-8 pb-11 bg-gray-01">
      <div class="container">

          <section class="row">
              <div class="col-md-12">
                  <table class="table">
                      
                      <div class="card">
                        <form id="paymentForm">
                          @csrf

                          <div class="card-body">

                            <section class="row">

                                <div class="col-md-12">

                                  <div class="card">
                                      <div class="card-body">
                                      <p class="text-left text-dark"><b>Check-in:</b> <?= date("l, M d, Y", strtotime($list[0]->check_in)); ?></p>
                                      <p class="text-left text-dark" style="margin-top: -1.4em"><b>Check-out:</b> <?= date("l, M d, Y", strtotime($list[0]->check_out)); ?></p>
                                      </div>
                                  </div>

                                  <input type="text" name="cart_id" id="cart_id" value="<?= $list[0]->uuid; ?>">

                                  <p class="text-dark mt-2"><b>Accommodation Booking</b></p>

                                  <?php  if(!empty($list)): ?>
                                  <?php foreach($list as $item): ?>
                                  <div class="card">
                                      <div class="card-body row">

                                          <section class="col">

                                            <p class="h6"><b><?= @$item->room_name; ?></b></p>

                                            <p><b>Details: </b><?= @$item->total_night ?> night, <?= @$item->guest; ?> adults  

                                              <?php if(!empty($item->additional_guest)): ?>
                                              + <?= @$item->additional_guest; ?> extra adults 
                                              <?php endif; ?>
                                          </p>
                                          </section>

                                          <section class="col">
                                            <?php  if(!empty($item->additional_guest)): ?>
                                              <p class="h6">
                                                $ <?= $total = + (@$item->price * $item->total_night) + (($item->additional_guest * explode("****", $item->additional_guest_price)[1])*$item->total_night);  ?>
                                              </p>
                                              <?php else: ?>
                                                <p class="h6">US$ <?= $total = + (@$item->price)*$item->total_night;  ?>
                                                </p>
                                              <?php endif; ?>

                                              <?php if(!empty($item->discount) && $item->total_night >=3):  ?>
                                              
                                                  <small style="margin-top:-10px">  - $<?= @$item->discount; ?> discount </small>
                                                    
                                              <?php $discount = $item->discount; endif; ?>
                                          </section>

                                          <section class="col">
                                              <p class="h6 text-dark">US$ <?= $totalAmount = + ($total - $discount); ?></p>
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

                                              <div class="form-row">

                                                <div class="form-group col-md-6">
                                                  <label for="first_name">First name *</label>
                                                  <input type="text" name="first_name" required=""  class="form-control" id="first_name">
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label for="last_name">Last name *</label>
                                                  <input type="text" name="last_name" required="" class="form-control" id="last_name">
                                                </div>
                                              </div>

                                              <div class="form-row">
                                                  <div class="form-group col-md-6">
                                                    <label for="email">Email*</label>
                                                    <input type="email" name="email" required="" class="form-control" id="email">
                                                  </div>
                                                  <div class="form-group col-md-6">
                                                      <label for="email_repeat">Retype Email</label>
                                                      <input type="email" name="email_repeat" required="" class="form-control" id="email_repeat">
                                                   </div>
                                                </div>
                                        
                                              <div class="form-row">
                                                <div class="form-group col-md-6">
                                                  <label for="contact_number">Countact phone *</label>
                                                  <input type="text" name="contact_number" required="" class="form-control" id="contact_number">
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label for="country">Country</label>
                                                  <input type="text" name="country" class="form-control" id="country">
                                                </div>

                                                <div class="form-group col-md-12">
                                                  <label for="inputCity">Additional comments (optional)
                                                  </label>
                                                  <textarea type="text" name="comment" class="form-control" id="comment"></textarea>
                                                </div>
                                          
                                              </div>
                                          
                                      </div>
                                  </div>


                                </div>

                                <div class="col-md-6">

                                  <p class="text-dark mt-2"><b>Price Summary</b></p>

                                  <div class="card">
                                      <div class="card-body">

                                          <p class="text-dark mt-2">
                                            Room charges: 
                                            <span class="pl-3 h7 text-dark float-right">US$ <?= $totalAmount; ?></span></p>

                                          <hr>

                                          <p class="text-dark mt-2">
                                            <b>Total Price: 
                                              <span class="pl-3 h7 float-right">US$ <span id="amount"><?= $totalAmount; ?></span></span> </b>
                                            </p>
                                            <input type="text" name="GrandTotal" id="GrandTotal" value="<?= $totalAmount ?>">

                                      </div>
                                    </div>

                                    <center>
                                    <button type="submit"  class="mt-10 btn btn-primary btn-md">Confirm and Book</button>
                                    </center>
                                    
                                  </div>


                            
                                </section>
                          </div>

                        </form>
                        </div>

                  </table>
              </div>

          </section>
          

      </div>
  </section>

<?php else: ?>

  <section class="pt-8 pb-11 bg-gray-01">
    <div class="container">

        <section class="row">
            <div class="col-md-12">
                <table class="table">
                    
                    <div class="card">
                        <div class="card-body">

                          <p class="text-dark text-center h5">Invalid link</p>
                          
                        </div>
                    </div>
                </table>
            </div>
        </section>
    </div>
  </section>

<?php endif; ?>


</main>

<script src="https://js.paystack.co/v1/inline.js"></script> 
<script>
const paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener("submit", payWithPaystack, false);

function payWithPaystack(e) {
  e.preventDefault();

  var formdata = $("#paymentForm").serialize(); // here $(this) refere to the form its submitting
    $.ajax({
        type: 'POST',
        url: "/add-booking",
        data: formdata, // here $(this) refers to the ajax object not form
        success: function (data) {
          console.log(data.statusCode);
          var GrandTotal = document.getElementById("GrandTotal").value;

          if(data.statusCode==200){

              let handler = PaystackPop.setup({
              key: 'pk_test_08d09668ce32125eeef2d0a594c3a66f6a4c5fb6', // Replace with your public key
              email: document.getElementById("email").value,
              // amount: document.getElementById("GrandTotal") * 100,
              amount: Number(GrandTotal) * 100,
              ref: data.orderNumber, // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
              currency: "GHS",
              // label: "Optional string that replaces customer email"
              onClose: function(){
                alert('Window closed.');
              },
              callback: function(response){
                let message = 'Payment complete! Reference: ' + response.reference;
                window.location = '<?= url("/room/VerifyTransaction?reference="); ?>' + response.reference;
                //alert(message);
              }
              });
              handler.openIframe();
          }else{

            alert("Error inserting...");

          }

        },
    });

}


function hello(){


}

</script>

@endsection
