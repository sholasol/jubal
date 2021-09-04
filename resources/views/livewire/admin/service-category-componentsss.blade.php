<div>
    <div class="dashboard-container">

        <!-- Dashboard Sidebar
        ================================================== -->
        @livewire('admin.admin-sidebar-component') 

        <div class="dashboard-content-container" data-simplebar>
            <div class="dashboard-content-inner" >
                
                <!-- Dashboard Headline -->
                <div class="dashboard-headline">
                    <h3>Service Category</h3>
    
                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs" class="dark">
                        <ul>
                            {{-- <li><a href="{{ route('admin.dashboard') }}">Home</a></li> --}}
                            <li><a href="{{ route('admin.add_service_category') }}">Add New Category</a></li>
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
                                    <h3><i class="icon-material-outline-business-center"></i> Service Category</h3>
                                </div>
        
                                <div class="content">
                                    <ul class="dashboard-box-list">
                                        <li>
                                            <!-- Job Listing -->
                                            <div class="job-listing">
        
                                                <!-- Job Listing Details -->
                                                <div class="job-listing-details">
        
                                                    <!-- Logo -->
                                                    <a href="#" class="job-listing-company-logo">
                                                        <img src="{{ asset('images/company-logo-02.png') }}" alt="">
                                                    </a>
        
                                                    <!-- Details -->
                                                    <div class="job-listing-description">
                                                        <h3 class="job-listing-title"><a href="#">Category name</a></h3>
        
                                                        <!-- Job Listing Footer -->
                                                        <div class="job-listing-footer">
                                                            <ul>
                                                                <li><i class="icon-material-outline-business"></i> Coffee</li>
                                                                <li><i class="icon-material-outline-location-on"></i> San Francisco</li>
                                                                <li><i class="icon-material-outline-business-center"></i> Full Time</li>
                                                                <li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Buttons -->
                                            <div class="buttons-to-right">
                                                <a href="#" class="button red ripple-effect ico" title="Remove" data-tippy-placement="left"><i class="icon-feather-trash-2"></i></a>
                                            </div>
                                        </li>
        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
