<div>
    <div class="dashboard-container">

        <!-- Dashboard Sidebar
        ================================================== -->
        @livewire('admin.admin-sidebar-component') 

        <div class="dashboard-content-container" data-simplebar>
            <div class="dashboard-content-inner" >
                
                <!-- Dashboard Headline -->
                <div class="dashboard-headline">
                    <h3>Music Pros</h3>
    
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
                                    <h3><i class="icon-material-outline-business-center"></i> Professionals</h3>
                                </div>
        
                                <div class="content">
                                    <div class="freelancers-container freelancers-grid-layout margin-top-35">
                                        @foreach ($profs as $prof)
                                            <!--Freelancer -->
                                        <div class="freelancer">
                        
                                            <!-- Overview -->
                                            <div class="freelancer-overview">
                                                <div class="freelancer-overview-inner">
                                                    
                                                    <!-- Bookmark Icon -->
                                                    <span class="bookmark-icon"></span>
                                                    
                                                    <!-- Avatar -->
                                                    <div class="freelancer-avatar">
                                                        <div class="verified-badge"></div>
                                                        <a href="#"><img src="{{ asset('asset/image/profiles') }}/{{ $prof->image }}" alt=""></a>
                                                    </div>
                        
                                                    <!-- Name -->
                                                    <div class="freelancer-name">
                                                        <h4><a href="#">{{ $prof->name }} <img class="flag" src="{{ asset('images/flags/gb.svg')}}" alt="" title="United Kingdom" data-tippy-placement="top"></a></h4>
                                                        <span>{{ $prof->category }}</span>
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
                                                        <li>Location <strong><i class="icon-material-outline-location-on"></i> {{ $prof->country }}</strong></li>
                                                        <li>Job Rate <strong>${{ $prof->rate }}</strong></li>
                                                        {{-- <li>Job Success <strong>95%</strong></li> --}}
                                                    </ul>
                                                </div>
                                                <a href="single-freelancer-profile.html" class="button button-sliding-icon ripple-effect">View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
                                            </div>
                                        </div>
                                        <!-- Freelancer / End -->
                                        @endforeach
                                        
                        
                                        {{-- <!--Freelancer -->
                                        <div class="freelancer">
                        
                                            <!-- Overview -->
                                            <div class="freelancer-overview">
                                                <div class="freelancer-overview-inner">
                                                    
                                                    <!-- Bookmark Icon -->
                                                    <span class="bookmark-icon"></span>
                                                    
                                                    <!-- Avatar -->
                                                    <div class="freelancer-avatar">
                                                        <div class="verified-badge"></div>
                                                        <a href="single-freelancer-profile.html"><img src="{{ asset('images/user-avatar-big-02.jpg')}}" alt=""></a>
                                                    </div>
                        
                                                    <!-- Name -->
                                                    <div class="freelancer-name">
                                                        <h4><a href="#">David Peterson <img class="flag" src="{{ asset('images/flags/de.svg')}}" alt="" title="Germany" data-tippy-placement="top"></a></h4>
                                                        <span>iOS Expert + Node Dev</span>
                                                    </div>
                        
                                                    <!-- Rating -->
                                                    <div class="freelancer-rating">
                                                        <div class="star-rating" data-rating="4.2"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!-- Details -->
                                            <div class="freelancer-details">
                                                <div class="freelancer-details-list">
                                                    <ul>
                                                        <li>Location <strong><i class="icon-material-outline-location-on"></i> Berlin</strong></li>
                                                        <li>Rate <strong>$40 / hr</strong></li>
                                                        <li>Job Success <strong>88%</strong></li>
                                                    </ul>
                                                </div>
                                                <a href="single-freelancer-profile.html" class="button button-sliding-icon ripple-effect">View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
                                            </div>
                                        </div>
                                        <!-- Freelancer / End -->
                        
                                        <!--Freelancer -->
                                        <div class="freelancer">
                        
                                            <!-- Overview -->
                                            <div class="freelancer-overview">
                                                <div class="freelancer-overview-inner">
                                                    <!-- Bookmark Icon -->
                                                    <span class="bookmark-icon"></span>
                                                    
                                                    <!-- Avatar -->
                                                    <div class="freelancer-avatar">
                                                        <a href="single-freelancer-profile.html"><img src="{{ asset('images/user-avatar-placeholder.png')}}" alt=""></a>
                                                    </div>
                        
                                                    <!-- Name -->
                                                    <div class="freelancer-name">
                                                        <h4><a href="#">Marcin Kowalski <img class="flag" src="{{ asset('images/flags/pl.svg')}}" alt="" title="Poland" data-tippy-placement="top"></a></h4>
                                                        <span>Front-End Developer</span>
                                                    </div>
                        
                                                    <!-- Rating -->
                                                    <span class="company-not-rated margin-bottom-5">Minimum of 3 votes required</span>
                                                </div>
                                            </div>
                                            
                                            <!-- Details -->
                                            <div class="freelancer-details">
                                                <div class="freelancer-details-list">
                                                    <ul>
                                                        <li>Location <strong><i class="icon-material-outline-location-on"></i> Warsaw</strong></li>
                                                        <li>Rate <strong>$50 / hr</strong></li>
                                                        <li>Job Success <strong>100%</strong></li>
                                                    </ul>
                                                </div>
                                                <a href="single-freelancer-profile.html" class="button button-sliding-icon ripple-effect">View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
                                            </div>
                                        </div>
                                        <!-- Freelancer / End -->
                        
                                        <!--Freelancer -->
                                        <div class="freelancer">
                        
                                            <!-- Overview -->
                                            <div class="freelancer-overview">
                                                    <div class="freelancer-overview-inner">
                                                    <!-- Bookmark Icon -->
                                                    <span class="bookmark-icon"></span>
                                                    
                                                    <!-- Avatar -->
                                                    <div class="freelancer-avatar">
                                                        <div class="verified-badge"></div>
                                                        <a href="single-freelancer-profile.html"><img src="{{ asset('images/user-avatar-big-03.jpg')}}" alt=""></a>
                                                    </div>
                        
                                                    <!-- Name -->
                                                    <div class="freelancer-name">
                                                        <h4><a href="#">Sindy Forest <img class="flag" src="{{ asset('images/flags/au.svg')}}" alt="" title="Australia" data-tippy-placement="top"></a></h4>
                                                        <span>Magento Certified Developer</span>
                                                    </div>
                        
                                                    <!-- Rating -->
                                                    <div class="freelancer-rating">
                                                        <div class="star-rating" data-rating="5.0"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!-- Details -->
                                            <div class="freelancer-details">
                                                <div class="freelancer-details-list">
                                                    <ul>
                                                        <li>Location <strong><i class="icon-material-outline-location-on"></i> Brisbane</strong></li>
                                                        <li>Rate <strong>$70 / hr</strong></li>
                                                        <li>Job Success <strong>100%</strong></li>
                                                    </ul>
                                                </div>
                                                <a href="single-freelancer-profile.html" class="button button-sliding-icon ripple-effect">View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
                                            </div>
                                        </div>
                                        <!-- Freelancer / End -->
                                        
                                        <!--Freelancer -->
                                        <div class="freelancer">
                        
                                            <!-- Overview -->
                                            <div class="freelancer-overview">
                                                    <div class="freelancer-overview-inner">
                                                    <!-- Bookmark Icon -->
                                                    <span class="bookmark-icon"></span>
                                                    
                                                    <!-- Avatar -->
                                                    <div class="freelancer-avatar">
                                                        <a href="single-freelancer-profile.html"><img src="{{ asset('images/user-avatar-placeholder.png')}}" alt=""></a>
                                                    </div>
                        
                                                    <!-- Name -->
                                                    <div class="freelancer-name">
                                                        <h4><a href="#">Sebastiano Piccio <img class="flag" src="{{ asset('images/flags/it.svg')}}" alt="" title="Italy" data-tippy-placement="top"></a></h4>
                                                        <span>Laravel Dev</span>
                                                    </div>
                        
                                                    <!-- Rating -->
                                                    <div class="freelancer-rating">
                                                        <div class="star-rating" data-rating="4.5"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!-- Details -->
                                            <div class="freelancer-details">
                                                <div class="freelancer-details-list">
                                                    <ul>
                                                        <li>Location <strong><i class="icon-material-outline-location-on"></i> Milan</strong></li>
                                                        <li>Rate <strong>$80 / hr</strong></li>
                                                        <li>Job Success <strong>89%</strong></li>
                                                    </ul>
                                                </div>
                                                <a href="single-freelancer-profile.html" class="button button-sliding-icon ripple-effect">View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
                                            </div>
                                        </div>
                                        <!-- Freelancer / End -->
                                                    
                                        <!--Freelancer -->
                                        <div class="freelancer">
                        
                                            <!-- Overview -->
                                            <div class="freelancer-overview">
                                                    <div class="freelancer-overview-inner">
                                                    <!-- Bookmark Icon -->
                                                    <span class="bookmark-icon"></span>
                                                    
                                                    <!-- Avatar -->
                                                    <div class="freelancer-avatar">
                                                        <a href="single-freelancer-profile.html"><img src="{{ asset('images/user-avatar-placeholder.png')}}" alt=""></a>
                                                    </div>
                        
                                                    <!-- Name -->
                                                    <div class="freelancer-name">
                                                        <h4><a href="#">Gabriel Lagueux <img class="flag" src="{{ asset('images/flags/fr.svg')}}" alt="" title="France" data-tippy-placement="top"></a></h4>
                                                        <span>WordPress Expert</span>
                                                    </div>
                        
                                                    <!-- Rating -->
                                                    <div class="freelancer-rating">
                                                        <div class="star-rating" data-rating="5.0"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!-- Details -->
                                            <div class="freelancer-details">
                                                <div class="freelancer-details-list">
                                                    <ul>
                                                        <li>Location <strong><i class="icon-material-outline-location-on"></i> Paris</strong></li>
                                                        <li>Rate <strong>$50 / hr</strong></li>
                                                        <li>Job Success <strong>100%</strong></li>
                                                    </ul>
                                                </div>
                                                <a href="single-freelancer-profile.html" class="button button-sliding-icon ripple-effect">View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
                                            </div>
                                        </div>
                                        <!-- Freelancer / End --> --}}
                            
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
