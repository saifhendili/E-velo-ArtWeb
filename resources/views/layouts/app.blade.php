<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Empire Bootstrap admin template made using Bootstrap 4, it has tons of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="Empire, bootstrap admin template, bootstrap admin panel, bootstrap 4 admin template, admin template">
    <meta name="author" content="Srthemesvilla" />
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- Icon fonts -->
    <link rel="stylesheet" href="assets/fonts/fontawesome.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.css">
    <link rel="stylesheet" href="assets/fonts/linearicons.css">
    <link rel="stylesheet" href="assets/fonts/open-iconic.css">
    <link rel="stylesheet" href="assets/fonts/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="assets/fonts/feather.css">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="assets/css/bootstrap-material.css">
    <link rel="stylesheet" href="assets/css/shreerang-material.css">
    <link rel="stylesheet" href="assets/css/uikit.css">

    <!-- Libs -->
    <link rel="stylesheet" href="assets/libs/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/libs/flot/flot.css">

    <!-- Scripts -->


<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assetss/images/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assetss/images/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assetss/images/favicon.ico">
<link rel="apple-touch-icon-precomposed" href="assetss/images/favicon.ico">
<link rel="shortcut icon" href="assetss/images/favicon.ico">

<link href="assets/assetss/css/bootstrap.min.css" rel="stylesheet">

<link href="assets/assetss/css/font-awesome.css" rel="stylesheet">

<link href="assets/assetss/css/font/flaticon.css" rel="stylesheet">

<link href="assets/assetss/css/slick.css" rel="stylesheet">

<link href="assets/assetss/css/ion.rangeSlider.min.css" rel="stylesheet">

<link href="assets/assetss/css/datepicker.css" rel="stylesheet">

<link href="assets/assetss/css/magnific-popup.css" rel="stylesheet">

<link href="assets/assetss/css/nice-select.css" rel="stylesheet">

<link href="assets/assetss/css/style.css" rel="stylesheet">

