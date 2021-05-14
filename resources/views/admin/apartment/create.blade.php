@extends('admin/layouts.tempDashboard')

@section('content')

<script src="https://cdn.tiny.cloud/1/b74rmyycui208hhuxjbval8r94ka63ao0u1mzrpu7pcoxtqq/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
tinymce.init({
  selector: '#mytextarea1, #mytextarea2'
});
</script>

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

                            <h4 class="page-title text-center"><?= @$location->location; ?> Apartments</h4>
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

                    
                        <form method="post" action="{{ url('admin-apartment/store') }}" enctype="multipart/form-data">
                         @csrf

                        <input type="hidden" name="location_id" value="<?= @$location->id; ?>">
                        <input type="hidden" name="location_name" value="<?= @$location->location; ?>">

                         <div class="pl-0 row">

                            <div class="main-profile-overview col-md-6">
                          
                             <div class="col-md-12">
                            
                                 <div class="form-group">
                                    <label>Room Name</label>
                                    <input id="room_name" required name="room_name" class="form-control" type="text" placeholder="Studio apartment, Two bedroom Arpartment" >
                                 </div>
                           
                                 <div class="form-group">
                                    <label id="summary_text">Summary Description</label>
                                    <textarea id="mytextarea1" name="summary_text"  id="summary_text" class="form-control" rows="6"></textarea>
                                 </div>

                                 <div class="form-group">
                                    <label>Free Cancellation</label><br>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" value="1" id="free_cancellation1" name="free_cancellation" class="custom-control-input">
                                        <label class="custom-control-label" for="free_cancellation1">YES</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" value="0" id="free_cancellation2" name="free_cancellation" class="custom-control-input">
                                        <label class="custom-control-label" for="free_cancellation2">NO</label>
                                    </div>
                                 </div>

                                 <div class="form-group">
                                    <label>Total Guest</label>
                                    <input required id="total_guest_capacity" name="total_guest_capacity"  class="form-control" min="0" type="number">
                                 </div>

                                 <div class="form-group">
                                    <label>Total Bathroom</label>
                                    <input required id="total_bathrooms" name="total_bathrooms"  class="form-control" min="0" type="number">
                                 </div>

                                 <div class="form-group">
                                    <label>Total Rooms</label>
                                    <input required id="num_of_rooms" name="num_of_rooms"  class="form-control" min="0" type="number">
                                 </div>

                                 <div class="form-group">
                                    <label>
                                       Add Bed
                                      <a href="javascript:void"><i onclick="Addbed()" class="fa fa-plus-circle fa-1x pull-right"></i></a>
                                    </label>
                                    <input required id="bed_name" name="bed_name[]"  class="form-control" type="text" placeholder="Eg. 1 Queen bed">
                                    <div id="bedType"></div>
                                </div>

                             

                             </div>

                            </div>

                            <div class="main-profile-overview col-md-6">
    
                               <div class="col-md-12"><br>

                                <div class="form-group">
                                    <label>
                                       Price Per Guest
                                      <a href="javascript:void"><i onclick="AddPrice()" class="fa fa-plus-circle fa-1x pull-right"></i></a>
                                    </label>
                                    <div id="PriceBody"></div>
                                </div>

                                
                                <div class="form-group">
                                    <label>Discount ( for 3 or more nights)</label>
                                    <input required id="discount" name="discount" value="0"  class="form-control" min="0" type="number">
                                 </div>


                                <div class="form-group">

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

                                <div class="form-group">
                                    <label>Featured Image</label>
                                    <input type="file"   class="form-control" name="featured_image" accept="image/x-png,image/gif,image/jpeg,image/jpg">
                                    <?php 
                                    if(!empty($info->featured_image)): ?>
                                     <a href="{{asset("storage/".$info->featured_image)}}" target="_bank">
                                    <img src="{{asset("storage/".$info->featured_image)}}" width="100" class="rounded" alt="..." accept="image/x-png,image/gif,image/jpeg,image/jpg">
                                     </a>
                                     <a href="{{url("admin-location/delete/".$info->id."?type=featured_image&path=".$info->featured_image)}}">Delete</a>
                                    <?php endif; ?>
                                   </div>

                                <div class="form-group">
                                    <label>Room Images</label>
                                    <input type="file" multiple="" class="form-control" name="images_paths[]">
                                    <?php  if(!empty($info->images_paths)): ?>
                                    <?php  $images_paths = json_decode($info->images_paths,true); ?>
                                    <?php foreach($images_paths as $item): ?>
                                    <a href="{{asset("storage/".$item)}}" target="_bank">
                                        <img src="{{asset("storage/".$item)}}" width="100" class="rounded" alt="..." accept="image/x-png,image/gif,image/jpeg,image/jpg">
                                    </a>
                                     <br>
                                    <a href="{{url("admin-location/delete/".$info->id."?type=images_paths&path=".$item)}}">Delete
                                    </a>
                                    <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>


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

