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
                        <li class="active"><a href="{{ route('client.dashboard') }}"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
                        <li><a href=""><i class="icon-material-outline-question-answer"></i> Messages <span class="nav-tag">2</span></a></li>
                        <li><a href=""><i class="icon-material-outline-star-border"></i> Bookmarks</a></li>
                        <li><a href="#"><i class="icon-material-outline-rate-review"></i> My Profile</a>
                            <ul>
                                <li><a wire:click.prevent="checkProfile()" >My Profile</a></li>
                                
                                <li><a wire:click.prevent="checkEdit()" >Edit Profile</a></li>
                                
                                <li><a href="{{ route('client.editprofile') }}">Create Profile</a></li>
                                
                            </ul>
                        </li>
                    </ul> 
                    
                    <ul data-submenu-title="Organize and Manage">
                        <li><a href="#"><i class="icon-material-outline-business-center"></i> Jobs</a>
                            <ul>
                                <li><a href="{{ route('client.jobs') }}">Find Jobs</a></li>
                                <li><a href="{{ route('client.job-done') }}">Jobs Done</a></li>
                                <li><a href="{{ route('client.job-list') }}">My Jobs</a></li>
                                <li><a href="{{ route('client.post-job') }}">Post a Job</a></li>
                            </ul>	
                        </li>
                        <li><a href="#"><i class="icon-material-outline-monetization-on"></i> Hirings</a>
                            <ul>
                                <li><a href="{{ route('client.hires') }}">My Pro Requests</a></li>
                                <li><a href="{{ route('client.myhiring') }}">Hires</a></li>
                            </ul>	
                        </li>
                        <li><a href="#"><i class="icon-material-outline-assignment"></i> Tasks</a>
                            <ul>
                                <li><a href="">Manage Tasks <span class="nav-tag">2</span></a></li>
                                <li><a href="">Manage Bidders</a></li>
                                <li><a href="">My Active Bids <span class="nav-tag">4</span></a></li>
                                <li><a href="">Post a Task</a></li>
                            </ul>	
                        </li>
                    </ul>

                    <ul data-submenu-title="Account"> 
                        <li><a href="{{ route('client.wallet') }}"><i class="icon-material-outline-account-balance-wallet"></i> My Wallet</a></li>
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
