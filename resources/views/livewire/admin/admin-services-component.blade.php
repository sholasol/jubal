<div>
    <div class="dashboard-container">

        <!-- Dashboard Sidebar
        ================================================== -->
        @livewire('admin.admin-sidebar-component') 

        <div class="dashboard-content-container" data-simplebar>
            <div class="dashboard-content-inner" >
                
                <!-- Dashboard Headline -->
                <div class="dashboard-headline">
                    <h3>All Services</h3>
    
                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs" class="dark">
                        <ul>
                            {{-- <li><a href="{{ route('admin.dashboard') }}">Home</a></li> --}}
                            <li><a href="{{ route('admin.add_service') }}">Add New Service</a></li>
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
                                    <h3><i class="icon-line-awesome-file-sound-o"></i> Services</h3>
                                </div>
        
                                <div class="content">
                                    <ul class="dashboard-box-list">
                                        @foreach ($services as $service)
                                        <li>
                                            <!-- Job Listing -->
                                            <div class="job-listing">
        
                                                <!-- Job Listing Details -->
                                                <div class="job-listing-details">
        
                                                    <!-- Logo -->
                                                    <a href="#" class="job-listing-company-logo">
                                                        <img src="{{ asset('asset/image/services')}}/{{ $service->image }}" alt="Jubal">
                                                    </a>
        
                                                    <!-- Details -->
                                                    <div class="job-listing-description">
                                                        <h3 class="job-listing-title"><a href="#">{{ $service->name }}</a></h3>
        
                                                        <!-- Job Listing Footer -->
                                                        <div class="job-listing-footer">
                                                            <ul>
                                                                <li> Created</li>
                                                                <li><i class="icon-material-outline-date-range"></i> {{ $service->created_at->format('Y-m-d')  }}</li>
                                                                <li><i class="icon-material-outline-access-time"></i> {{ $service->created_at->diffForHumans() }}</li>
                                                            </ul>
                                                        </div>
                                                    </div>  
                                                </div>  
                                            </div>
                                            <!-- Buttons -->
                                            <div class="buttons-to-right">
                                                <a href="{{ route('admin.editservice', ['service_id'=>$service->id]) }}" class="button green ripple-effect ico" title="Edit" data-tippy-placement="left"><i class="icon-feather-edit"></i></a>
                                                <a href="" onclick="confirm('Are you sure, you want to delete this Service?') ||event.stopImmediatePropagation()" wire:click.prevent="deleteService({{ $service->id }})"
                                                 class="button red ripple-effect ico" title="Remove" data-tippy-placement="left"><i class="icon-feather-trash-2"></i></a>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{ $services->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
