<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8" />
        <title>STAY-LUG</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Responsive bootstrap 4 admin template" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico')}}">

          <!-- Table datatable css -->
          <link href="{{ asset('assets/libs/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        
          <link href="{{ asset('assets/libs/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
          <link href="{{ asset('assets/libs/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
          <link href="{{ asset('assets/libs/datatables/select.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

     
                  <!-- Plugins css -->
        <link href="{{ asset('assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.css')}}" rel="stylesheet" />
        <link href="{{ asset('assets/libs/switchery/switchery.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/libs/multiselect/multi-select.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
  
        <!-- App css -->
        <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="{{ asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css"  id="app-stylesheet" />
        <style>
        .left-side-menu {
             background: #fff;
        }
        #sidebar-menu>ul>li>a {
             color: #343A40;
             font-weight: bold
         }
         .navbar-custom {
             background-image: linear-gradient(to left, #fff 0%, #fff 100%) !important;
         }
         .logo-box {
             background-color: #fff;
         }
         #sidebar-menu>ul>li>a:active, #sidebar-menu>ul>li>a:focus, #sidebar-menu>ul>li>a:hover {
             color: #343A40;
             text-decoration: none;
             font-weight: bolder
         }
         .nav-second-level li a, .nav-thrid-level li a {
             color: #343A40;
        }
         
         #sidebar-menu .menu-title {
             color: #ffffffc5;
         }
         .logo .logo-lg-text-dark {
             color: #343A40;
             text-transform:capitalize;
             font-size:30px;
         }
         .navbar-custom .topnav-menu .nav-link {
             padding: 0 15px;
             color: #343A40;
         }
         
         </style>
    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            @include('admin/layouts.menu')
            @yield('content')
            
        </div>
        <!-- END wrapper -->

       
        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="{{ asset('assets/js/vendor.min.js')}}"></script>

        <!--Morris Chart-->
        <script src="{{ asset('assets/morris-js/morris.min.js')}}"></script>
        <script src="{{ asset('assets/raphael/raphael.min.js')}}"></script>

                <!-- Datatable plugin js -->
        <script src="{{ asset('assets/libs/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{ asset('assets/libs/datatables/dataTables.bootstrap4.min.js')}}"></script>

        <script src="{{ asset('assets/libs/datatables/dataTables.responsive.min.js')}}"></script>
        <script src="{{ asset('assets/libs/datatables/responsive.bootstrap4.min.js')}}"></script>

        <script src="{{ asset('assets/libs/datatables/dataTables.buttons.min.js')}}"></script>
        <script src="{{ asset('assets/libs/datatables/buttons.bootstrap4.min.js')}}"></script>

        <script src="{{ asset('assets/libs/jszip/jszip.min.js')}}"></script>
        <script src="{{ asset('assets/libs/pdfmake/pdfmake.min.js')}}"></script>
        <script src="{{ asset('assets/libs/pdfmake/vfs_fonts.js')}}"></script>

        <script src="{{ asset('assets/libs/datatables/buttons.html5.min.js')}}"></script>
        <script src="{{ asset('assets/libs/datatables/buttons.print.min.js')}}"></script>

        <script src="{{ asset('assets/libs/datatables/dataTables.keyTable.min.js')}}"></script>
        <script src="{{ asset('assets/libs/datatables/dataTables.select.min.js')}}"></script>

        <!-- Datatables init -->
        <script src="{{ asset('assets/js/pages/datatables.init.js')}}"></script>

        <script src="{{ asset('assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js')}}"></script>
        <script src="{{ asset('assets/libs/switchery/switchery.min.js')}}"></script>
        <script src="{{ asset('assets/libs/jquery-quicksearch/jquery.quicksearch.min.js')}}"></script>
        <script src="{{ asset('assets/libs/select2/select2.min.js')}}"></script>
        <script src="{{ asset('assets/libs/jquery-mockjax/jquery.mockjax.min.js')}}"></script>
        <script src="{{ asset('assets/libs/autocomplete/jquery.autocomplete.min.js')}}"></script>
        <script src="{{ asset('assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
        <script src="{{ asset('assets/libs/multiselect/jquery.multi-select.js')}}"></script>
        <script src="{{ asset('assets/libs/select2/select2.min.js')}}"></script>        

        <!-- form advanced init -->
        <script src="{{ asset('assets/js/pages/form-advanced.init.js')}}"></script>

        <!-- App js -->
        <script src="{{ asset('assets/js/app.min.js')}}"></script>
        <script>
            $(document).ready( function () {   
                 $('#datatable').DataTable(); 

                 $(".amenities").select2();
                 
                 } );

        </script>
    </body>

</html>
