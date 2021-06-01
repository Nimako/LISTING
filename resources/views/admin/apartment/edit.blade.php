@extends('admin/layouts.tempDashboard')

@section('content')

<script src="https://cdn.tiny.cloud/1/b74rmyycui208hhuxjbval8r94ka63ao0u1mzrpu7pcoxtqq/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
tinymce.init({
  selector: '#mytextarea1, #mytextarea2'
});
</script>

<style>
.nav-item {
    border:rgb(234, 234, 240) solid 1px;
    padding:0 2em ;
    background-color: #eaf2fa;

}
.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #fff;
    background-color: #64b0f2;
}

.nav-pills .nav-link {
    border-radius: 0px;
}
</style>

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
                        <h5 class="page-title">

                            <h4 class="page-title text-center"><?= @$room->room_name; ?></h4>
                        </h5>

                    </div>
                </div>
            </div>     
            <!-- end page title --> 

            <div class="row row-sm">

                @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

                <div class="col-lg-12">
                   <div class="card mg-b-20">
                      <div class="card-body">

                          <form method="post" action="{{ url('admin-apartment/update') }}" enctype="multipart/form-data">
                          @csrf
   
                           <input type="hidden" name="id" value="<?= @$room->uuid; ?>">
   
                           <input type="hidden" name="location_id" value="<?= @$room->location_id; ?>">
                           <input type="hidden" name="location_name" value="<?= @$location->location; ?>">

                           <ul class="nav nav-pills mb-3" id="pills-tab"" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Details</a>
                            </li>
                            <li class="nav-item" role="presentation">
                              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Pricing</a>
                            </li>
                            <li class="nav-item" role="presentation">
                              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Room Images</a>
                            </li>
                          </ul>

                          <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <!--- -------------------------------------------------------------------------------------->
                                
                         <div class="pl-0 row">

                             <div class="col-md-6">
                            
                                 <div class="form-group">
                                    <label>Room Name</label>
                                    <input id="room_name" required name="room_name" class="form-control" value="<?= @$room->room_name; ?>" type="text" placeholder="Studio apartment, Two bedroom Arpartment" >
                                 </div>
                           
                                 <div class="form-group">
                                    <label id="summary_text">Summary Description</label>
                                    <textarea id="mytextarea1" name="summary_text"  id="summary_text" class="form-control" rows="6"><?= @$room->summary_text; ?></textarea>
                                 </div>

                                 <div class="form-group">
                                    <label>Free Cancellation</label><br>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" value="1" <?= @$room->free_cancellation==1?"checked":null; ?> id="free_cancellation1" name="free_cancellation" class="custom-control-input">
                                        <label class="custom-control-label" for="free_cancellation1">YES</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" value="0" <?= @$room->free_cancellation==1?"checked":null; ?>  id="free_cancellation2" name="free_cancellation" class="custom-control-input">
                                        <label class="custom-control-label" for="free_cancellation2">NO</label>
                                    </div>
                                 </div>

                                 <div class="form-group">
                                    <label>Total Guest</label>
                                    <input required id="total_guest_capacity" value="<?= @$room->total_guest_capacity; ?>" name="total_guest_capacity"  class="form-control" min="0" type="number">
                                 </div><br><br>
                            </div>

                               <section class="col-md-6">

                                 <div class="form-group">
                                    <label>Total Bathroom</label>
                                    <input required id="total_bathrooms" value="<?= @$room->total_bathrooms; ?>" name="total_bathrooms"  class="form-control" min="0" type="number">
                                 </div>

                                 <div class="form-group">
                                    <label>Total Rooms</label>
                                    <input required id="num_of_rooms" value="<?= @$room->num_of_rooms; ?>" name="num_of_rooms"  class="form-control" min="0" type="number">
                                 </div>

                                 <div class="form-group">
                                    <label>
                                       Add Bed
                                      <a href="javascript:void"><i onclick="Addbed()" class="fa fa-plus-circle fa-1x pull-right"></i></a>
                                    </label>
                                    <?php if(!empty($room->bed_name)):
                                      $bed_name = json_decode($room->bed_name);
                                    ?>
                                    <?php foreach($bed_name as $bed): ?>
                                        <input required id="bed_name" value="<?= $bed; ?>" name="bed_name[]"  class="form-control mt-1" type="text">
                                        <a  href="{{url("admin-apartment/delete-bed/".$room->id."?type=bed&path=".$bed)}}">
                                         <i class="fa fa-minus-circle fa-1x pull-right">Remove</i>
                                        </a>
                                    <?php endforeach; ?>   
                                    <?php endif; ?> <br><br>

                                    <input required id="bed_name" name="bed_name[]"  class="form-control" type="text" placeholder="Eg. 1 Queen bed">
                                    <div id="bedType"></div>
                                </div>

                                <div class="form-group">
                                    <label>Amenities (crt + mounse click to select)</label>
                                    <select class="form-control amenities" name="amenities[]" multiple="multiple">
                                            <?php if(!empty($amenities)): ?>
                                            <?php foreach($amenities as $item): ?>
                                            <option value="<?= trim($item->name); ?>"><?= $item->name; ?></option>  
                                            <?php endforeach; ?>   
                                            <?php endif; ?>                     
                                    </select>
                                </div>

                            </section>



 
                             </div>

                        
                                <!--- -------------------------------------------------------------------------------------->

                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                            <!--- -----------------------PRICING------------------------------------------>

                            <div class="pl-0 row">

                                <section class="col-md-6">

                                    <div class="form-group">
                                        <label>
                                           Price Per Guest ($)
                                          <a href="javascript:void"><i onclick="AddPrice()" class="fa fa-plus-circle fa-1x pull-right"></i></a>
                                        </label>
                                        <div id="PriceBody"></div>
                                    </div>

                                    <?php if(!empty($pricing)): ?>
                                    <?php foreach($pricing as $price): ?>

                                    <section id="price1" class="form-row"> 
                                        <div class="col">
                                            <input required="" id="guest" name="guest[]" class="form-control mt-1" placeholder="Number of guest" value="<?= $price->guest; ?>" type="number" min="1">
                                        </div> 
                                        <div class="col">
                                            <input required="" id="price" value="<?= $price->price; ?>" name="price[]" placeholder="0.00" class="form-control mt-1" type="text"> 
                                            <div class="col">
                                                <a href="{{url('admin-apartment/delete-room-price/'.$price->id)}}"><i class="fa fa-minus-circle fa-1x pull-right">Remove</i></a>
                                            </div> 
                                        </div>
                                    </section>

                                    <?php endforeach; ?>
                                    <?php endif; ?>
                                     <br>
     
                                     <div class="form-group">
                                         <label>Discount($) ( for 3 or more nights)</label>
                                         <input required id="discount" value="<?= @$room->discount; ?>" name="discount" value="0"  class="form-control" min="0" type="number">
                                      </div><br>

     
                                </section>

                                <section class="col-md-6">

                                    <label class="text-danger">Additional Guest</label>
                                      
                                    <section  class="form-row"> 
                                       <div class="col">
                                           <label>Number of additional guest</label>
                                           <input required="" id="guest" value="<?= @explode("****",@$room->additional_guest)[0]; ?>" name="addition_guest" value="0" class="form-control mt-1" placeholder="Number of guest" type="number" min="1">
                                       </div>
                                           <div class="col">
                                               <label>Price per each guest ($)</label>
                                               <input required="" id="addition_guest_price" value="<?= @explode("****",@$room->additional_guest)[1]; ?>"  name="addition_guest_price" placeholder="0.00" class="form-control mt-1" type="text">                                              
                                       </div>
                                    </section><br><br>
                                </section>                                
                            </div>


                             <!--- -------------------------------------------------------------------------->

                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

                            <!--- -----------------------PRICING------------------------------------------>

                                <div class="pl-0 row">

                                    <section class="col-md-6"><br>

                                        <div class="form-group">
                                            <label>Featured Image (1200 x 800)</label>
                                            <input type="file"   class="form-control" name="featured_image" accept="image/x-png,image/gif,image/jpeg,image/jpg"><br>

                                            <?php 
                                            if(!empty($room->featured_image)): ?>
                                             <a href="{{asset("storage/".$room->featured_image)}}" target="_bank">
                                            <img src="{{asset("storage/".$room->featured_image)}}" width="100" class="rounded" alt="..." accept="image/x-png,image/gif,image/jpeg,image/jpg">
                                             </a>
                                             <a href="{{url("admin-apartment/delete/".$room->id."?type=featured_image&path=".$room->featured_image)}}">Delete</a>
                                            <?php endif; ?>
                                        </div>



                                    </section>
        
                                    <section class="col-md-6">

                                        <div class="form-group"><br>
                                            <label>Room Images  (1200 x 800)</label>
                                            <input type="file" multiple="" class="form-control" name="images_paths[]"><br>

                                            <center>
                                                <?php if(!empty($room->images_paths)): ?>
                                                <?php  $images_paths = json_decode($room->images_paths,true); ?>
                                                <?php foreach($images_paths as $item): ?>
                                                 <a href="{{asset("storage/".$item)}}" target="_bank">
                                                    <img src="{{asset("storage/".$item)}}" width="100" class="rounded" alt="..." accept="image/x-png,image/gif,image/jpeg,image/jpg">
                                                  </a>
                                                    <a href="{{url("admin-apartment/delete/".$room->id."?type=images_paths&path=".$item)}}">Delete
                                                    </a><br>
                                                <?php endforeach; ?>
                                                <?php endif; ?> <br>
                                            </center>
                                            
                                        </div>

                                     </section>
                                </div>

                            </div>
                          </div>

                          <button type="reset" class="btn btn-danger btn-md float-right" >Rest</button>

                          <?php if(!empty($info)): ?>
                          <button type="submit" class="btn btn-success btn-md">Save Changes</button>
                          <?php else: ?>
                          <button type="submit" class="btn btn-success btn-md">Save</button>
                          <?php endif; ?>
                       
                        </form>
                      </div>
                      </div>
                   </div>

                   {{-- <div class="card mg-b-20">
                    <div class="card-body">
                       <div class="pl-0">
                           

                       </div>
                    </div>
                   </div> --}}
                </div>

             
             </div>
             

           
        </div>
    </div>
</div>

 <script>

     var counter = 1;
     function Addbed(){

         $("#bedType").append('<div id="bedtype'+counter+'"> <input required id="bed_name" name="bed_name[]"  class="form-control mt-1" type="text"><a onclick="RemoveBed('+counter+')" href="javascript:void"><i class="fa fa-minus-circle fa-1x pull-right">Remove</i></a></div>');
        
        counter++;
      }

      function RemoveBed(id){
         $("#bedtype"+id).remove();
      }

      var counterr = 1;
     function AddPrice(){

         $("#PriceBody").append('<section id="price'+counterr+'" class="form-row"> <div class="col"><input required id="guest" name="guest[]"  class="form-control mt-1" placeholder="Number of guest" type="number" min="1"></div> <idv class="col"><input required id="bed_name" name="price[]" placeholder="0.00" class="form-control mt-1" type="text"></div> <div class="col"><a onclick="RemovePrice('+counterr+')" href="javascript:void"><i class="fa fa-minus-circle fa-1x pull-right">Remove</i></a></div> </section>');
        
        counter++;
      }

      function RemovePrice(id){
         $("#price"+id).remove();
      }
 </script>


 @endsection


