<!doctype html>
<html lang="en">
<head>

<!-- Basic Page Needs
================================================== -->
<title>:Jubal:</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/colors/blue.css') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('asset/icon.png') }}">
<style>
    svg:not(:root) {
        overflow: hidden;
        height: 20px !important;
        display: none;
    }
</style>
@livewireStyles
</head>
<body class="gray">

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
                            <a href="{{ route('admin.dashboard') }}"><img src="{{ asset('asset/logof.png') }}" alt=""></a>
                        </div>

                        <!-- Main Navigation -->
                        <nav id="navigation">
                            <ul id="responsive">

                                <li><a href="{{ route('admin.dashboard') }}" >Home</a></li>

                                <li><a href="#">Music Professionals</a>
                                </li>

                                <li><a href="#">Employers</a>
                                </li>
                                <li><a href="">Service category</a>
                                </li>

                                <li><a href="{{ route('admin.dashboard') }}">Dashboard</a>
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
                                    <a href="#"><i class="icon-feather-bell"></i><span>1</span></a>
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
                                                    <a href="">
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
                                    <a href="#"><i class="icon-feather-mail"></i><span>1</span></a>
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
                @elseif (Auth::user()->utype ==='PRF')

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

                                <li><a href="/" >Home</a></li>

                                <li><a href="#">Find Jobs</a>
                                </li>

                                <li><a href="#">Employers</a>
                                </li>

                                <li><a href="#">Tasks</a>
                                </li>

                                <li><a href="{{ route('professional.dashboard') }}">Dashboard</a>
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
                                    <a href="{{ route('professional.dashboard') }}"><div class="user-avatar status-online"><img src="{{ asset('images/user-avatar-small-01.jpg') }}" alt=""></div></a>
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
                                    <li><a href="{{ route('professional.dashboard') }}"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
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
                            <a href="{{ route('client.dashboard') }}"><img src="{{ asset('asset/logof.png') }}" alt=""></a>
                        </div>

                        <!-- Main Navigation -->
                        <nav id="navigation">
                            <ul id="responsive">

                                <li><a href="{{ route('client.dashboard') }}" >Home</a></li>

                                <li><a href="{{route('client.profs') }}">Music Pros</a>
                                </li>

                                <li><a href="{{ route('client.job-list') }}"> Jobs</a>
                                </li>

                                <li><a href="#">Tasks</a>
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
                                    <li><a href="{{ route('client.dashboard') }}"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
                                    <li><a href="{{ route('client.profile') }}"><i class="icon-material-outline-account-circle"></i> Profile</a></li>
                                    <li><a href="{{ route('client.editprofile') }}"><i class="icon-material-outline-settings"></i> Settings</a></li>
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
                        <a href="/"><img src="{{ asset('asset/logo.png') }}" alt=""></a>
                    </div>
    
                    <!-- Main Navigation -->
                    <nav id="navigation">
                        <ul id="responsive">
    
                            <li><a href="/" >Home</a></li>
                            <li><a href="/about">Who We Are</a></li>
    
                            <li><a href="/jobs">Jobs</a>
                            </li>
    
                            <li><a href="/profs">Music Pros</a>
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
<!-- Header Container / End -->


<!-- Dashboard Container -->
{{ $slot }}
<!-- Dashboard Container / End -->

</div>
<!-- Wrapper / End -->


<!-- Apply for a job popup
================================================== -->
<div id="small-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

	<!--Tabs -->
	<div class="sign-in-form">

		<ul class="popup-tabs-nav">
			<li><a href="#tab">Add Note</a></li>
		</ul>

		<div class="popup-tabs-container">

			<!-- Tab -->
			<div class="popup-tab-content" id="tab">
				
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>Do Not Forget 😎</h3>
				</div>
					
				<!-- Form -->
				<form method="post" id="add-note">

					<select class="selectpicker with-border default margin-bottom-20" data-size="7" title="Priority">
						<option>Low Priority</option>
						<option>Medium Priority</option>
						<option>High Priority</option>
					</select>

					<textarea name="textarea" cols="10" placeholder="Note" class="with-border"></textarea>

				</form>
				
				<!-- Button -->
				<button class="button full-width button-sliding-icon ripple-effect" type="submit" form="add-note">Add Note <i class="icon-material-outline-arrow-right-alt"></i></button>

			</div>

		</div>
	</div>
