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
                        <h4 class="page-title">Location List</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

            <div class="row">

                <div class="col-12">
                    <a href="{{url('admin-location/create')}}" class="btn btn-primary btn-md float-right mb-2">Add New</a>
                </div>


                <div class="col-12">

                    <div class="card-box">

                        {{-- <h4 class="header-title">Default Example</h4> --}}
                      
                        <table id="datatable" class="table dt-responsive nowrap table-bordered table-hover" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Location</th>
                                <th>Apartment Name</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if(!empty($list)): $x=1; ?>
                            <?php foreach($list as $item): ?>
                            <tr>
                                <td><?= $x++; ?></td>
                                <td><?= $item->location; ?></td>
                                <td><?= $item->apartmentName; ?></td>
                                <th class="text-center">
                                    <a class="btn btn-danger btn-sm" href="{{url("admin-apartment/index/".$item->uuid)}}">View Rooms</a>
                                    <a class="btn btn-primary btn-sm" href="{{url('admin-apartment/create/'.$item->uuid)}}">Add Rooms</a>
                                    <a class="btn btn-success btn-sm" href="{{url('admin-location/detail/'.$item->uuid)}}">View</a>
                                </th>
                            </tr>
                            <?php endforeach; ?>
                            <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

 @endsection

