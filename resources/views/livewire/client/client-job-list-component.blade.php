<div>
    <div class="dashboard-container">

        <!-- Dashboard Sidebar
        ================================================== -->
        @livewire('client.client-sidebar-component') 

        <div class="dashboard-content-container" data-simplebar>
            <div class="dashboard-content-inner" >
                
                <!-- Dashboard Headline -->
                <div class="dashboard-headline">
                    <h3>My Jobs</h3>
    
                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs" class="dark">
                        <ul>
                            <li><a href="{{ route('client.dashboard') }}">Home</a></li>
                            <li><a href="{{ route('client.post-job') }}">Post Job</a></li>
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
                                    <h3><i class="icon-line-awesome-file-sound-o"></i> Jobs</h3>
                                </div>
        
                                <div class="content">
                                    <ul class="dashboard-box-list">
                                        @if ($jobs->count() > 0)
                                        @foreach ($jobs as $job)
                                        <li>
                                            <!-- Job Listing -->
                                            <div class="job-listing"> 
        
                                                <!-- Job Listing Details -->
                                                <div class="job-listing-details">
        
                                                    <!-- Logo -->
                                                    <a href="#" class="job-listing-company-logo">
                                                        <img src="{{ asset('asset/my_jobs.png')}}" alt="Jubal">
                                                    </a>
        
                                                    <!-- Details -->
                                                    <div class="job-listing-description">
                                                        <h3 class="job-listing-title"><a href="#">{{ $job->title }}</a></h3>
        
                                                        <!-- Job Listing Footer -->
                                                        <div class="job-listing-footer">
                                                            <ul>
                                                                <li> Created</li>
                                                                <li><i class="icon-material-outline-date-range"></i> {{ $job->created_at->format('Y-m-d')  }}</li>
                                                                <li><i class="icon-material-outline-access-time"></i> {{ $job->created_at->diffForHumans() }}</li>
                                                            </ul>
                                                        </div>
                                                    </div>  
                                                </div>  
                                            </div>
                                            <!-- Buttons -->
                                            <div class="buttons-to-right">
                                                <a href="{{ route('admin.editservice', ['service_id'=>$job->id]) }}" class="button green ripple-effect ico" title="Edit" data-tippy-placement="left"><i class="icon-feather-edit"></i></a>
                                                <a href="" onclick="confirm('Are you sure, you want to delete this Service?') ||event.stopImmediatePropagation()" wire:click.prevent="deleteService({{ $job->id }})"
                                                 class="button red ripple-effect ico" title="Remove" data-tippy-placement="left"><i class="icon-feather-trash-2"></i></a>
                                            </div>
                                        </li>
                                        @endforeach
                                        @else
                                        <li>
                                            <!-- Job Listing -->
                                            <div class="job-listing"> 
        
                                                <!-- Job Listing Details -->
                                                <div class="job-listing-details">
        
                                                    <!-- Logo -->
                                                    <a href="#" class="job-listing-company-logo">
                                                        <img src="{{ asset('asset/my_jobs.png')}}" alt="Jubal">
                                                    </a>
        
                                                    <!-- Details -->
                                                    <div class="job-listing-description">
                                                        <h3 class="job-listing-title"><a href="#" style="color: crimson;">No Jobs Available</a></h3>
                                                    </div>  
                                                </div>  
                                            </div>
                                        </li>
                                        @endif
                                    </ul> 
                                </div>
                            </div>
                        </div>
                    </div>
                    {{ $jobs->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
