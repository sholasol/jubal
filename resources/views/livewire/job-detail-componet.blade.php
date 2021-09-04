<div>
    <div class="single-page-header" data-background-image="{{ asset('asset/job_bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="single-page-header-inner">
                        <div class="left-side">
                            <div class="header-image"><a href="#"><img src="{{ asset('asset/my_jobs.png') }}" alt=""></a></div>
                            <div class="header-details">
                                <h3>{{ $job->title }}</h3>
                                <h5>{!!  substr(strip_tags($job->additional_information), 0, 150) !!}</h5>
                                <ul>
                                    <li><a href="#"><i class="icon-material-outline-business"></i> King</a></li>
                                    <li><div class="star-rating" data-rating="4.9"></div></li>
                                    <li><img class="flag" src="{{ asset('images/flags/gb.svg') }}" alt=""> United Kingdom</li>
                                    <li><div class="verified-badge-with-title">Verified</div></li>
                                </ul>
                            </div>
                        </div>
                        <div class="right-side">
                            <div class="salary-box">
                                <div class="salary-type">Renumeration</div>
                                <div class="salary-amount">₦35k - ₦38k</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <!-- Page Content
    ================================================== -->
    <div class="container">
        <div class="row">
            
            <!-- Content -->
            <div class="col-xl-8 col-lg-8 content-right-offset">
    
                <div class="single-page-section">
                    
                    <p>
                        <div class="boxed-widget summary margin-top-0">
                            <div class="boxed-widget-headline">
                                <h3>Job Detail</h3>
                            </div>
                        @if($job->service_category=="Mixing Enginer")
                        
                            <div class="boxed-widget-inner">
                                <ul>
                                    <li>Genre <span>{{ $job->genre }}</span></li>
                                    <li class="total-costs">Recording Type<span>{{ $job->recording_type }}</span></li>
                                    <li class="total-costs">Timelines <span>{{ $job->timeline }}</span></li>
                                    <li class="total-costs">References <span>{{ $job->reference }}</span></li>
                                </ul>
                            </div>
                        @elseif($job->service_category=="Performing Artists")

                        <div class="boxed-widget-inner">
                            <ul>
                                <li>Male <span>{{ $job->male }}</span></li>
                                <li class="total-costs">Female<span>{{ $job->female }}</span></li>
                                <li class="total-costs">Total Singer <span>{{ $job->no_singer }}</span></li>
                                <li class="total-costs">Total Songs <span>{{ $job->no_song }}</span></li>
                                <li class="total-costs">Timeline <span>{{ $job->timeline }}</span></li>
                                <li class="total-costs">Demo 
                                        
                                    <span>
                                        <audio controls>
                                            <source src="horse.ogg" type="audio/ogg">
                                            <source src="{{ asset('asset/image/demos') }}/{{ $job->demo }}" type="audio/mpeg">
                                          Your browser does not support the audio element.
                                          </audio> 
                                    </span>
                                </li>
                            </ul>
                        </div>

                        @elseif($job->service_category=="Recording Studio")

                        {{-- <div class="boxed-widget-inner">
                            <ul>
                                <li>Male <span>{{ $job->male }}</span></li>
                                <li class="total-costs">Female<span>{{ $job->female }}</span></li>
                                <li class="total-costs">Total Singer <span>{{ $job->no_singer }}</span></li>
                                <li class="total-costs">Total Songs <span>{{ $job->no_song }}</span></li>
                                <li class="total-costs">Timeline <span>{{ $job->timeline }}</span></li>
                                <li class="total-costs">Demo 
                                        
                                        <span>
                                            <audio controls>
                                                <source src="horse.ogg" type="audio/ogg">
                                                <source src="{{ asset('asset/image/demos') }}/{{ $job->demo }}" type="audio/mpeg">
                                              Your browser does not support the audio element.
                                              </audio> 
                                        </span>
                                    </li>
                            </ul>
                        </div> --}}

                        @elseif($job->service_category=="Song Writers")

                        <div class="boxed-widget-inner">
                            <ul>
                                <li>Number of Songs <span>{{ $job->no_song }}</span></li>
                                <li class="total-costs">Proposed Title<span>{{ $job->proposed_title }}</span></li>
                                <li class="total-costs">Nature of Writing <span>{{ $job->writing_nature }}</span></li>
                                <li class="total-costs">Language <span>{{ $job->language }}</span></li>
                                <li class="total-costs">Genre <span>{{ $job->genre }}</span></li>
                                <li class="total-costs">Timeline <span>{{ $job->timeline }}</span></li>
                            </ul>
                        </div>

                        @elseif($job->service_category=="Music Producer")
                            <div class="boxed-widget-inner">
                                <ul>
                                    <li>Number of Songs <span>{{ $job->no_song }}</span></li>
                                    <li class="total-costs">Genre<span>{{ $job->genre }}</span></li>
                                    <li class="total-costs">Stage of Production <span>{{ $job->production_stage }}</span></li>
                                    <li class="total-costs">Calibre of Producer <span>{{ $job->producer_caliber }}</span></li>
                                    <li class="total-costs">Timeline <span>{{ $job->timeline }}</span></li>
                                    <li class="total-costs">Demo 
                                        
                                        <span>
                                            <audio controls>
                                                <source src="horse.ogg" type="audio/ogg">
                                                <source src="{{ asset('asset/image/demos') }}/{{ $job->demo }}" type="audio/mpeg">
                                              Your browser does not support the audio element.
                                              </audio> 
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        @elseif($job->service_category=="Mastering Engineer")

                            <div class="boxed-widget-inner">
                                <ul>
                                    <li>Genre <span>{{ $job->genre }}</span></li>
                                    <li class="total-costs">Reference<span>{{ $job->reference }}</span></li>
                                    <li class="total-costs">Timeline <span>{{ $job->timeline }}</span></li>
                                    <li class="total-costs">Demo 
                                        
                                        <span>
                                            <audio controls>
                                                <source src="horse.ogg" type="audio/ogg">
                                                <source src="{{ asset('asset/image/demos') }}/{{ $job->demo }}" type="audio/mpeg">
                                              Your browser does not support the audio element.
                                              </audio> 
                                        </span>
                                    </li>
                                </ul>
                            </div>

                        @elseif($job->service_category=="Voice Coaches and Trainers")


                            <div class="boxed-widget-inner">
                                <ul>
                                    <li>Area of Learning <span>{{ $job->learning_area }}</span></li>
                                    <li class="total-costs">Instrument<span>{{ $job->instrument }}</span></li>
                                    <li class="total-costs">Scope of Learning <span>{{ $job->learning_scope }}</span></li>
                                    <li class="total-costs">Age range of Trainee <span>{{ $job->trainee_age }}</span></li>
                                    <li class="total-costs">Location <span>{{ $job->location }}</span></li>
                                    <li class="total-costs">Previous Knowledge <span>{{ $job->prior_knowledge }}</span></li>
                                    <li class="total-costs">Level of Proficiency <span>{{ $job->proficiency }}</span></li>
                                </ul>
                            </div>

                        @elseif($job->service_category=="Studio Engineers")


                            {{-- <div class="boxed-widget-inner">
                                <ul>
                                    <li>Area of Learning <span>{{ $job->learning_area }}</span></li>
                                    <li class="total-costs">Instrument<span>{{ $job->instrument }}</span></li>
                                    <li class="total-costs">Scope of Learning <span>{{ $job->learning_scope }}</span></li>
                                    <li class="total-costs">Age range of Trainee <span>{{ $job->trainee_age }}</span></li>
                                    <li class="total-costs">Location <span>{{ $job->location }}</span></li>
                                    <li class="total-costs">Previous Knowledge <span>{{ $job->prior_knowledge }}</span></li>
                                    <li class="total-costs">Level of Proficiency <span>{{ $job->proficiency }}</span></li>
                                </ul>
                            </div> --}}

                        @elseif($job->service_category=="Beat Makers")
                            <div class="boxed-widget-inner">
                                <ul>
                                    <li>Style of Music <span>{{ $job->music_style }}</span></li>
                                    <li class="total-costs">Fresh/Already made Beat<span>{{ $job->fresh_beat }}</span></li>
                                    <li class="total-costs">No of Beats <span>{{ $job->no_beat }}</span></li>
                                    <li class="total-costs">Timeline<span>{{ $job->timeline }}</span></li>
                                    <li class="total-costs">Caliber of Beat Maker <br>
                                        {{ $job->beat_maker_caliber }}
                                    </li>
                                    <li class="total-costs">Demo 
                                        
                                        <span>
                                            <audio controls>
                                                <source src="horse.ogg" type="audio/ogg">
                                                <source src="{{ asset('asset/image/demos') }}/{{ $job->demo }}" type="audio/mpeg">
                                              Your browser does not support the audio element.
                                              </audio> 
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        @elseif($job->service_category=="Deejays")

                            <div class="boxed-widget-inner">
                                <ul>
                                    <li>Deejay/Live Band <span>{{ $job->music_style }}</span></li>
                                    <li class="total-costs">Location<span>{{ $job->fresh_beat }}</span></li>
                                    <li class="total-costs">Nature of Event <span>{{ $job->nature_event }}</span></li>
                                    <li class="total-costs">Event Type<span>{{ $job->event_type }}</span></li>
                                    <li class="total-costs">Number of Guest <span>{{ $job->no_guest }}</span></li>
                                    <li class="total-costs">Equipment Available <span>{{ $job->equipment_available }}</span></li>
                                    <li class="total-costs">Any Particular Song <span>{{ $job->preferred_song }}</span></li>
                                    <li class="total-costs">Event Date <span>{{ $job->event_date }}</span></li>
                                </ul>
                            </div>

                        @elseif($job->service_category=="Rehearsal Studio")
                        <div class="boxed-widget-inner">
                            <ul>
                                <li>How Many Instrumentalist <span>{{ $job->no_instrumentalist }}</span></li>
                                <li class="total-costs">Categories of Musicians<span>{{ $job->nature_musician }}</span></li>
                                <li class="total-costs">No. of Sessions <span>{{ $job->no_session }}</span></li>
                                <li class="total-costs">Nature of Performance<span>{{ $job->nature_performance }}</span></li>
                                <li class="total-costs">No. of Locations <span>{{ $job->no_location }}</span></li>
                                <li class="total-costs">Original/Cover Song <span>{{ $job->song_type }}</span></li>
                            </ul>
                        </div>
                        @elseif($job->service_category=="Music Video Director")
                        <div class="boxed-widget-inner">
                            <ul>
                                <li>Number of Songs <span>{{ $job->no_song }}</span></li>
                                <li class="total-costs">Timeline<span>{{ $job->timeline_delivery }}</span></li>
                                <li class="total-costs">Director Caliber <span>{{ $job->director_caliber }}</span></li>
                                <li class="total-costs">Demo 
                                        
                                    <span>
                                        <audio controls>
                                            <source src="horse.ogg" type="audio/ogg">
                                            <source src="{{ asset('asset/image/demos') }}/{{ $job->demo }}" type="audio/mpeg">
                                          Your browser does not support the audio element.
                                          </audio> 
                                    </span>
                                </li>
                            </ul>
                        </div>
                        @elseif($job->service_category=="Lyrics Video Makers")
                            <div class="boxed-widget-inner">
                                <ul>
                                    <li>No. of Songs <span>{{ $job->no_song }}</span></li>
                                    <li class="total-costs">Timelines<span>{{ $job->timeline_delivery }}</span></li>
                                    <li class="total-costs">Caliber of Director <span>{{ $job->director_caliber }}</span></li>
                                    <li class="total-costs">Uploaded Song<span>{{ $job->demo }}</span></li>
                                </ul>
                            </div>
                        @elseif($job->service_category=="Music Instructor")
                        <div class="boxed-widget-inner">
                            <ul>
                                <li>Area of Learning <span>{{ $job->learning_area }}</span></li>
                                <li class="total-costs">Specified Instrument<span>{{ $job->instrument }}</span></li>
                                <li class="total-costs">Scope/Learning Target <span>{{ $job->learning_scope }}</span></li>
                                <li class="total-costs">Trainee Age<span>{{ $job->trainee_age }}</span></li>
                                <li class="total-costs">Preferred Location <span>{{ $job->preferred_location }}</span></li>
                                <li class="total-costs">Prior Knowledge <span>{{ $job->prior_knowledge }}</span></li>
                                <li class="total-costs">Current Level of Proficiency <span>{{ $job->proficiency }}</span></li>
                            </ul>
                        </div>
                        @elseif($job->service_category=="Instrumentalists")

                        {{-- <div class="boxed-widget-inner">
                            <ul>
                                <li>Area of Learning <span>{{ $job->learning_area }}</span></li>
                                <li class="total-costs">Specified Instrument<span>{{ $job->instrument }}</span></li>
                                <li class="total-costs">Scope/Learning Target <span>{{ $job->learning_scope }}</span></li>
                                <li class="total-costs">Trainee Age<span>{{ $job->trainee_age }}</span></li>
                                <li class="total-costs">Preferred Location <span>{{ $job->preferred_location }}</span></li>
                                <li class="total-costs">Prior Knowledge <span>{{ $job->prior_knowledge }}</span></li>
                                <li class="total-costs">Current Level of Proficiency <span>{{ $job->proficiency }}</span></li>
                            </ul>
                        </div> --}}

                        @elseif($job->service_category=="Singers / Vocalists")

                        <div class="boxed-widget-inner">
                            <ul>
                                <li>Gender <span>{{ $job->gender }}</span></li>
                                <li class="total-costs">No. of Female Singers<span>{{ $job->female }}</span></li>
                                <li class="total-costs">No. of Male Singers<span>{{ $job->male }}</span></li>
                                <li class="total-costs">No. of  Singers<span>{{ $job->no_singer }}</span></li>
                                <li class="total-costs">No. of Songs <span>{{ $job->no_song }}</span></li>
                                <li class="total-costs">Live/Studio Recording<span>{{ $job->trainee_age }}</span></li>
                                <li class="total-costs">Recording Proxy <span>{{ $job->work_proxy }}</span></li>
                                <li class="total-costs">Timeline <span>{{ $job->timeline_delivery }}</span></li>
                            </ul>
                        </div>

                        @elseif($job->service_category=="Album Art Designer")
                        <div class="boxed-widget-inner">
                            <ul>
                                <li>Nature & Scope <span>{{ $job->nature_album }}</span></li>
                                <li class="total-costs">Artist Name/Song/Album title<span>{{ $job->artist_name }}</span></li>
                                <li class="total-costs">Timeline <span>{{ $job->timeline_delivery }}</span></li>
                                <li class="total-costs">Demo 
                                        
                                    <span>
                                        <audio controls>
                                            <source src="horse.ogg" type="audio/ogg">
                                            <source src="{{ asset('asset/image/demos') }}/{{ $job->demo }}" type="audio/mpeg">
                                          Your browser does not support the audio element.
                                          </audio> 
                                    </span>
                                </li>
                            </ul>
                        </div>

                        @elseif($job->service_category=="Pianist")

                            
                        @endif
                    </div> 
                    </p>
                    <h3 class="margin-bottom-25">Additional Information</h3>
                    <p>{!! $job->additional_information !!}</p>
                </div>
    
                {{-- <div class="single-page-section">
                    <h3 class="margin-bottom-30">Location</h3>
                    <div id="single-job-map-container">
                        <div id="singleListingMap" data-latitude="51.507717" data-longitude="-0.131095" data-map-icon="im im-icon-Hamburger"></div>
                        <a href="#" id="streetView">Street View</a>
                    </div>
                </div> --}}
    
                    {{-- <div class="single-page-section">
                        <h3 class="margin-bottom-25">Similar Jobs</h3>
    
                        <!-- Listings Container -->
                        <div class="listings-container grid-layout">
    
                            <!-- Job Listing -->
                            <a href="#" class="job-listing">
    
                                <!-- Job Listing Details -->
                                <div class="job-listing-details">
                                    <!-- Logo -->
                                    <div class="job-listing-company-logo">
                                        <img src="{{ asset('asset/music.jpg') }}" alt="">
                                    </div>
    
                                    <!-- Details -->
                                    <div class="job-listing-description">
                                        <h4 class="job-listing-company">Coffee</h4>
                                        <h3 class="job-listing-title">Barista and Cashier</h3>
                                    </div>
                                </div>
    
                                <!-- Job Listing Footer -->
                                <div class="job-listing-footer">
                                    <ul>
                                        <li><i class="icon-material-outline-location-on"></i> San Francisco</li>
                                        <li><i class="icon-material-outline-business-center"></i> Full Time</li>
                                        <li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000</li>
                                        <li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
                                    </ul>
                                </div>
                            </a>
    
                            <!-- Job Listing -->
                            <a href="#" class="job-listing">
    
                                <!-- Job Listing Details -->
                                <div class="job-listing-details">
                                    <!-- Logo -->
                                    <div class="job-listing-company-logo">
                                        <img src="{{ asset('asset/music.png') }}" alt="">
                                    </div>
    
                                    <!-- Details -->
                                    <div class="job-listing-description">
                                        <h4 class="job-listing-company">King <span class="verified-badge" title="Verified Employer" data-tippy-placement="top"></span></h4>
                                        <h3 class="job-listing-title">Restaurant Manager</h3>
                                    </div>
                                </div>
    
                                <!-- Job Listing Footer -->
                                <div class="job-listing-footer">
                                    <ul>
                                        <li><i class="icon-material-outline-location-on"></i> San Francisco</li>
                                        <li><i class="icon-material-outline-business-center"></i> Full Time</li>
                                        <li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000</li>
                                        <li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                        <!-- Listings Container / End -->
    
                    </div> --}}
            </div>
            
    
            <!-- Sidebar -->
            <div class="col-xl-4 col-lg-4">
                <div class="sidebar-container">
                    <form wire:submit.prevent="applyJob" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $job->title }}" wire:model="pro_name">
                        <input type="submit" value="Apply Now" class="apply-now-button">
                    </form> 
                        
                    <!-- Sidebar Widget -->
                    <div class="sidebar-widget">
                        <div class="job-overview">
                            <div class="job-overview-headline">Job Summary</div>
                            <div class="job-overview-inner">
                                <ul>
                                    <li>
                                        <i class="icon-material-outline-location-on"></i>
                                        <span>Location</span>
                                        <h5>London, United Kingdom</h5>
                                    </li>
                                    <li>
                                        <i class="icon-material-outline-business-center"></i>
                                        <span>Job Type</span>
                                        <h5>Full Time</h5>
                                    </li>
                                    <li>
                                        <i class="icon-material-outline-local-atm"></i>
                                        <span>Salary</span>
                                        <h5>$35k - $38k</h5>
                                    </li>
                                    <li>
                                        <i class="icon-material-outline-access-time"></i>
                                        <span>Date Posted</span>
                                        <h5>{{ $job->created_at->diffForHumans() }}</h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
    
                    <!-- Sidebar Widget -->
                    <div class="sidebar-widget">
                        <h3>Bookmark or Share</h3>
    
                        <!-- Bookmark Button -->
                        <button class="bookmark-button margin-bottom-25">
                            <span class="bookmark-icon"></span>
                            <span class="bookmark-text">Bookmark</span>
                            <span class="bookmarked-text">Bookmarked</span>
                        </button>
    
                        <!-- Copy URL -->
                        <div class="copy-url">
                            <input id="copy-url" type="text" value="" class="with-border">
                            <button class="copy-url-button ripple-effect" data-clipboard-target="#copy-url" title="Copy to Clipboard" data-tippy-placement="top"><i class="icon-material-outline-file-copy"></i></button>
                        </div>
    
                        <!-- Share Buttons -->
                        {{-- <div class="share-buttons margin-top-25">
                            <div class="share-buttons-trigger"><i class="icon-feather-share-2"></i></div>
                            <div class="share-buttons-content">
                                <span>Interesting? <strong>Share It!</strong></span>
                                <ul class="share-buttons-icons">
                                    <li><a href="#" data-button-color="#3b5998" title="Share on Facebook" data-tippy-placement="top"><i class="icon-brand-facebook-f"></i></a></li>
                                    <li><a href="#" data-button-color="#1da1f2" title="Share on Twitter" data-tippy-placement="top"><i class="icon-brand-twitter"></i></a></li>
                                    <li><a href="#" data-button-color="#dd4b39" title="Share on Google Plus" data-tippy-placement="top"><i class="icon-brand-google-plus-g"></i></a></li>
                                    <li><a href="#" data-button-color="#0077b5" title="Share on LinkedIn" data-tippy-placement="top"><i class="icon-brand-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div> --}}
                    </div>
    
                </div>
            </div>
    
        </div>
    </div>
</div>


<!-- Apply for a job popup
================================================== -->
<div id="small-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

	<!--Tabs -->
	<div class="sign-in-form">

		<ul class="popup-tabs-nav">
			<li><a href="#tab">Apply Now</a></li>
		</ul>

		<div class="popup-tabs-container">

			<!-- Tab -->
			<div class="popup-tab-content" id="tab">
				
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>{{ $job->title }}</h3>
				</div>
					
				<!-- Form -->
				<form method="post" id="add-note">

					<textarea name="textarea" cols="10" placeholder="Note" class="with-border"></textarea>

				</form>
				
				<!-- Button -->
				<button type="submit" class="button full-width button-sliding-icon ripple-effect" type="submit" form="add-note">Add Note <i class="icon-material-outline-arrow-right-alt"></i></button>

			</div>

		</div>
	</div>
</div>
<!-- Apply for a job popup / End -->