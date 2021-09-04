<div>
    <div class="dashboard-container">

        <!-- Dashboard Sidebar
        ================================================== -->
        @livewire('admin.admin-sidebar-component') 

        <div class="dashboard-content-container" data-simplebar>
            <div class="dashboard-content-inner" >
                
                <!-- Dashboard Headline -->
                <div class="dashboard-headline">
                    <h3>Clients</h3>
    
                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs" class="dark">
                        <ul>
                            <li><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        </ul>
                    </nav>
                </div>
        
                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="col-xl-12">
                            <div class="dashboard-box margin-top-0">
        
                                <!-- Headline -->
                                <div class="headline">
                                    <h3><i class="icon-material-outline-business-center"></i> Music Job Poster</h3>
                                </div>
        
                                <div class="content">
                                    <div class="freelancers-container freelancers-grid-layout margin-top-35">
				
                                        <!--Freelancer -->
                                        @foreach ($jobs as $job)
                                        <div class="freelancer">
                        
                                            <!-- Overview -->
                                            <div class="freelancer-overview">
                                                <div class="freelancer-overview-inner">
                                                    
                                                    <!-- Bookmark Icon -->
                                                    <span class="bookmark-icon"></span>
                                                    
                                                    <!-- Avatar -->
                                                    <div class="freelancer-avatar">
                                                        <div class="verified-badge"></div>
                                                        <a href="single-freelancer-profile.html"><img src="{{ asset('images/user-avatar-big-01.jpg')}}" alt=""></a>
                                                    </div>
                        
                                                    <!-- Name -->
                                                    <div class="freelancer-name">
                                                        <h4><a href="single-freelancer-profile.html">Tom Smith <img class="flag" src="{{ asset('images/flags/gb.svg')}}" alt="" title="United Kingdom" data-tippy-placement="top"></a></h4>
                                                        <span>{{ $job->user_id }}</span>
                                                    </div>
                        
                                                    <!-- Rating -->
                                                    {{-- <div class="freelancer-rating">
                                                        <div class="star-rating" data-rating="4.9"></div>
                                                    </div> --}}
                                                </div>
                                            </div>
                                            
                                            <!-- Details -->
                                            <div class="freelancer-details">
                                                <div class="freelancer-details-list">
                                                    <ul>
                                                        <li>Location <strong><i class="icon-material-outline-location-on"></i> London</strong></li>
                                                        <li>Rate <strong>$60 / hr</strong></li>
                                                        <li>Job Success <strong>95%</strong></li>
                                                    </ul>
                                                </div>
                                                <a href="single-freelancer-profile.html" class="button button-sliding-icon ripple-effect">View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
                                            </div>
                                        </div>
                                        @endforeach
                                        <!-- Freelancer / End -->
                            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
