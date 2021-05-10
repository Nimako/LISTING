<!doctype html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Cedi Pay, Mobile Money, Online Payment">
  <meta name="author" content="Cedi Pay">

  <!-- App Favicon -->
  <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico')}}">

  <!-- App title -->
  <title>...</title>

  <!-- Bootstrap CSS -->
  <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" />

  <!-- App css -->
  <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
  <link href="{{ asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css"  id="app-stylesheet" />



  <style>
    .account-pages {
      /* background: linear-gradient(to right, #128cbd 0%, #00AE9C 100%); */
      /* background-image: linear-gradient(to right, rgba(94, 154, 221, 0), rgb(22, 156, 209)); */
      background-image: linear-gradient(to left, #127CE7 0%, #2b90f5 100%) !important;
}
    }
  </style>

</head>


<body>

  <div class="account-pages"></div>
  <div class="clearfix"></div>
  <div class="wrapper-page">

    <div class="account-bg">
      <div class="card-box  mb-0" style="border:none;">
        <div class="text-center m-t-20">
          <!--<img src="{{ asset('lib/assets/images/logo.jpg') }}" width="90">-->
           {{-- <h3 style="color:#00AE9C">Staylug</h3> --}}
        </div>
        <div class="m-t-10 p-20">
          <div class="row">
            <div class="col-12 text-center">
              <h6 class="text-muted text-uppercase m-b-0 m-t-0">Sign In</h6>
            </div>
          </div>

             <form action="{{url('post-login')}}" method="POST" id="logForm">

                     @if ($message = Session::get('success'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                        </div>
                     @endif

                 {{ csrf_field() }}

                <div class="form-label-group">
                  <input type="text" name="username" value="{{ old('username') }}" autocomplete="off" id="inputEmail" class="form-control @error('email') is-invalid @enderror" placeholder="Username" >

                  @if ($errors->has('username'))
                   <span class="text-danger">{{ $errors->first('username') }}</span>
                  @endif
             
                </div><br>

               <div class="form-label-group">
                  <input type="password" name="password" autocomplete="off" id="inputPassword" class="form-control" placeholder="Password">

                  @if ($errors->has('password'))
                  <span class="text-danger">{{ $errors->first('password') }}</span>
                  @endif

                </div><br>

                <button class="btn btn-md btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Sign In</button>
              </form>


          </form>

        </div>

        <div class="clearfix"></div>
      </div>
    </div>
    <!-- end card-box-->


  </div>
  <!-- end wrapper page -->




  <!-- jQuery  -->
  <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
  <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('assets/js/detect.js')}}"></script>
  <script src="{{ asset('assets/js/waves.js')}}"></script>
  <script src="{{ asset('assets/js/jquery.nicescroll.js')}}"></script>
  <script src="{{ asset('assets/plugins/switchery/switchery.min.js')}}"></script>
  <!-- Modernizr js -->
  <script src="{{ asset('assets/js/app.min.js')}}"></script>
  <!-- App js -->
  <script src="{{ asset('assets/js/jquery.core.js')}}"></script>
  <script src="{{ asset(' assets/js/jquery.app.js')}}"></script>

</body>


</html>





