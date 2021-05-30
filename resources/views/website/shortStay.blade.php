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
    <h2 class="text-heading mb-2 fs-22 fs-md-32 text-center lh-16">Short Term Apartment Stay</h2>
    <p class="text-center mxw-670 mb-8">
        From Daily Booking To A Month Stay<br>
        Click on the Apartment Image Below to Book
    </p>

    <div class="row">
    <?php if(!empty($list)): ?>
    <?php foreach($list as $item): ?>
        <div class="col-md-3">
            <p class="h3 text-center"><?= Str::ucfirst($item->location); ?></p>
            <a style="cursor: pointer" href="{{url($item->slug.'/rooms')}}">
             <?php if(!empty($item->featuredImage)): ?>
             <img style="cursor: pointer" src="{{'storage/'.$item->featuredImage}}" width="300" height="350" alt="<?= Str::ucfirst($item->location); ?>">
             <?php else: ?>
               <img style="cursor: pointer" src="{{asset('assets/images/featuredlocationDefault.jpg')}}" width="300" height="350" alt="<?= Str::ucfirst($item->location); ?>">
             <?php endif; ?>
            </a>
        </div>
    <?php endforeach; ?>
    <?php endif; ?>


    </div>

  
</div>

</div>


</div>
</section>

</main>



@endsection