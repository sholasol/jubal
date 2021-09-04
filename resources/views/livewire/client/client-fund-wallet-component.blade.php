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
                
                <!-- Dashboard Headline -->
                <div class="dashboard-headline">
                    <h3>Fund Wallet</h3>
    
                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs" class="dark">
                        <ul>
                            <li><a href="{{ route('client.dashboard') }}">Dashboard</a></li>
                            <li>Fund Wallet</li>
                        </ul>
                    </nav>
                </div>
        
                <!-- Row -->
                <form  enctype="multipart/form-data">
                    @csrf
                <div class="row">
    
                    <!-- Dashboard Box -->
                    <div class="col-xl-12">
                        <div class="dashboard-box margin-top-0">
    
                            <!-- Headline -->
                            <div class="headline">
                                <h3><i class="icon-feather-folder-plus"></i> Job Submission Form</h3>
                            </div>
                            <div class="content with-padding padding-bottom-10">
                                <div class="row">
     
                                    <div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>Amount</h5>
                                            <input type="text" class="with-border" wire:model="title">
                                            @error('title')<p style="color: crimson;">{{ $message }}</p> @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>Card</h5>
                                            <input type="text" class="with-border" wire:model="title">
                                            @error('title')<p style="color: crimson;">{{ $message }}</p> @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
    
                    <div class="col-xl-12">
                        <button type="submit" class="button ripple-effect big margin-top-30"><i class="icon-feather-plus"></i> Fund Wallet</button>
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
