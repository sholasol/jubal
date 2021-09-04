<div> 
    <div class="dashboard-container">

        <!-- Dashboard Sidebar
        ================================================== -->
        @livewire('client.client-sidebar-component') 
        <!-- Dashboard Sidebar / End -->
    
    
        <!-- Dashboard Content
        ================================================== -->
        <div class="dashboard-content-container" data-simplebar>
            <div class="dashboard-content-inner" >

                <div class="single-page-header freelancer-header" data-background-image="{{ asset('asset/job_bg.jpg') }}">
                  <div class="container">
                    <div class="row"> 
                        <div class="col-md-12">
                            <div class="single-page-header-inner">
                                <div class="left-side">
                                    <div class="header-image freelancer-avatar"><img src="{{ asset('asset/image/profiles') }}/{{ $prof->image }}" alt=""></div>
                                    <div class="header-details">
                                        <h3>{{ $prof->name }} <span>{{ $prof->category }}</span></h3>
                                        <ul>
                                            <li><div class="star-rating" data-rating="5.0"></div></li>
                                            <li><img class="flag" src="{{ asset('images/flags/de.svg') }}" alt=""> {{ $prof->country }}</li>
                                            <li><div class="verified-badge-with-title">Verified</div></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                
                <!-- Dashboard Headline --> 
                <div class="dashboard-headline">
                    <h3>Hire Professional</h3>
    
                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs" class="dark">
                        <ul>
                            <li><a href="{{ route('client.dashboard') }}">Dashboard</a></li>
                            <li>Hire Muisic Pro</li>
                        </ul>
                    </nav>
                </div>

                <div class="container">
                    <div class="row">
                        
                        <!-- Content -->
                        <div class="col-xl-8 col-lg-8 content-right-offset">
                            
                            <!-- Page Content -->
                            <div class="single-page-section">
                                <h3 class="margin-bottom-25">About Me</h3>
                                <p align="justify">
                                    {!! $prof->description !!}
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <div class="sidebar-container">
                                <div class="profile-overview">
                                    <div class="overview-item"><strong>${{ $prof->rate }}</strong><span>Hourly Rate</span></div>
                                    <div class="overview-item"><strong>{{ $jobs->count() }}</strong><span>Jobs Done</span></div>
                                    {{-- <div class="overview-item"><strong>22</strong><span>Rehired</span></div> --}}
                                </div>
                  
                                <!-- Button -->
                                <a href="#" class="apply-now-button  margin-bottom-50">{{ $prof->name }}<i class="icon-material-outline-arrow-right-alt"></i></a>
                                
                                <!-- Skills-->
                                <div class="col-xl-12 col-md-12">
                                    <h3>Demo link</h3>
                                    <ul class="list-1">
                                        <li>{{ $prof->link }}</li>
                                        <li>{{ $prof->link1 }}</li>
                                        <li>{{ $prof->link2 }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
                <!-- Row -->
                <form wire:submit.prevent="postJob" enctype="multipart/form-data">
                    @csrf
                <div class="row">
    
                    <!-- Dashboard Box -->
                    <div class="col-xl-12">
                        <div class="dashboard-box margin-top-0">
    
                            <!-- Headline -->
                            <div class="headline">
                                <h3><i class="icon-feather-folder-plus"></i> Service Request Form</h3>
                            </div>
    
                            <div class="content with-padding padding-bottom-10">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Category of Service</h5>
                                            <select class=" with-border"  wire:model="service_category">
                                                <option>{{ $prof->category }}</option>
                                            </select>
                                            @error('service_category')<p style="color: crimson;">{{ $message }}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Project Title</h5>
                                            <input type="text" class="with-border" wire:model="title">
                                            @error('title')<p style="color: crimson;">{{ $message }}</p> @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>City</h5>
                                            <input type="text" class="with-border" wire:model="city">
                                            @error('city')<p style="color: crimson;">{{ $message }}</p> @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                        <div class="submit-field">
                                            <h5>Service Description</h5>
                                            <textarea cols="30" rows="5" class="with-border" wire:model="comment"></textarea>
                                            @error('comment')<p style="color: crimson;">{{ $message }}</p> @enderror
                                        </div>
                                    </div> 
    
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-xl-12">
                        <button type="submit" class="button ripple-effect big margin-top-30"><i class="icon-feather-plus"></i> Submit Request</button>
                    </div>
    
                </div>
                </form>
                <!-- Row / End -->
    
                <!-- Footer -->
                <div class="dashboard-footer-spacer"></div>
                <div class="small-footer margin-top-15">
                    <div class="small-footer-copyrights">
                         <strong>Jubal</strong> &copy; {{ date('Y') }} All Rights Reserved.
                    </div>
                    <ul class="footer-social-links">
                        <li>
                            <a href="#" title="Facebook" data-tippy-placement="top">
                                <i class="icon-brand-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Twitter" data-tippy-placement="top">
                                <i class="icon-brand-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Google Plus" data-tippy-placement="top">
                                <i class="icon-brand-google-plus-g"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="LinkedIn" data-tippy-placement="top">
                                <i class="icon-brand-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <!-- Footer / End -->
    
            </div>
        </div>
        <!-- Dashboard Content / End -->
    
    </div>
</div>

@push('scripts')
    <script>
        $(function(){
            tinymce.init({
                selector:'#description',
                setup:function(editor){
                    editor.on('Change',function(e){
                        tinyMCE.triggerSave();
                        var d_data = $('#description').val(); //d_data is variable for description data
                        @this.set('description', d_data);
                    });
                }
            });
        });
    </script>
@endpush