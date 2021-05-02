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

                             <span class="text-danger ml-5">New Location</span>                            
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

                    

                        <?php if(!empty($info)): ?>
                        <form method="post" action="{{ url('admin-location/update') }}" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= @$info->uuid; ?>">
                        <?php else: ?>
                        <form method="post" action="{{ url('admin-location/store') }}" enctype="multipart/form-data">
                        <?php endif; ?>


                            @csrf
                            
                         <div class="pl-0 row">

                            <div class="main-profile-overview col-md-6">
                          
                             <div class="col-md-12">
                                 <label>Location</label>
                                 <select name="location"  class="form-control" required>
                                     <?php if(!empty($locationList)): ?>
                                     <option value="">select</option>
                                     <?php foreach($locationList as $item): ?>
                                       <option <?= @$info->location==$item?"selected":null; ?> value="<?= $item; ?>"><?= $item; ?></option>
                                     <?php endforeach; ?>
                                     <?php endif; ?>
                                 </select><br>

                                 <div class="form-group">
                                    <label>Apartment Name</label>
                                    <input id="apartmentName" name="apartmentName" value="<?= @$info->apartmentName; ?>" class="form-control" type="text" >
                                 </div>
                           
                                 <label>Heading</label>
                                 <input type="text" name="heading" value="<?= @$info->heading; ?>" class="form-control"><br>


                                 <div class="form-group">
                                    <label id="description">Description</label>
                                    <textarea id="mytextarea1" name="description"  id="description" class="form-control" rows="3"><?= @$info->description; ?></textarea>
                                 </div>

                                 <div class="form-group">
                                    <label id="thingToDo">Location Facilities(Things-to-do)</label>
                                    <textarea id="mytextarea2" name="thingToDo" value="<?= @$info->thingToDo; ?>" id="thingToDo" class="form-control" rows="3"><?= @$info->thingToDo; ?></textarea>
                                 </div>

                             </div>

                            </div>

                            <div class="main-profile-overview col-md-6">
    
                               <div class="col-md-12"><br>

                                <div class="form-group">
                                    <label>Featured Image</label>
                                    <input type="file" multiple=""  class="form-control" name="featuredImage" accept="image/x-png,image/gif,image/jpeg,image/jpg">
                                    <?php 
                                    if(!empty($info->featuredImage)): ?>
                                     <a href="{{asset("storage/".$info->featuredImage)}}" target="_bank">
                                    <img src="{{asset("storage/".$info->featuredImage)}}" width="100" class="rounded" alt="..." accept="image/x-png,image/gif,image/jpeg,image/jpg">
                                     </a>
                                     <a href="{{url("admin-location/delete/".$info->id."?type=featuredImage&path=".$info->featuredImage)}}">Delete</a>
                                    <?php endif; ?>
                                   </div>

                                <div class="form-group">
                                 <label>Banner Image</label>
                                 <input type="file" multiple=""  class="form-control" name="bannerImage" accept="image/x-png,image/gif,image/jpeg,image/jpg">
                                 <?php 
                                 if(!empty($info->bannerImage)): ?>
                                  <a href="{{asset("storage/".$info->bannerImage)}}" target="_bank">
                                 <img src="{{asset("storage/".$info->bannerImage)}}" width="100" class="rounded" alt="..." accept="image/x-png,image/gif,image/jpeg,image/jpg">
                                  </a>
                                  <a href="{{url("admin-location/delete/".$info->id."?type=bannerImage&path=".$info->bannerImage)}}">Delete</a>
                                 <?php endif; ?>
                                </div>
                                 
                                <div class="form-group">
                                <label>Location Image</label>
                                <input type="file" multiple="" class="form-control" name="locationImages[]">

                                 <?php  if(!empty($info->locationImages)): ?>
                                 <?php  $locationImages = json_decode($info->locationImages,true); ?>
                                  <?php foreach($locationImages as $item): ?>
                                   <a href="{{asset("storage/".$item)}}" target="_bank">
                                       <img src="{{asset("storage/".$item)}}" width="100" class="rounded" alt="..." accept="image/x-png,image/gif,image/jpeg,image/jpg"></a>
                                       <a href="{{url("admin-location/delete/".$info->id."?type=locationImages&path=".$item)}}">Delete
                                    </a>
                                 <?php endforeach; ?>
                                 <?php endif; ?>
                                </div>

                                <div class="form-group">
                                <label>Attraction Image</label>
                                <input type="file" multiple="" class="form-control" name="attractionImages[]" accept="image/x-png,image/gif,image/jpeg,image/jpg">

                                <?php  if(!empty($info->attractionImages)): ?>
                                <?php  $attractionImages = json_decode($info->attractionImages,true); ?>
                                 <?php foreach($attractionImages as $item): ?>
                                  <a href="{{asset("storage/".$item)}}" target="_bank">
                                      <img src="{{asset("storage/".$item)}}" width="100" class="rounded" alt="..." accept="image/x-png,image/gif,image/jpeg,image/jpg"></a>
                                      <a href="{{url("admin-location/delete/".$info->id."?type=attractionImages&path=".$item)}}">Delete
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

 


 @endsection

