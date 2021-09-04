<div>
    <div class="dashboard-container">

        <!-- Dashboard Sidebar
        ================================================== -->
        @livewire('admin.admin-sidebar-component') 
        
        <!-- Dashboard Sidebar / End -->
    
    
        <!-- Dashboard Content
        ================================================== -->
        <div class="dashboard-content-container" data-simplebar>
            <div class="dashboard-content-inner" >
                
                <!-- Dashboard Headline -->
                <div class="dashboard-headline">
                    <h3>Howdy, {{ Auth::user()->name }}!</h3>
    
                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs" class="dark">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li>Dashboard</li>
                        </ul>
                    </nav>
                </div>
        
                <!-- Fun Facts Container -->
                <div class="fun-facts-container">
                    <div class="fun-fact" data-fun-fact-color="#36bd78">
                        <div class="fun-fact-text">
                            <span>Ongoing Jobs</span>
                            <h4>{{ $jobs->count() }}</h4>
                        </div>
                        <div class="fun-fact-icon"><i class="icon-material-outline-library-books"></i></div>
                    </div>
                    <div class="fun-fact" data-fun-fact-color="#4863A0">
                        <div class="fun-fact-text">
                            <span>Music Pros</span>
                            <h4>{{ $pros->count() }}</h4>
                        </div>
                        <div class="fun-fact-icon"><i class="icon-feather-users"></i></div>
                    </div>
                    <div class="fun-fact" data-fun-fact-color="#008080">
                        <div class="fun-fact-text">
                            <span>Services</span>
                            <h4>{{ $allservices->count() }}</h4>
                        </div>
                        <div class="fun-fact-icon"><i class="icon-material-outline-rate-review"></i></div>
                    </div>
    
                    <!-- Last one has to be hidden below 1600px, sorry :( -->
                    <div class="fun-fact" data-fun-fact-color="#2a41e6">
                        <div class="fun-fact-text">
                            <span>This Month Views</span>
                            <h4>987</h4>
                        </div>
                        <div class="fun-fact-icon"><i class="icon-feather-trending-up"></i></div>
                    </div>
                </div>
                
                <!-- Row -->
                <div class="row">
    
                    <div class="col-xl-8">
                        <!-- Dashboard Box -->
                        <div class="dashboard-box main-box-in-row">
                            <div class="headline">
                                <h3><i class="icon-feather-bar-chart-2"></i> Your Profile Views</h3>
                                <div class="sort-by">
                                    <select class="selectpicker hide-tick">
                                        <option>Last 6 Months</option>
                                        <option>This Year</option>
                                        <option>This Month</option>
                                    </select>
                                </div>
                            </div>
                            <div class="content">
                                <!-- Chart -->
                                <div class="chart">
                                    <canvas id="chart" width="100" height="45"></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- Dashboard Box / End -->
                    </div>
                    <div class="col-xl-4">
    
                        <!-- Dashboard Box -->
                        <!-- If you want adjust height of two boxes 
                             add to the lower box 'main-box-in-row' 
                             and 'child-box-in-row' to the higher box -->
                        <div class="dashboard-box child-box-in-row"> 
                            <div class="headline">
                                <h3><i class="icon-material-outline-note-add"></i> Notes</h3>
                            </div>	
    
                            <div class="content with-padding">
                                <!-- Note -->
                                <div class="dashboard-note">
                                    <p>Meeting with candidate at 3pm who applied for Bilingual Event Support Specialist</p>
                                    <div class="note-footer">
                                        <span class="note-priority high">High Priority</span>
                                        <div class="note-buttons">
                                            <a href="#" title="Edit" data-tippy-placement="top"><i class="icon-feather-edit"></i></a>
                                            <a href="#" title="Remove" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Note -->
                                <div class="dashboard-note">
                                    <p>Extend premium plan for next month</p>
                                    <div class="note-footer">
                                        <span class="note-priority low">Low Priority</span>
                                        <div class="note-buttons">
                                            <a href="#" title="Edit" data-tippy-placement="top"><i class="icon-feather-edit"></i></a>
                                            <a href="#" title="Remove" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Note -->
                                <div class="dashboard-note">
                                    <p>Send payment to David Peterson</p>
                                    <div class="note-footer">
                                        <span class="note-priority medium">Medium Priority</span>
                                        <div class="note-buttons">
                                            <a href="#" title="Edit" data-tippy-placement="top"><i class="icon-feather-edit"></i></a>
                                            <a href="#" title="Remove" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="add-note-button">
                                    <a href="#small-dialog" class="popup-with-zoom-anim button full-width button-sliding-icon">Add Note <i class="icon-material-outline-arrow-right-alt"></i></a>
                                </div>
                        </div>
                        <!-- Dashboard Box / End -->
                    </div>
                </div>
                <!-- Row / End -->
    
                <!-- Row -->
                <div class="row">
    
                    <!-- Dashboard Box -->
                    <div class="col-xl-6">
                        <div class="dashboard-box">
                            <div class="headline">
                                <h3><i class="icon-feather-user-plus"></i> Recently Joined Music Pros</h3>
                                <button class="mark-as-read ripple-effect-dark" data-tippy-placement="left" title="Mark all as read">
                                        <i class="icon-feather-check-square"></i>
                                </button>
                            </div>
                            <div class="content">
                                <ul class="dashboard-box-list">
                                    @foreach ($profs as $prof)
                                    <li>
                                        <span class="notification-icon"><i class="icon-material-outline-group"></i></span>
                                        <span class="notification-text">
                                            <strong>{{ $prof->name }}</strong> <br> <a href="#">{{  Str::limit($prof->description, 100) }}</a>
                                        </span>
                                        <!-- Buttons -->
                                        <div class="buttons-to-right">
                                            <a href="#" class="button ripple-effect ico" title="Mark as read" data-tippy-placement="left"><i class="icon-feather-check-square"></i></a>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
    
                    <!-- Dashboard Box -->
                    <div class="col-xl-6">
                        <div class="dashboard-box">
                            <div class="headline">
                                <h3><i class="icon-material-outline-credit-card"></i> Escrow Activities</h3>
                            </div>
                            <div class="content">
                                <ul class="dashboard-box-list">
                                    <li>
                                        <div class="invoice-list-item">
                                        <strong>Professional Plan</strong>
                                            <ul>
                                                <li><span class="unpaid">Unpaid</span></li>
                                                <li>Order: #326</li>
                                                <li>Date: 12/08/2018</li>
                                            </ul>
                                        </div>
                                        <!-- Buttons -->
                                        <div class="buttons-to-right">
                                            <a href="pages-checkout-page.html" class="button">Finish Payment</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="invoice-list-item">
                                        <strong>Professional Plan</strong>
                                            <ul>
                                                <li><span class="paid">Paid</span></li>
                                                <li>Order: #264</li>
                                                <li>Date: 10/07/2018</li>
                                            </ul>
                                        </div>
                                        <!-- Buttons -->
                                        <div class="buttons-to-right">
                                            <a href="pages-invoice-template.html" class="button gray">View Invoice</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="invoice-list-item">
                                        <strong>Professional Plan</strong>
                                            <ul>
                                                <li><span class="paid">Paid</span></li>
                                                <li>Order: #211</li>
                                                <li>Date: 12/06/2018</li>
                                            </ul>
                                        </div>
                                        <!-- Buttons -->
                                        <div class="buttons-to-right">
                                            <a href="pages-invoice-template.html" class="button gray">View Invoice</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="invoice-list-item">
                                        <strong>Professional Plan</strong>
                                            <ul>
                                                <li><span class="paid">Paid</span></li>
                                                <li>Order: #179</li>
                                                <li>Date: 06/05/2018</li>
                                            </ul>
                                        </div>
                                        <!-- Buttons -->
                                        <div class="buttons-to-right">
                                            <a href="pages-invoice-template.html" class="button gray">View Invoice</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
    
                </div>
                <!-- Row / End -->
    
                <!-- Footer -->
                <div class="dashboard-footer-spacer"></div>
                <div class="small-footer margin-top-15">
                    <div class="small-footer-copyrights">
                       Copyright Jubal © {{ date('Y') }}  All Rights Reserved.
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
