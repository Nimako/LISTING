@extends('website/layouts.tempMain')
@section('content')   


<main id="content">
<section class="bg-secondary">
<div class="container">


</div>
</section>


<section><br>

<div class="container pt-10 pb-12">
<div class="card border-0 mt-n13 z-index-3 pb-8 pt-10">

<div class="card-body p-0"><br>
    <h2 class="text-heading mb-2 fs-22 fs-md-32 text-center lh-16">
        Long Stay</h2>
    <p class="text-center mxw-670 mb-8">
        For a long stay, please contact our customer service using the details below:    </p>

    <section class="row mxw-751 px-md-5">
       <section class="col-md-6">

        <p> Call / Whatsapp:<br> <b>+233 244 274 699 / +233 000000</b></p>

                <p>Email:<br><b>customerservice@staylug.com</b></p>

        {{-- <form class="mxw-751 px-md-5" action="{{url("contact-us-post")}}" method="POST">
            <div class="row">
            <div class="col-md-6">
            <div class="form-group">
            <input type="text" placeholder="First Name" class="form-control form-control-lg border-0" name="first-name">
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
            <input type="text" placeholder="Last Name" name="last-name" class="form-control form-control-lg border-0">
            </div>
            </div>
            </div>
            <div class="row">
            <div class="col-md-6">
            <div class="form-group">
            <input placeholder="Your Email" class="form-control form-control-lg border-0" type="email" name="email">
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
            <input type="text" placeholder="Your Phone" name="phone" class="form-control form-control-lg border-0">
            </div>
            </div>
            </div>
            <div class="form-group mb-6">
            <textarea class="form-control border-0" placeholder="Message" name="message" rows="5"></textarea>
            </div>
            <div class="text-center">
            <button type="submit" class="btn btn-lg btn-primary px-9">Submit</button>
            </div>
        </form> --}}

       </section>

        <section class="col-md-6">

            <ul class="list-inline text-center mb-2">
                <li class="list-inline-item mr-0">
                <a href="#" class="text-dark  fs-18 px-4"><i class="fab fa-twitter"></i></a>
                </li>
                <li class="list-inline-item mr-0">
                <a href="#" class="text-dark fs-18 px-4 "><i class="fab fa-facebook-f"></i></a>
                </li>
                <li class="list-inline-item mr-0">
                <a href="#" class="text-dark fs-18 px-4 ">
                <i class="fab fa-instagram"></i>
                </a>
            </li>
          </ul>

        </section>

    </section>

</div>

</div>





</div>
</div>
</section>

</main>



@endsection