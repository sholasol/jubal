<!doctype html>
<html lang="en">
<head>

<!-- Basic Page Needs
================================================== -->
<title>: Jubal Music:</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="{{ asset('css/style.css')}}">
<link rel="stylesheet" href="{{ asset('css/colors/blue.css')}}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('asset/icon.png') }}">
@livewireStyles
</head>
<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container" class="fullwidth dashboard-header not-sticky">

	<!-- Header -->
	<div id="header">
        @if (Route::has('login'))
            @auth
                @if (Auth::user()->utype ==='ADM')
                <div class="container">
            
                    <!-- Left Side Content -->
                    <div class="left-side">
                        
                        <!-- Logo -->
                        <div id="logo">
                            <a href="/"><img src="{{ asset('asset/logof.png') }}" alt=""></a>
                        </div>

                        <!-- Main Navigation -->
                        <nav id="navigation">
                            <ul id="responsive">

                                <li><a href="/" class="current">Home</a></li>

                                <li><a href="#">Music Professionals</a>
                                </li>

                                <li><a href="#">Employers</a>
                                </li>

                                <li><a href="{{ route('admin.dashboard') }}">Hi, <span>{{ Auth::user()->name }}</span></a>
                                </li>

                            </ul>
                        </nav>
                        <div class="clearfix"></div>
                        <!-- Main Navigation / End -->
                        
                    </div>
                    <!-- Left Side Content / End -->


                    <!-- Right Side Content / End -->
                    <div class="right-side">

                        <!--  User Notifications -->
                        <div class="header-widget hide-on-mobile">
                            
                            <!-- Notifications -->
                            <div class="header-notifications">

                                <!-- Trigger -->
                                <div class="header-notifications-trigger">
                                    <a href="#"><i class="icon-feather-bell"></i><span>4</span></a>
                                </div>

                                <!-- Dropdown -->
                                <div class="header-notifications-dropdown">

                                    <div class="header-notifications-headline">
                                        <h4>Notifications</h4>
                                        <button class="mark-as-read ripple-effect-dark" title="Jubal" data-tippy-placement="left">
                                            <i class="icon-feather-check-square"></i>
                                        </button>
                                    </div>

                                    <div class="header-notifications-content">
                                        <div class="header-notifications-scroll" data-simplebar>
                                            <ul>
                                                <!-- Notification -->
                                                <li class="notifications-not-read">
                                                    <a href="dashboard-manage-candidates.html">
                                                        <span class="notification-icon"><i class="icon-material-outline-group"></i></span>
                                                        <span class="notification-text">
                                                            <strong>Michael Shannah</strong> applied for a job <span class="color">Full Stack Software Engineer</span>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            
                            <!-- Messages -->
                            <div class="header-notifications">
                                <div class="header-notifications-trigger">
                                    <a href="#"><i class="icon-feather-mail"></i><span>3</span></a>
                                </div>

                                <!-- Dropdown -->
                                <div class="header-notifications-dropdown">

                                    <div class="header-notifications-headline">
                                        <h4>Messages</h4>
                                        <button class="mark-as-read ripple-effect-dark" title="Mark all as read" data-tippy-placement="left">
                                            <i class="icon-feather-check-square"></i>
                                        </button>
                                    </div>

                                    <div class="header-notifications-content">
                                        <div class="header-notifications-scroll" data-simplebar>
                                            <ul>
                                                <!-- Notification -->
                                                <li class="notifications-not-read">
                                                    <a href="dashboard-messages.html">
                                                        <span class="notification-avatar status-online"><img src="images/user-avatar-small-03.jpg" alt=""></span>
                                                        <div class="notification-text">
                                                            <strong>David Peterson</strong>
                                                            <p class="notification-msg-text">Thanks for reaching out. I'm quite busy right now on many...</p>
                                                            <span class="color">4 hours ago</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <a href="dashboard-messages.html" class="header-notifications-button ripple-effect button-sliding-icon">View All Messages<i class="icon-material-outline-arrow-right-alt"></i></a>
                                </div>
                            </div>

                        </div>
                        <!--  User Notifications / End -->

                        <!-- User Menu -->
                        <div class="header-widget">

                            <!-- Messages -->
                            <div class="header-notifications user-menu">
                                <div class="header-notifications-trigger">
                                    <a href="{{ route('admin.dashboard') }}"><div class="user-avatar status-online"><img src="{{ asset('images/user-avatar-small-01.jpg') }}" alt=""></div></a>
                                </div>

                                <!-- Dropdown -->
                                <div class="header-notifications-dropdown">

                                    <!-- User Status -->
                                    <div class="user-status">

                                        <!-- User Name / Avatar -->
                                        <div class="user-details">
                                            <div class="user-avatar status-online"><img src="{{ asset('images/user-avatar-small-01.jpg') }}" alt=""></div>
                                            <div class="user-name">
                                                Hi, <span>{{ Auth::user()->name }}</span>
                                            </div>
                                        </div>
                                        
                                        <!-- User Status Switcher -->
                                        <div class="status-switch" id="snackbar-user-status">
                                            <label class="user-online current-status">Online</label>
                                            {{-- <label class="user-invisible">Invisible</label> --}}
                                            <!-- Status Indicator -->
                                            <span class="status-indicator" aria-hidden="true"></span>
                                        </div>	
                                </div>
                                
                                <ul class="user-menu-small-nav">
                                    <li><a href="{{ route('admin.dashboard') }}"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
                                    <li><a href="#"><i class="icon-material-outline-settings"></i> Profile</a></li>
                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
                                    <form id="logout-form" method="post" action="{{ route('logout') }}">
                                        @csrf
                                    </form>
                                </ul>

                                </div>
                            </div>

                        </div>
                        <!-- User Menu / End -->

                        <!-- Mobile Navigation Button -->
                        <span class="mmenu-trigger">
                            <button class="hamburger hamburger--collapse" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </span>

                    </div>
                    <!-- Right Side Content / End -->

                </div>

                @elseif (Auth::user()->utype ==='CST')
                <div class="container">
            
                    <!-- Left Side Content -->
                    <div class="left-side">
                        
                        <!-- Logo -->
                        <div id="logo">
                            <a href="{{ route('client.dashboard') }}"><img src="{{ asset('asset/logo.png') }}" alt=""></a>
                        </div>

                        <!-- Main Navigation -->
                        <nav id="navigation">
                            <ul id="responsive">

                                <li><a href="{{ route('client.dashboard') }}" class="current">Hi, <span>{{ Auth::user()->name }}</span></a></li>

                                <li><a href="#">Find Professional</a>
                                </li>

                                <li><a href="#">Post Job</a>
                                </li>

                                <li><a href="#">Tasks</a>
                                </li>

                                <li><a href="{{ route('client.dashboard') }}">Dashboard</a>
                                </li>

                            </ul>
                        </nav>
                        <div class="clearfix"></div>
                        <!-- Main Navigation / End -->
                        
                    </div>
                    <!-- Left Side Content / End -->


                    <!-- Right Side Content / End -->
                    <div class="right-side">

                        <!--  User Notifications -->
                        <div class="header-widget hide-on-mobile">
                            
                            <!-- Notifications -->
                            <div class="header-notifications">

                                <!-- Trigger -->
                                <div class="header-notifications-trigger">
                                    <a href="#"><i class="icon-feather-bell"></i><span>4</span></a>
                                </div>

                                <!-- Dropdown -->
                                <div class="header-notifications-dropdown">

                                    <div class="header-notifications-headline">
                                        <h4>Notifications</h4>
                                        <button class="mark-as-read ripple-effect-dark" title="Jubal" data-tippy-placement="left">
                                            <i class="icon-feather-check-square"></i>
                                        </button>
                                    </div>

                                    <div class="header-notifications-content">
                                        <div class="header-notifications-scroll" data-simplebar>
                                            <ul>
                                                <!-- Notification -->
                                                <li class="notifications-not-read">
                                                    <a href="dashboard-manage-candidates.html">
                                                        <span class="notification-icon"><i class="icon-material-outline-group"></i></span>
                                                        <span class="notification-text">
                                                            <strong>Michael Shannah</strong> applied for a job <span class="color">Full Stack Software Engineer</span>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            
                            <!-- Messages -->
                            <div class="header-notifications">
                                <div class="header-notifications-trigger">
                                    <a href="#"><i class="icon-feather-mail"></i><span>3</span></a>
                                </div>

                                <!-- Dropdown -->
                                <div class="header-notifications-dropdown">

                                    <div class="header-notifications-headline">
                                        <h4>Messages</h4>
                                        <button class="mark-as-read ripple-effect-dark" title="Mark all as read" data-tippy-placement="left">
                                            <i class="icon-feather-check-square"></i>
                                        </button>
                                    </div>

                                    <div class="header-notifications-content">
                                        <div class="header-notifications-scroll" data-simplebar>
                                            <ul>
                                                <!-- Notification -->
                                                <li class="notifications-not-read">
                                                    <a href="dashboard-messages.html">
                                                        <span class="notification-avatar status-online"><img src="images/user-avatar-small-03.jpg" alt=""></span>
                                                        <div class="notification-text">
                                                            <strong>David Peterson</strong>
                                                            <p class="notification-msg-text">Thanks for reaching out. I'm quite busy right now on many...</p>
                                                            <span class="color">4 hours ago</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <a href="dashboard-messages.html" class="header-notifications-button ripple-effect button-sliding-icon">View All Messages<i class="icon-material-outline-arrow-right-alt"></i></a>
                                </div>
                            </div>

                        </div>
                        <!--  User Notifications / End -->

                        <!-- User Menu -->
                        <div class="header-widget">

                            <!-- Messages -->
                            <div class="header-notifications user-menu">
                                <div class="header-notifications-trigger">
                                    <a href="{{ route('client.dashboard') }}"><div class="user-avatar status-online"><img src="{{ asset('images/user-avatar-small-01.jpg') }}" alt=""></div></a>
                                </div>

                                <!-- Dropdown -->
                                <div class="header-notifications-dropdown">

                                    <!-- User Status -->
                                    <div class="user-status">

                                        <!-- User Name / Avatar -->
                                        <div class="user-details">
                                            <div class="user-avatar status-online"><img src="images/user-avatar-small-01.jpg" alt=""></div>
                                            <div class="user-name">
                                                Hi, <span>{{ Auth::user()->name }}</span>
                                            </div>
                                        </div>
                                        
                                        <!-- User Status Switcher -->
                                        <div class="status-switch" id="snackbar-user-status">
                                            <label class="user-online current-status">Online</label>
                                            {{-- <label class="user-invisible">Invisible</label> --}}
                                            <!-- Status Indicator -->
                                            <span class="status-indicator" aria-hidden="true"></span>
                                        </div>	
                                </div>
                                
                                <ul class="user-menu-small-nav">
                                    <li><a href="{{ route('client.dashboard') }}"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
                                    <li><a href="#"><i class="icon-material-outline-settings"></i> Profile</a></li>
                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
                                    <form id="logout-form" method="post" action="{{ route('logout') }}">
                                        @csrf
                                    </form>
                                </ul>

                                </div>
                            </div>

                        </div>
                        <!-- User Menu / End -->

                        <!-- Mobile Navigation Button -->
                        <span class="mmenu-trigger">
                            <button class="hamburger hamburger--collapse" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </span>

                    </div>
                    <!-- Right Side Content / End -->

                </div>

                @endif
            @else


            <div class="container">
			
                <!-- Left Side Content -->
                <div class="left-side">
                    
                    <!-- Logo -->
                    <div id="logo">
                        <a href="/"><img src="{{ asset('asset/logof.png') }}" alt=""></a>
                    </div>
    
                    <!-- Main Navigation -->
                    <nav id="navigation">
                        <ul id="responsive">
    
                            <li><a href="/">Home</a></li>
                            <li><a href="/about">Who We Are</a></li>
    
                            <li><a href="/profs">Music Pros</a>
                            </li>
    
                            <li><a href="/jobs">Jobs</a>
                            </li>
    
                            <li><a href="/contact">Get in Touch</a></li>
                        </ul>
                    </nav>
                    <div class="clearfix"></div>
                    <!-- Main Navigation / End -->
                    
                </div>
                <!-- Left Side Content / End -->
    
    
                <!-- Right Side Content / End -->
                <div class="right-side">
                    
                        <div class="header-widget hide-on-mobile">
                            <!-- Messages -->
                            <a href="/login">
                            <div class="header-notifications">
                                <div class="header-notifications-trigger">
                                    <i class="icon-feather-user"></i>
                                </div>
                            </div>
                            </a>
    
                        </div>
    
    
                    <!-- Mobile Navigation Button -->
                    <span class="mmenu-trigger">
                        <button class="hamburger hamburger--collapse" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </span>
    
                </div>
                <!-- Right Side Content / End -->
    
            </div>
            @endif

        @endif
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>

