<div>
    <div class="dashboard-container">

        <!-- Dashboard Sidebar
        ================================================== -->
        @livewire('client.client-sidebar-component') 

        <div class="dashboard-content-container" data-simplebar>
            <div class="dashboard-content-inner" >
                
                <!-- Dashboard Headline -->
                <div class="dashboard-headline">
                    <h3>Hirings</h3>
    
                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs" class="dark">
                        <ul>
                            <li><a href="{{ route('client.dashboard') }}">Home</a></li>
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
                                    <h3><i class="icon-material-outline-business-center"></i> Recent Hirings</h3>
                                </div>
        
                                <div class="content">
                                    <ul class="dashboard-box-list">
                                        @foreach ($hires as $hire)
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
                                                        <h3 class="job-listing-title"><a href="#">{{ $hire->title }} || Pro Name: {{ $hire->pro_id }}</a></h3>
        
                                                        <!-- Job Listing Footer -->
                                                        <div class="job-listing-footer">
                                                            <ul> 
                                                                <li> Created</li>
                                                                <li><i class="icon-material-outline-date-range"></i> {{ $hire->created_at->format('Y-m-d')  }}</li>
                                                                <li><i class="icon-material-outline-access-time"></i> {{ $hire->created_at->diffForHumans() }}</li>
                                                            </ul>
                                                            <div class="buttons-to-right always-visible">
                                                                <a href="" onclick="confirm('Accept this offer?') ||event.stopImmediatePropagation()" class="button ripple-effect" ><i class="icon-material-outline-check"></i> Accept Offer </a>
                                                            </div>
                                                        </div>
                                                    </div>  
                                                </div>  
                                            </div>
                                            <!-- Buttons -->
                                            {{-- <div class="buttons-to-right">
                                                <a href="" onclick="confirm('Are you sure, you want to delete this job?') ||event.stopImmediatePropagation()" wire:click.prevent="deleteJob({{ $hire->id }})"
                                                 class="button red ripple-effect ico" title="Remove" data-tippy-placement="left"><i class="icon-feather-trash-2"></i></a>
                                            </div> --}}
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        {{ $hires->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
