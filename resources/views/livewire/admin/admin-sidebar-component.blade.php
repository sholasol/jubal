<div class="dashboard-sidebar">
    <div class="dashboard-sidebar-inner" data-simplebar>
        <div class="dashboard-nav-container">

            <!-- Responsive Navigation Trigger -->
            <a href="#" class="dashboard-responsive-nav-trigger">
                <span class="hamburger hamburger--collapse" >
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </span>
                <span class="trigger-title">Dashboard Navigation</span>
            </a>
            
            <!-- Navigation --> 
            <div class="dashboard-nav" style="position: fixed;">
                <div class="dashboard-nav-inner">

                    <ul data-submenu-title="Start">
                        <li class="active"><a href="{{ route('admin.dashboard') }}"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
                        <li><a href=""><i class="icon-material-outline-question-answer"></i> Messages <span class="nav-tag">2</span></a></li>
                        {{-- <li><a href="{{ route('admin.service_category') }}"><i class="icon-material-outline-star-border"></i>Service Categories</a></li>  --}}

                        <li><a href="{{ route('admin.waitingjob') }}"><i class="icon-material-outline-rate-review"></i> Jobs Approvals</a></li>
                        <li><a href="{{ route('admin.professionals') }}"><i class="icon-feather-user"></i> Professionals</a></li>
                        <li><a href="{{ route('admin.clients') }}"><i class="icon-feather-users"></i> Clients</a></li>
                    </ul>
                    
                    <ul data-submenu-title="Organize and Manage">
                        <li><a href="#"><i class="icon-material-outline-assignment"></i> Services</a>
                            <ul>
                                <li><a href="{{ route('admin.service_category') }}">All Service Categories</a></li>
                                <li><a href="{{ route('admin.add_service_category') }}">Create Service Category</a></li>
                                <li><a href="{{ route('admin.services') }}">All Services</a></li>
                                <li><a href="{{ route('admin.add_service') }}">Create Service</a></li>
                            </ul>	 
                        </li>
                        <li><a href="#"><i class="icon-line-awesome-file-audio-o"></i>Manage Jobs</a>
                            <ul>
                                <li><a href="">Manage Jobs <span class="nav-tag">3</span></a></li>
                                <li><a href="">Manage Candidates</a></li>
                                <li><a href="{{ route('admin.post_job') }}">Post a Job</a></li>
                            </ul>	
                        </li>
                        <li><a href="#"><i class="icon-feather-menu"></i> Tasks</a> 
                            <ul>
                                <li><a href="">Manage Tasks <span class="nav-tag">2</span></a></li>
                                <li><a href="">Manage Bidders</a></li>
                                <li><a href="">My Active Bids <span class="nav-tag">4</span></a></li>
                                <li><a href="">Post a Task</a></li>
                            </ul>	
                        </li>
                    </ul>

                    <ul data-submenu-title="Account"> 
                        <li><a href=""><i class="icon-material-outline-account-balance-wallet"></i> Fund Wallet</a></li>
                        <li><a href=""><i class="icon-material-outline-settings"></i> Settings</a></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
                        <form id="logout-form" method="post" action="{{ route('logout') }}">
                            @csrf
                        </form>
                    </ul>
                                    
                    
                </div>
            </div>
            <!-- Navigation / End -->

        </div>
    </div>
</div>
