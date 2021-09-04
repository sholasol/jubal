<div>
    <div class="dashboard-container">

        <!-- Dashboard Sidebar
        ================================================== -->
        @livewire('admin.admin-sidebar-component') 

        <div class="dashboard-content-container" data-simplebar>
            <div class="dashboard-content-inner" >
                
                <!-- Dashboard Headline -->
                <div class="dashboard-headline">
                    <h3>Recent Jobs</h3>
    
                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs" class="dark">
                        <ul>
                            <li><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li><a href="#">Candidates</a></li>
                        </ul> 
                    </nav>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="col-xl-12">
                            <div class="dashboard-box margin-top-0">
        
                                <!-- Headline -->
                                <div class="headline">
                                    <h3><i class="icon-material-outline-account-circle"></i> Candidates</h3>
                                </div>
                                <div class="content">
                                    <ul class="dashboard-box-list">
                                        <li>
                                            <!-- Overview -->
                                            <div class="freelancer-overview manage-candidates">
                                                <div class="freelancer-overview-inner">
        
                                                    <!-- Avatar -->
                                                    <div class="freelancer-avatar">
                                                        <div class="verified-badge"></div>
                                                        <a href="#"><img src="{{ asset('images/user-avatar-big-03.jpg') }}" alt=""></a>
                                                    </div>
        
                                                    <!-- Name -->
                                                    <div class="freelancer-name">
                                                        <h4><a href="#">Sindy Forest <img class="flag" src="images/flags/au.svg" alt="" title="Australia" data-tippy-placement="top"></a></h4>
        
                                                        <!-- Details -->
                                                        <span class="freelancer-detail-item"><a href="#"><i class="icon-feather-mail"></i> sindy@example.com</a></span>
                                                        <span class="freelancer-detail-item"><i class="icon-feather-phone"></i> (+61) 123-456-789</span>
        
                                                        <!-- Buttons -->
                                                        <div class="buttons-to-right always-visible margin-top-25 margin-bottom-5">
                                                            <a href="#small-dialog" class="popup-with-zoom-anim button dark ripple-effect"><i class="icon-feather-mail"></i> Send Message</a>
                                                            <a href="#" class="button gray ripple-effect ico" title="Remove Candidate" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
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