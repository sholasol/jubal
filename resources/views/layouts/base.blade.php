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
                            <a href="/"><img src="{{ asset('asset/logof.png') }}" alt="Jubal"></a>
                        </div>

                        <!-- Main Navigation -->
                        <nav id="navigation">
                            <ul id="responsive">

                                <li><a href="/" >Home</a></li>

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
                            <a href="{{ route('client.dashboard') }}"><img src="{{ asset('asset/logof.png') }}" alt=""></a>
                        </div>

                        <!-- Main Navigation -->
                        <nav id="navigation">
                            <ul id="responsive">

                                

                                <li><a href="/profs">Find Professional</a>
                                </li>

                                <li><a href="{{ route('client.post-job') }}">Post Job</a>
                                </li>

                                <li><a href="#">Tasks</a>
                                </li>

                                <li><a href="{{ route('client.dashboard') }}" >Hi, <span>{{ Auth::user()->name }}</span></a></li>

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

                                    <a href="" class="header-notifications-button ripple-effect button-sliding-icon">View All Messages<i class="icon-material-outline-arrow-right-alt"></i></a>
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
    
                            <li><a href="/" >Home</a></li>
                            <li><a href="/about">Who We Are</a></li>
    
                            <li><a href="/profs">Music Pros</a>
                            </li>
    
                            <li><a href="/jobs">Jobs</a>
                            </li>
                            {{-- <li><a href="/category">Service Category</a></li> --}}
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



{{ $slot }}

<!-- Footer
================================================== -->
<div id="footer">
	
	<!-- Footer Top Section -->
	<div class="footer-top-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">

					<!-- Footer Rows Container -->
					<div class="footer-rows-container">
						
						<!-- Left Side -->
						<div class="footer-rows-left">
							<div class="footer-row">
								<div class="footer-row-inner footer-logo">
									<img src="{{ asset('asset/logof.png') }}" alt="">
								</div>
							</div>
						</div>
						
						<!-- Right Side -->
						<div class="footer-rows-right">

							<!-- Social Icons -->
							<div class="footer-row">
								<div class="footer-row-inner">
									<ul class="footer-social-links">
										<li>
											<a href="#" title="Facebook" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-facebook-f"></i>
											</a>
										</li>
										<li>
											<a href="#" title="Twitter" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-twitter"></i>
											</a>
										</li>
										<li>
											<a href="#" title="Google Plus" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-google-plus-g"></i>
											</a>
										</li>
										<li>
											<a href="#" title="LinkedIn" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-linkedin-in"></i>
											</a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
							</div>
							
							<!-- Language Switcher -->
							<div class="footer-row">
								<div class="footer-row-inner">
									<select class="selectpicker language-switcher" data-selected-text-format="count" data-size="5">
										<option selected>English</option>
										<option>Français</option>
										<option>Español</option>
										<option>Deutsch</option>
									</select>
								</div>
							</div>
						</div>

					</div>
					<!-- Footer Rows Container / End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Top Section / End -->

	<!-- Footer Middle Section -->
	<div class="footer-middle-section">
		<div class="container">
			<div class="row">

				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>For Music Pros</h3>
						<ul>
							<li><a href="#"><span>Signup and complete your profile</span></a></li>
							<li><a href="#"><span>Browse jobs</span></a></li>
							<li><a href="#"><span>Job Alerts</span></a></li>
							<li><a href="#"><span>My Bookmarks</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>For Clients</h3>
						<ul>
							<li><a href="#"><span>Signup</span></a></li>
							<li><a href="#"><span>Browse Music Pros</span></a></li>
							<li><a href="#"><span>Post a Job</span></a></li>
							<li><a href="#"><span>Plans & Pricing</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>Helpful Links</h3>
						<ul>
							<li><a href="#"><span>Contact</span></a></li>
							<li><a href="#"><span>Privacy Policy</span></a></li>
							<li><a href="#"><span>Terms of Use</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>Account</h3>
						<ul>
							<li><a href="/register"><span>Signup</span></a></li>
							<li><a href="/login"><span>Log In</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Newsletter -->
				<div class="col-xl-4 col-lg-4 col-md-12">
					<h3><i class="icon-feather-mail"></i> Subscribe for our newsletter</h3>
					<form  class="newsletter">
						<input type="text" name="fname" placeholder="Enter your email address">
						<button type="submit"><i class="icon-feather-arrow-right"></i></button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Middle Section / End -->
	
	<!-- Footer Copyrights -->
	<div class="footer-bottom-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					Jubal Copyright &copy;  {{ date('Y') }}  All Rights Reserved.
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Copyrights / End -->

</div>
<!-- Footer / End -->

</div>
<!-- Wrapper / End -->





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
<script src="js/chart.min.js"></script>

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

	// Autocomplete adjustment for homepage
	if ($('.intro-banner-search-form')[0]) {
	    setTimeout(function(){ 
	        $(".pac-container").prependTo(".intro-search-field.with-autocomplete");
	    }, 300);
	}

</script>
<script>
    function activatePlaces(){
      var input = document.getElementById('address');
      var autocomplete = new google.maps.places.Autocomplete(input);
      
    }
</script>
<!-- Google API -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCr4WUTzRVdoGV2TIPMFHYh7fgt2uG1km8&libraries=places&callback=activatePlaces"></script> 
{{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g&libraries=places&callback=initAutocomplete"></script> --}}
<script>
    var TxtRotate = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
  };

  TxtRotate.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
      this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
      this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

    var that = this;
    var delta = 300 - Math.random() * 100;

    if (this.isDeleting) { delta /= 2; }

    if (!this.isDeleting && this.txt === fullTxt) {
      delta = this.period;
      this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
      this.isDeleting = false;
      this.loopNum++;
      delta = 500;
    }

    setTimeout(function() {
      that.tick();
    }, delta);
  };

  window.onload = function() {
    var elements = document.getElementsByClassName('txt-rotate');
    for (var i=0; i<elements.length; i++) {
      var toRotate = elements[i].getAttribute('data-rotate');
      var period = elements[i].getAttribute('data-period');
      if (toRotate) {
        new TxtRotate(elements[i], JSON.parse(toRotate), period);
      }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #111 }";
    document.body.appendChild(css);
  };
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
			}]
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
</body>
</html>