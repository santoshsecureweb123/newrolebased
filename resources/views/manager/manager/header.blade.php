<!DOCTYPE html>
<html lang="en">
    <head>
        <title>gfdgfd</title>
 		<link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
         <link href="{{ asset('css/style.css') }}" rel="stylesheet">
         <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
         <link href="{{ asset('css/icons.css') }}" rel="stylesheet">
         <link href="{{ asset('css/metisMenu.min.css') }}" rel="stylesheet">
         <link href="{{ asset('css/manager.css') }}" rel="stylesheet">
         <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
         <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet">

        
    </head>
    <body>
    	<div id="wrapper">
            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo">
                        <span class="logo-light">
                            <img src="{{ asset('images/logo-light.png') }}" alt="" height="16">
                        </span>
                        <span class="logo-sm">
                            <img src="{{ asset('images/logo-sm.png') }}" alt="" height="22">
                        </span>
                    </a>
                </div>

                <nav class="navbar-custom">
                    <ul class="navbar-right list-inline float-right mb-0">
                        <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                            <form role="search" class="app-search">
                                <div class="form-group mb-0">
                                    <input type="text" class="form-control" placeholder="Search..">
                                    <button type="submit"></button>
                                </div>
                            </form>
                        </li>

                        <!-- language-->
                        <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="{{ asset('images/flags/us_flag.jpg') }}" class="mr-2" height="12" alt=""/> English </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right language-switch">
                                <a class="dropdown-item" href="#"><img src="{{ asset('images/flags/germany_flag.jpg') }}" alt="" height="16" /><span> German </span></a>
                                <a class="dropdown-item" href="#"><img src="{{ asset('images/flags/italy_flag.jpg') }}" alt="" height="16" /><span> Italian </span></a>
                                <a class="dropdown-item" href="#"><img src="{{ asset('images/flags/french_flag.jpg') }}" alt="" height="16" /><span> French </span></a>
                                <a class="dropdown-item" href="#"><img src="{{ asset('images/flags/spain_flag.jpg') }}" alt="" height="16" /><span> Spanish </span></a>
                                <a class="dropdown-item" href="#"><img src="{{ asset('images/flags/russia_flag.jpg') }}" alt="" height="16" /><span> Russian </span></a>
                            </div>
                        </li>

                        <!-- full screen -->
                        <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                            <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                                
                            </a>
                        </li>

                        <!-- notification -->
                        <li class="dropdown notification-list list-inline-item">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                               
                                <span class="badge badge-pill badge-danger noti-icon-badge">3</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                                <!-- item-->
                                <h6 class="dropdown-item-text">
                                    Notifications (258)
                                </h6>
                                <div class="slimscroll notification-item-list">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                        <div class="notify-icon bg-success"></div>
                                        <p class="notify-details">Your order is placed<span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                    </a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-warning"></div>
                                        <p class="notify-details">New Message received<span class="text-muted">You have 87 unread messages</span></p>
                                    </a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info"></div>
                                        <p class="notify-details">Your item is shipped<span class="text-muted">It is a long established fact that a reader will</span></p>
                                    </a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-primary"></div>
                                        <p class="notify-details">Your order is placed<span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                    </a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-danger"></div>
                                        <p class="notify-details">New Message received<span class="text-muted">You have 87 unread messages</span></p>
                                    </a>
                                </div>
                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-all">
                                    View all 
                                </a>
                            </div>
                        </li>

                        <li class="dropdown notification-list list-inline-item">
                                    <div class="dropdown notification-list nav-pro-img">
                                        <a class="dropdown-toggle nav-link arrow-none nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                            <img src="{{ asset('images/users/user-4.jpg') }}" alt="user" class="rounded-circle">
                                        </a>
                                        
                                    </div>
                                </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-effect">
                               
                            </button>
                        </li>
                        <li class="d-none d-sm-block">
                            <div class="dropdown pt-3 d-inline-block">
                                <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Create
                                </a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                        </li>
                    </ul>

                </nav>

            </div>
			
		</div>
		@include('manager.manager.sidebar')
		@yield('dashboard_content')
	</body>

<script src="{{ asset('js/jquery.min.js') }}" ></script>
<script src="{{ asset('js/manager.js') }}" ></script>
<script src="{{ asset('js/select2.min.js') }}" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}" ></script>
<script src="{{ asset('js/metisMenu.min.js') }}"></script>
<script src="{{ asset('js/jquery.slimscroll.js') }}" ></script>
<script src="{{ asset('js/waves.min.js') }}" ></script>
<script src="{{ asset('js/app1.js') }}"></script>

</html>