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
                        <h4 class="page-title text-center">Booking List</h4>
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
                                <th>Booking #</th>
                                <th>Check In</th>
                                <th>Check Out</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th class="text-center">Status</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if(!empty($list)): $x=1; ?>
                            <?php foreach($list as $item): ?>
                            <tr>
                                <td style="border-left:5px solid green"><?= $x++; ?></td>
                                <td><label class="badge badge-danger"><?= $item->order_no; ?></label></td>
                                <td><?= date('l d F Y', strtotime($item->check_in));; ?></td>
                                <td><?= date('l d F Y', strtotime($item->check_out)); ?></td>
                                <td><?= @$item->first_name ?></td>
                                <td><?= @$item->last_name; ?></td>
                                <td class="text-center"><?= @$item->status; ?></td>
                                {{-- <td class="text-center"> 
                                    <div class="dropdown">
                                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Dropdown link
                                        </a>
                    
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                          <a class="dropdown-item" href="#">Action</a>
                                          <a class="dropdown-item" href="#">Another action</a>
                                          <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                      </div>
                                </td> --}}
                                <td>
                                    <a href="#" class="btn btn-sm btn-success">View</a>
                                </td>
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

