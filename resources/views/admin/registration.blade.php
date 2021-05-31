@extends('admin/layouts.tempDashboard')
@section('content')


        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <div class="content">
                

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        
                        <div class="page-title-box">

                            <h4 class="page-title">User Management</h4>

                            @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                            </div>
                            @endif

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            


                        </div>

                    </div>
                </div>
                <!-- end row -->

                <div class="row">

                    <div class="col-md-12">
                      <a class="btn btn-md btn-primary float-right" href="{{url("registration")}}">Add new user</a><br>
                    </div>


                    <div class="col-md-12">

                        

                        <div class="card-box">
                        <h4 class="m-t-0 header-title"></h4>
                        <?php if(empty($info)): ?>
                        <form action="{{url('post-registration')}}" method="POST" id="regForm">
                        <?php else: ?>
                        <form action="{{url('update-registration')}}" method="POST" id="regForm">
                        <?php endif; ?>
                        {{ csrf_field() }}
                       <section class="row">

                        <div class="col-md-6">

                            <p style="font-size:1.2em;">Personal Details</p>



                            <div class="form-label-group">
                                <input type="text" id="inputName" value="<?= !empty($info)?$info->fullname:null; ?>" required="" name="fullname" class="form-control" placeholder="Full name" autofocus>

                                @if ($errors->has('fullname'))
                                <span class="error">{{ $errors->first('fullname') }}</span>
                                @endif
                            </div><br>

                            <div class="form-label-group">
                                <input type="email" name="email" value="<?= !empty($info)?$info->email:null; ?>"  id="inputEmail" class="form-control" placeholder="Email address" >
    
                                @if ($errors->has('email'))
                                <span class="error">{{ $errors->first('email') }}</span>
                                @endif
                            </div><br> 
                            

                            <?php if(!empty($info)): ?>
                            <input type="hidden" name="user_id" value="<?= ($info->id); ?>">
                         <?php endif; ?>
                         




                        </div>

                        <div class="col-md-6">

                            <p style="font-size:1.2em"> Credentials</p>

                            <div class="form-label-group">
                                <input type="text" id="inputName" value="<?= !empty($info)?$info->username:null; ?>" required="" name="username" class="form-control" placeholder="Username" autofocus>
   
                                @if ($errors->has('username'))
                                <span class="error">{{ $errors->first('username') }}</span>
                                @endif
                            </div><br>
   
                                                
                            <div class="form-label-group">
                               <input type="password" name="password"  <?= empty($info)?"required=''":null; ?> id="inputPassword" class="form-control" placeholder="Password" >
   
                               @if ($errors->has('password'))
                               <span class="error">{{ $errors->first('password') }}</span>
                               @endif
                           </div><br>


                            <br>
                        </div>

                        <div class="col-md-12">
                        <center><br>
                        <button class="btn btn-md btn-primary btn-login text-center text-uppercase font-weight-bold mb-2" type="submit">SUBMIT</button>
                        </center>

                        <hr>
                         <section class="table-responsive">
                         <table id="datatable" class="table  table-striped table-bordered  nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th></th>
                            </tr>
                            </thead>
                             <?php if(!empty($list)): ?>
                                <?php foreach ($list as $row): ?>
                                 <tr style="cursor:pointer" onclick="window.location='{{url('user-edit/'.$row->id)}}'">
                                  <td><?= $row->id; ?></td>
                                  <td><?= $row->fullname; ?></td>
                                  <td><?= $row->username; ?></td>
                                  <td><?= $row->email; ?></td>
                                  <td class="text-center">
                                    <a href="{{url('user-edit/'.$row->id) }}" class="btn btn-success btn-sm">EDIT</a>
                                      <a href="{{url('delete-registration/'. $row->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want perform this action.This action can not undo if you proceed');">DELETE</a>
                                    </td>
                                 </tr>
                            <?php endforeach; ?>
                            <?php endif; ?>
                            <tbody>
                            </tbody>
                        </table>
                         </section>

                       </div>

                       </section>
                    </form>
                     </div>
                    </div>

                </div>
                <!-- end row -->

            </div> <!-- container -->

        </div> <!-- End wrapper -->

        <script>
            function GetUserType(value){
        
                if(value == "ATTENDANT"){

                    $(".acumatica_SalespersonID").hide();
                    $("#acumatica_SalespersonID").attr("required","required");
        
                }else{
                    $(".acumatica_SalespersonID").show();
                    $("#acumatica_SalespersonID").removeAttr("required");
                }
            }
        </script>

@endsection


