<div>
    <div class="full-page-container">

        @livewire('client.client-sidebar-component') 
        <!-- Full Page Sidebar / End -->
        
        <!-- Full Page Content -->
        <div class="full-page-content-container" data-simplebar>
            <div class="full-page-content-inner">
    
                <h3 class="page-title">Search Results</h3>
    
                <div class="notify-box margin-top-15">
                    <div class="switch-container">
                        <label class="switch"><input type="checkbox"><span class="switch-button"></span><span class="switch-text">Turn on email alerts for this search</span></label>
                    </div>
    
                    <div class="sort-by">
                        <span>Sort by:</span>
                        <select class="selectpicker hide-tick">
                            <option>Relevance</option>
                            <option>Newest</option>
                            <option>Oldest</option>
                            <option>Random</option>
                        </select>
                    </div>
                </div>
    
                <!-- Freelancers List Container -->
                <div class="freelancers-container freelancers-grid-layout margin-top-35">
                    
                    <!--Freelancer -->
                    @foreach ($profs as $prof)
                        <div class="freelancer">
        
                            <!-- Overview -->
                            <div class="freelancer-overview">
                                <div class="freelancer-overview-inner">
                                    
                                    <!-- Bookmark Icon -->
                                    <span class="bookmark-icon"></span>
                                    
                                    <!-- Avatar -->
                                    <div class="freelancer-avatar">
                                        <div class="verified-badge"></div>
                                        <a href="{{ route('client.hiring',['pro_id'=>$prof->user_id]) }}"><img src="{{ asset('asset/image/profiles') }}/{{$prof->image }}" alt=""></a>
                                    </div>
        
                                    <!-- Name -->
                                    <div class="freelancer-name">
                                        <h4><a href="{{ route('client.hiring',['pro_id'=>$prof->user_id]) }}">{{$prof->name }} <img class="flag" src="{{ asset('images/flags/gb.svg')}}" alt="" title="United Kingdom" data-tippy-placement="top"></a></h4>
                                        <span>{{$prof->category }}</span>
                                    </div>
        
                                    <!-- Rating -->
                                    <div class="freelancer-rating">
                                        <div class="star-rating" data-rating="4.9"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Details -->
                            <div class="freelancer-details">
                                <div class="freelancer-details-list">
                                    <ul>
                                        <li>Location <strong><i class="icon-material-outline-location-on"></i> {{$prof->country }}</strong></li>
                                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <li>Rate <strong>${{$prof->rate }}</strong></li>
                                    </ul>
                                </div>
                                <a href="{{ route('client.hiring',['pro_id'=>$prof->user_id]) }}" class="button button-sliding-icon ripple-effect">View/Hire {{ $prof->name }} <i class="icon-material-outline-arrow-right-alt"></i></a>
                            </div>
                        </div>
                    @endforeach
                    <!-- Freelancer / End -->
    
        
                </div>
                <!-- Freelancers Container / End -->
    
                <!-- Pagination -->
                <div class="clearfix"></div>
                <div class="pagination-container margin-top-20 margin-bottom-20">
                    <nav class="pagination">
                        <ul>
                            <li class="pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-left"></i></a></li>
                            <li><a href="#" class="ripple-effect">1</a></li>
                            <li><a href="#" class="ripple-effect current-page">2</a></li>
                            <li><a href="#" class="ripple-effect">3</a></li>
                            <li><a href="#" class="ripple-effect">4</a></li>
                            <li class="pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
                <div class="clearfix"></div>
                <!-- Pagination / End -->
    
                <!-- Footer -->
                <div class="small-footer margin-top-15">
                    <div class="small-footer-copyrights">
                        Jubal Copyright &copy;  {{ date('Y') }}  All Rights Reserved.
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
        <!-- Full Page Content / End -->
    
    </div>
    
</div>