</div>
<!-- Apply for a job popup / End -->


<!-- Scripts
================================================== --> 
<script src="{{ asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{ asset('js/jquery-migrate-3.0.0.min.js')}}"></script>
<script src="{{ asset('js/mmenu.min.js')}}"></script>
<script src="{{ asset('js/tippy.all.min.js')}}"></script>
<script src="{{ asset('js/simplebar.min.js')}}"></script>
<script src="{{ asset('js/bootstrap-slider.min.js')}}"></script>
<script src="{{ asset('js/bootstrap-select.min.js')}}"></script>
<script src="{{ asset('js/snackbar.js')}}"></script>
<script src="{{ asset('js/clipboard.min.js')}}"></script>
<script src="{{ asset('js/counterup.min.js')}}"></script>
<script src="{{ asset('js/magnific-popup.min.js')}}"></script>
<script src="{{ asset('js/slick.min.js')}}"></script>
<script src="{{ asset('js/custom.js')}}"></script>
<script src="{{ asset('js/chart.min.js')}}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.tiny.cloud/1/faft3sejlsum17i828rexj7it0a5xngu7swu6bxsbtcu0phb/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
<script>
// Snackbar for user status switcher
$('#snackbar-user-status label').click(function() { 
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

<script>
    window.addEventListener('success', event => {
        Swal.fire({
        icon: 'success',
        title: 'Success',
        text: 'Operation successful',
        showConfirmButton: true,
        timer: 2000
        }).then(function() {
            window.location.reload();
            //window.location = '{{ route('admin.dashboard') }}';
        });
    })
</script>

<script>
    window.addEventListener('done', event => {
        Swal.fire({
        icon: 'success',
        title: 'Operation Successful',
        text: 'Operation successful',
        showConfirmButton: true,
        timer: 2000
        }).then(function() {
            window.location = '{{ route('client.dashboard') }}';
        });
    })
</script>


<!-- Chart.js // documentation: http://www.chartjs.org/docs/latest/ -->

<script>
	Chart.defaults.global.defaultFontFamily = "Nunito";
	Chart.defaults.global.defaultFontColor = '#888';
	Chart.defaults.global.defaultFontSize = '14';

	var ctx = document.getElementById('chart').getContext('2d');

	var chart = new Chart(ctx, {
		type: 'line',

		// The data for our dataset
		data: {
			labels: ["January", "February", "March", "April", "May", "June"],
			// Information about the dataset
	   		datasets: [{
				label: "Views",
				backgroundColor: 'rgba(42,65,232,0.08)',
				borderColor: '#2a41e8',
				borderWidth: "3",
				data: [196,132,215,362,210,252],
				pointRadius: 5,
				pointHoverRadius:5,
				pointHitRadius: 10,
				pointBackgroundColor: "#fff",
				pointHoverBackgroundColor: "#fff",
				pointBorderWidth: "2",
			},
            {
				label: "Tasks",
				backgroundColor: 'rgba(42,65,232,0.08)',
				borderColor: '#2a41e8',
				borderWidth: "3",
				data: [300,324,215,214,543,252],
				pointRadius: 5,
				pointHoverRadius:5,
				pointHitRadius: 10,
				pointBackgroundColor: "#fff",
				pointHoverBackgroundColor: "#fff",
				pointBorderWidth: "2",
			}
            ]
		},

		// Configuration options
		options: {

		    layout: {
		      padding: 10,
		  	},

			legend: { display: false },
			title:  { display: false },

			scales: {
				yAxes: [{
					scaleLabel: {
						display: false
					},
					gridLines: {
						 borderDash: [6, 10],
						 color: "#d8d8d8",
						 lineWidth: 1,
	            	},
				}],
				xAxes: [{
					scaleLabel: { display: false },  
					gridLines:  { display: false },
				}],
			},

		    tooltips: {
		      backgroundColor: '#333',
		      titleFontSize: 13,
		      titleFontColor: '#fff',
		      bodyFontColor: '#fff',
		      bodyFontSize: 13,
		      displayColors: false,
		      xPadding: 10,
		      yPadding: 10,
		      intersect: false
		    }
		},


});

</script>
@livewireScripts
@stack('scripts')
</body>
</html>