{{ $slot }}



</div>
<!-- Wrapper / End -->

<!-- Scripts
================================================== -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.0.min.js"></script>
<script src="js/mmenu.min.js"></script>
<script src="js/tippy.all.min.js"></script>
<script src="js/simplebar.min.js"></script>
<script src="js/bootstrap-slider.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/snackbar.js"></script>
<script src="js/clipboard.min.js"></script>
<script src="js/counterup.min.js"></script>
<script src="js/magnific-popup.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/custom.js"></script>

<!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
<script>
// Snackbar for user status switcher
$('.status-switch label').click(function() { 
	Snackbar.show({
		text: 'Your status has been changed!',
		pos: 'bottom-center',
		showAction: false,
		actionText: "Dismiss",
		duration: 3000,
		textColor: '#fff',
		backgroundColor: '#383838'
	}); 
});
</script>

<!-- Google Autocomplete -->
<script>
	function initAutocomplete() {
		 var options = {
		  types: ['(cities)'],
		  // componentRestrictions: {country: "us"}
		 };

		 var input = document.getElementById('autocomplete-input');
		 var autocomplete = new google.maps.places.Autocomplete(input, options);
	}
</script>

<!-- Google API & Maps -->
<!-- Geting an API Key: https://developers.google.com/maps/documentation/javascript/get-api-key -->
<script src="https://maps.googleapis.com/maps/api/js?key=&libraries=places"></script>
@livewireScripts
</body>
</html>