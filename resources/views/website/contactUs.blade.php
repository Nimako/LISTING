@extends('website/layouts.tempMain')
@section('content')   


<main id="content">
<section class="bg-secondary">
<div class="container">


</div>
</section>


<section><br>

<div class="container">
<div class="card border-0 mt-n13 z-index-3 pb-8 pt-10">

<div class="card-body p-0"><br>
    <h2 class="text-heading mb-2 fs-22 fs-md-32 text-center lh-16">We're always eager to hear from
    you!</h2>
    <p class="text-center mxw-670 mb-8">
        Do you have anything on your mind?<br>
        Please don't hesitate to get in touch with us via the contact form.
    </p>
    {{-- <form class="mxw-751 px-md-5" action="{{url("contact-us-post")}}" method="POST"> --}}
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
    {{-- </form> --}}
</div>

</div>
<div class="row mb-12">
<div class="col-md-4 mb-6">
<div class="card border-0">
<div class="media align-items-end">
<span class="text-primary fs-40 lh-1 d-inline-block mr-3">
<svg class="icon icon-f1"><use xlink:href="#icon-f1"></use></svg>
</span>
<div class="media-body">
<h4 class="text-left">Get in  touch</h4>
</div>
</div>
<div class="card-body  pt-3 pb-0">
<p class="card-text mb-0">Address. Ghana Accra</p>
<a href="tel:" class="d-block text-heading lh-2 hover-primary text-decoration-none">
    +233 2436377847</a>
<a href="mailto:contact.info@staylug.com" class="d-block text-body hover-primary text-decoration-none">
    contact.info@staylug.com</a>
</div>
</div>
</div>

<div class="col-md-4 mb-6">
<div class="card border-0">
<div class="media align-items-end">
<span class="text-primary fs-40 lh-1 d-inline-block mr-3">
<svg class="icon icon-f2"><use xlink:href="#icon-f2"></use></svg>
</span>
<div class="media-body">
{{-- <h4 class="fs-22 lh-15 mb-0 text-heading">New York</h4> --}}
</div>
</div>
<div class="card-body">
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
</div>
</div>
</div>



</div>
</div>
</section>

</main>



@endsection