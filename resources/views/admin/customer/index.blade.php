@extends('layouts.tempDashboard')
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
                        <h4 class="page-title">Customers List</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        {{-- <h4 class="header-title">Default Example</h4> --}}
                      
                        <table id="datatable" class="table dt-responsive nowrap table-bordered table-hover" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Full Name</th>
                                <th>Country</th>
                                <th>Email</th>
                                <th>Mobile No.</th>
                                <th>Date Created</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if(!empty($list)): $x=1; ?>
                            <?php foreach($list as $item): ?>
                            <tr>
                                <td><?= $x++; ?></td>
                                <td><?= $item->firstName." ".$item->middleName." ".$item->surname; ?></td>
                                <td><?= $item->CountryCode; ?></td>
                                <td><?= $item->email; ?></td>
                                <td><?= $item->phoneNum; ?></td>
                                <td><?= date("d M Y", strtotime($item->created_at)); ?></td>
                                <td><?= $item->status; ?></td>
                                <th class="text-center"><a class="btn btn-success btn-sm" href="{{url('location/detail/'.$item->uuid)}}">View</a></th>
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