<link href="assets/assetss/css/responsive.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&amp;display=swap" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="page-loader">
        <div class="bg-primary"></div>
    </div>
    <!-- [ Preloader ] End -->

    <!-- [ Layout wrapper ] Start -->
    <div class="layout-wrapper layout-2">
        <div class="layout-inner">
            <!-- [ Layout sidenav ] Start -->
            @guest
            
            @else
            @if(Auth::user()->role)
            <div id="layout-sidenav" class="layout-sidenav sidenav sidenav-vertical bg-white logo-dark">
                <!-- Brand demo (see assets/css/demo/demo.css) -->
                <div class="app-brand demo">
                    <span class="app-brand-logo demo">
                        <img src="assets/img/logo.png" alt="Brand Logo" class="img-fluid">
                    </span>
                    <a href="index.html" class="app-brand-text demo sidenav-text font-weight-normal ml-2">Empire</a>
                    <a href="javascript:" class="layout-sidenav-toggle sidenav-link text-large ml-auto">
                        <i class="ion ion-md-menu align-middle"></i>
                    </a>
                </div>
                <div class="sidenav-divider mt-0"></div>

                <!-- Links -->
                <ul class="sidenav-inner py-1">

                    <!-- Dashboards -->
                    <li class="sidenav-item active">
                        <a href="index.html" class="sidenav-link">
                            <i class="sidenav-icon feather icon-home"></i>
                            <div>Dashboards</div>
                            <div class="pl-1 ml-auto">
                                <div class="badge badge-danger">Hot</div>
                            </div>
                        </a>
                    </li>

                    <!-- Layouts -->
                    <li class="sidenav-divider mb-1"></li>
                    <li class="sidenav-header small font-weight-semibold">UI Components</li>
                    <li class="sidenav-item">
                        <a href="typography.html" class="sidenav-link">
                            <i class="sidenav-icon feather icon-type"></i>
                            <div>Typography</div>
                        </a>
                    </li>

                    <!-- UI elements -->
                    <li class="sidenav-item">
                        <a href="javascript:" class="sidenav-link sidenav-toggle">
                            <i class="sidenav-icon feather icon-box"></i>
                            <div>UI components</div>
                        </a>
                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="bui_alert.html" class="sidenav-link">
                                    <div>Alerts</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="bui_badges.html" class="sidenav-link">
                                    <div>Badges</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="bui_button.html" class="sidenav-link">
                                    <div>Buttons</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="charts_morrisjs.html" class="sidenav-link">
                                    <div>Charts</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="bui_dropdowns.html" class="sidenav-link">
                                    <div>Dropdowns</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="bui_pagination.html" class="sidenav-link">
                                    <div>Pagination and breadcrumbs</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="bui_progress.html" class="sidenav-link">
                                    <div>Progress bars</div>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <!-- Forms & Tables -->
                    <li class="sidenav-divider mb-1"></li>
                    <li class="sidenav-header small font-weight-semibold">Forms & Tables</li>
                    <li class="sidenav-item">
                        <a href="javascript:" class="sidenav-link sidenav-toggle">
                            <i class="sidenav-icon feather icon-clipboard"></i>
                            <div>Forms</div>
                        </a>
                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="forms_layouts.html" class="sidenav-link">
                                    <div>Layouts and elements</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="forms_input-groups.html" class="sidenav-link">
                                    <div>Input groups</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidenav-item">
                        <a href="tables_bootstrap.html" class="sidenav-link">
                            <i class="sidenav-icon feather icon-grid"></i>
                            <div>Tables</div>
                        </a>
                    </li>

                    <!--  Icons -->
                    <li class="sidenav-divider mb-1"></li>
                    <li class="sidenav-header small font-weight-semibold">Icons</li>
                    <li class="sidenav-item">
                        <a href="javascript:" class="sidenav-link sidenav-toggle">
                            <i class="sidenav-icon feather icon-feather"></i>
                            <div>Icons</div>
                        </a>
                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="icons_feather.html" class="sidenav-link">
                                    <div>Feather</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="icons_linearicons.html" class="sidenav-link">
                                    <div>Linearicons</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Pages -->
                    <li class="sidenav-divider mb-1"></li>
                    <li class="sidenav-header small font-weight-semibold">Pages</li>
                    <li class="sidenav-item">
                        <a href="pages_authentication_login-v1.html" class="sidenav-link">
                            <i class="sidenav-icon feather icon-lock"></i>
                            <div>Login</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="pages_authentication_register-v1.html" class="sidenav-link">
                            <i class="sidenav-icon feather icon-user"></i>
                            <div>Signup</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="pages_faq.html" class="sidenav-link">
                            <i class="sidenav-icon feather icon-anchor"></i>
                            <div>FAQ</div>
                        </a>
                    </li>
                </ul>
            </div>
          
            @endif
            @endguest
            <!-- [ Layout sidenav ] End -->
            <!-- [ Layout container ] Start -->
            <div class="layout-container">
                <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                    <div class="container">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>
        
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav me-auto">
        
                            </ul>
        
                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ms-auto">
                                <!-- Authentication Links -->
                                @guest
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif
        
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                        
                                    @endif
                                @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('velos.index') }}">Velo </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('association.index') }}">Association</a>
                                </li>


                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('locale.index') }}">Locale</a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('bloc.index') }}">Blog</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('event.index') }}">Event</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('Cyclicte.index') }}">Cyclicte</a>
                                </li>
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>
        
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
        
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                    
                                @endguest

                            </ul>
                        </div>
                    </div>
                </nav>



            
                <!-- [ Layout content ] Start -->
               
                <!-- [ Layout content ] Start -->
          
            <!-- [ Layout container ] End -->
            <div class="layout-content">
                @yield('content')

                <!-- [ content ] Start -->
            
        <!-- [ Layout container ] End -->
    </div>
    <!-- Overlay -->
    <div class="layout-overlay layout-sidenav-toggle"></div>
</div>
<!-- [ Layout wrapper] End -->

<!-- Core scripts -->
<script src="assets/js/pace.js"></script>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/libs/popper/popper.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/sidenav.js"></script>
<script src="assets/js/layout-helpers.js"></script>
<script src="assets/js/material-ripple.js"></script>

<!-- Libs -->
<script src="assets/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="assets/libs/eve/eve.js"></script>
<script src="assets/libs/flot/flot.js"></script>
<script src="assets/libs/flot/curvedLines.js"></script>
<script src="assets/libs/chart-am4/core.js"></script>
<script src="assets/libs/chart-am4/charts.js"></script>
<script src="assets/libs/chart-am4/animated.js"></script>

<!-- Demo -->
<script src="assets/js/demo.js"></script><script src="assets/js/analytics.js"></script>
<script src="assets/js/pages/dashboards_index.js"></script>





<script src="assets/assetss/js/jquery.min.js"></script>

<script src="assets/assetss/js/popper.min.js"></script>

<script src="assets/assetss/js/bootstrap.min.js"></script>

<script src="assets/assetss/js/ion.rangeSlider.min.js"></script>

<script src="assets/assetss/js/slick.min.js"></script>

<script src="assets/assetss/js/datepicker.js"></script>
<script src="assets/assetss/js/datepicker.en.js"></script>

<script src="assets/assetss/js/isotope.pkgd.min.js"></script>

<script src="assets/assetss/js/jquery.nice-select.js"></script>

<script src="assets/assetss/js/jquery.magnific-popup.min.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnd9JwZvXty-1gHZihMoFhJtCXmHfeRQg"></script>

<script src="assetss/js/custom.js"></script>
</body>

</html>
