
    <?php 
      $location = DB::table("apartment_locations")->select('location','slug')->get();
    ?>
    
    <header class="main-header navbar-light header-sticky header-sticky-smart header-mobile-lg">
        <div class="sticky-area">
            <div class="container">
                <nav class="navbar navbar-expand-lg px-0">
                    <a class="navbar-brand" href="{{url('/')}}">
                        <img src="{{asset('websiteAssets/images/logo.png')}}" alt="HomeID" class="d-none d-lg-inline-block">
                        <img src="{{asset('websiteAssets/images/logo-white.png')}}" alt="HomeID" class="d-inline-block d-lg-none">
                    </a>
                    <div class="d-flex d-lg-none ml-auto">
                        <a class="mr-4 position-relative text-white p-2" href="#">
                            <i class="fal fa-heart fs-large-4"></i>
                            <span class="badge badge-primary badge-circle badge-absolute">1</span>
                        </a>
                        <button class="navbar-toggler border-0 px-0" type="button" data-toggle="collapse"
                            data-target="#primaryMenu01" aria-controls="primaryMenu01" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="text-white fs-24"><i class="fal fa-bars"></i></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse mt-3 mt-lg-0 mx-auto flex-grow-0" id="primaryMenu01">
                        <ul class="navbar-nav hover-menu main-menu px-0 mx-lg-n4">
                            <li id="navbar-item-home" aria-haspopup="true" aria-expanded="false"
                                class="nav-item dropdown py-2 py-lg-5 px-0 px-lg-4">
                                <a class="nav-link dropdown-toggle p-0" href="index.html" data-toggle="dropdown">
                                    LOCATIONS
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu pt-3 pb-0 pb-lg-3" aria-labelledby="navbar-item-home">
                                    <?php if(!empty($location)): ?>
                                    <?php foreach($location as $item): ?>
                                    <li class="dropdown-item">
                                        <a id="navbar-link-home-01" class="dropdown-link" href="{{url("location/".$item->slug)}}">
                                           <?= $item->location; ?>
                                        </a>
                                    </li>
                                    <?php endforeach; ?>
                                    <?php endif; ?>
                           
                                </ul>
                            </li>
                         
                        </ul>
                        <div class="d-block d-lg-none">
                            <ul class="navbar-nav flex-row justify-content-lg-end d-flex flex-wrap py-2">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle mr-md-2 pr-2 pl-0 pl-lg-2" href="#"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        ENG
                                    </a>
                                    <div class="dropdown-menu dropdown-sm dropdown-menu-left">
                                        <a class="dropdown-item" href="#">VN</a>
                                        <a class="dropdown-item active" href="#">ENG</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">ARB</a>
                                        <a class="dropdown-item" href="#">KR</a>
                                        <a class="dropdown-item" href="#">JN</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  px-2" data-toggle="modal" href="#login-register-modal">SIGN
                                        IN</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="d-none d-lg-block">
                        <ul class="navbar-nav flex-row justify-content-lg-end d-flex flex-wrap text-body py-2">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle mr-md-2 pr-2 pl-0 pl-lg-2" href="#"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    ENG
                                </a>
                                <div class="dropdown-menu dropdown-sm dropdown-menu-right">
                                    <a class="dropdown-item" href="#">VN</a>
                                    <a class="dropdown-item active" href="#">ENG</a>
                                    <a class="dropdown-item" href="#">ARB</a>
                                    <a class="dropdown-item" href="#">KR</a>
                                    <a class="dropdown-item" href="#">JN</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  px-2" data-toggle="modal" href="#login-register-modal">SIGN IN</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-2 position-relative" href="#">
                                    <i class="fal fa-heart fs-large-4"></i>
                                    <span class="badge badge-primary badge-circle badge-absolute">1</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>



