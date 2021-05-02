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
                        <h5 class="page-title">
                            <span><?= !empty($info)?$info->name:null; ?></span>
                             <span class="text-danger ml-5">REGISTERED ON:</span><span><small> <?= date("d M Y", strtotime($info->created_at)); ?>| </small></span>

                             <span class="text-danger ml-5">ACCOUNT TYPE:</span><span><small> INDIVIDUAL </small></span>                            
                        </h5>

                    </div>
                </div>
            </div>     
            <!-- end page title --> 

            <div class="row row-sm">
                <div class="col-lg-4">
                   <div class="card mg-b-20">
                      <div class="card-body">
                         <div class="pl-0">
                            <div class="main-profile-overview">
                              
                               <div class="d-flex justify-content-between mg-b-20">
                                  <div>
                                     <h3 class="main-profile-name"><?= @$info->firstName." ".$info->middleName." ".$info->surname; ?></h3>

                                     <p class="h6 text-black"><b>EMAIL: <?= $info->email ?> </b></p>
                                  </div>
                               </div>
                               
                               <hr class="mg-y-30">

                             <div class="col-md-12">
                                  <label>First name</label>
                                 <input type="text" value="<?= @$info->firstName; ?>" class="form-control"><br>

                                 <label>Middle name</label>
                                 <input type="text" value="<?= @$info->middleName; ?>" class="form-control"><br>

                                 <label>Last name</label>
                                 <input type="text" value="<?= @$info->surname; ?>" class="form-control"><br>

                                 <label>Mobile name</label>
                                 <input type="text" value="<?= @$info->phoneNum; ?>" class="form-control"><br>

                                 <label>Email</label>
                                 <input type="text" value="<?= @$info->email; ?>" class="form-control"><br>

                                 <label>Date of Birth</label>
                                 <input type="text" value="<?= @$info->dob; ?>" class="form-control"><br>

                                 <label>Gender</label>
                                 <input type="text" value="<?= @$info->gender; ?>" class="form-control"><br>

                                 <label>Address</label>
                                 <input type="text" value="<?= @$info->addressLine1; ?>" placeholder="Address Line 1" class="form-control"><br>

                                 <input type="text" value="<?= @$info->addressLine2; ?>" placeholder="Address Line 2" class="form-control"><br>

                                 <input type="text" value="<?= @$info->city; ?>" placeholder="City" class="form-control"><br>

                                 <input type="text" value="<?= @$info->region; ?>" placeholder="Region/State/Province" class="form-control"><br>

                                 <input type="text" value="<?= @$info->postCode; ?>" placeholder="Post Code" class="form-control"><br>

                                 <input type="text" disabled value="<?= @$info->status; ?>" class="form-control"><br>

                                 <button type="submit" class="btn btn-success btn-md" disabled>Save Changes</button>

                                 <button type="reset" class="btn btn-danger btn-md float-right" disabled>Rest</button>

                             </div>

                            </div>
                            <!-- main-profile-overview --> 
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

                <div class="col-lg-8">
                   <div class="row row-sm">

                    <div class="col-md-4">
                        <div class="card-box tilebox-one">
                            <i class="icon-layers float-right m-0 h2 text-muted"></i>
                            <h6 class="text-muted text-uppercase mt-0">Account Balance</h6>
                            <h3 class="my-3" data-plugin="counterup">USD 0.0000</h3>
                        </div>
                    </div>
                  
                    <div class="col-md-4">
                        <div class="card-box tilebox-one">
                            <i class="icon-layers float-right m-0 h2 text-muted"></i>
                            <h6 class="text-muted text-uppercase mt-0">Total Debited Amount</h6>
                            <h3 class="my-3" data-plugin="counterup">USD 0.0000</h3>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card-box tilebox-one">
                            <i class="icon-layers float-right m-0 h2 text-muted"></i>
                            <h6 class="text-muted text-uppercase mt-0">Total Credited Amount</h6>
                            <h3 class="my-3" data-plugin="counterup">USD 0.0000</h3>
                        </div>
                    </div>

                   </div>
                   <div class="card">
                      <div class="card-body">

                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Sent Transaction</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Recieved Transaction</a>
                            </li>
                          </ul>
                          <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Sender</th>
                                        <th>Recipient</th>
                                        <th>Amount</th>
                                        <th>Fee</th>
                                        <th>Transaction ID</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Sender</th>
                                        <th>Recipient</th>
                                        <th>Amount</th>
                                        <th>Fee</th>
                                        <th>Transaction ID</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                          </div>
                       
                      </div>
                   </div>
                </div>
             </div>
             

           
        </div>
    </div>
</div>

 


 @endsection

