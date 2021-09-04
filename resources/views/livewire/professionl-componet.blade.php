<div class="single-page-header freelancer-header" data-background-image="{{ asset('asset/job_bg.jpg') }}">
	<div class="container">
		<div class="row"> 
			<div class="col-md-12">
				<div class="single-page-header-inner">
					<div class="left-side">
						<div class="header-image freelancer-avatar"><img src="{{ asset('asset/image/profiles') }}/{{ $prof->image }}" alt=""></div>
						<div class="header-details">
							<h3>{{ $detail->name }} <span>{{ $prof->category }}</span></h3>
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


<!-- Page Content
================================================== -->
<div class="container">
	<div class="row">
		
		<!-- Content -->
		<div class="col-xl-8 col-lg-8 content-right-offset">
			
			<!-- Page Content -->
			<div class="single-page-section">
				<h3 class="margin-bottom-25">About Me</h3>
				<p>
					{{ $prof->description }}
				</p>
			</div>

			<!-- Boxed List -->
			<div class="boxed-list margin-bottom-60">
				<div class="boxed-list-headline">
					<h3><i class="icon-material-outline-assignment"></i> Previous Works</h3>
				</div>
				@if ($jobs->count() > 0)
				<ul class="boxed-list-ul">
					@foreach ($jobs as $job)
					<li>
						<div class="boxed-list-item">
							<!-- Content -->
							<div class="item-content">
								<h4>{{ $job->title }} <span>{{ $job->service_category }}</span></h4>
								<div class="item-details margin-top-10">
									<div class="star-rating" data-rating="5.0"></div>
									<div class="detail-item"><i class="icon-material-outline-date-range"></i> {{ $job->created_at->diffForHumans() }}</div>
								</div>
								<div class="item-description">
									<p>{{ $job->additional_information }} </p>
								</div>
							</div>
						</div>
					</li>
					@endforeach
					
				</ul>
				@endif
				

				<!-- Pagination -->
				<div class="clearfix"></div>
				<div class="pagination-container margin-top-40 margin-bottom-10">
					<nav class="pagination">
						<ul>
							<li><a href="#" class="ripple-effect current-page">1</a></li>
							<li><a href="#" class="ripple-effect">2</a></li>
							<li class="pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-right"></i></a></li>
						</ul>
					</nav>
				</div>
				<div class="clearfix"></div>
				<!-- Pagination / End -->

			</div>
			<!-- Boxed List / End -->
			
			<!-- Boxed List -->
			{{-- <div class="boxed-list margin-bottom-60">
				<div class="boxed-list-headline">
					<h3><i class="icon-material-outline-business"></i> Employment History</h3>
				</div>
				<ul class="boxed-list-ul">
					<li>
						<div class="boxed-list-item">
							<!-- Avatar -->
							<div class="item-image">
								<img src="{{ asset('images/browse-companies-03.png') }}" alt="">
							</div>
							
							<!-- Content -->
							<div class="item-content">
								<h4>Development Team Leader</h4>
								<div class="item-details margin-top-7">
									<div class="detail-item"><a href="#"><i class="icon-material-outline-business"></i> Acodia</a></div>
									<div class="detail-item"><i class="icon-material-outline-date-range"></i> May 2018 - Present</div>
								</div>
								<div class="item-description">
									<p>Focus the team on the tasks at hand or the internal and external customer requirements.</p>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="boxed-list-item">
							<!-- Avatar -->
							<div class="item-image">
								<img src="{{ asset('images/browse-companies-04.png') }}" alt="">
							</div>
							
							<!-- Content -->
							<div class="item-content">
								<h4><a href="#">Lead UX/UI Designer</a></h4>
								<div class="item-details margin-top-7">
									<div class="detail-item"><a href="#"><i class="icon-material-outline-business"></i> Acorta</a></div>
									<div class="detail-item"><i class="icon-material-outline-date-range"></i> April 2014 - May 2018</div>
								</div>
								<div class="item-description">
									<p>I designed and implemented 10+ custom web-based CRMs, workflow systems, payment solutions and mobile apps.</p>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div> --}}
			<!-- Boxed List / End -->

		</div>
		

		<!-- Sidebar -->
		<div class="col-xl-4 col-lg-4">
			<div class="sidebar-container">
				
				<!-- Profile Overview -->
				<div class="profile-overview">
					<div class="overview-item"><strong>${{ $prof->rate }}</strong><span>Hourly Rate</span></div>
					<div class="overview-item"><strong>{{ $jobs->count() }}</strong><span>Jobs Done</span></div>
					{{-- <div class="overview-item"><strong>22</strong><span>Rehired</span></div> --}}
				</div>

				<!-- Button -->
				<a href="{{ route('client.hiring',['pro_id'=>$prof->user_id]) }}" class="apply-now-button  margin-bottom-50">Hire {{ $prof->name }}<i class="icon-material-outline-arrow-right-alt"></i></a>
				
				<!-- Skills-->
				<div class="col-xl-12 col-md-12">
					<h3>Demo link</h3>
					<ul class="list-1">
						<li>{{ $prof->link }}</li>
						<li>{{ $prof->link1 }}</li>
						<li>{{ $prof->link2 }}</li>
					</ul>
				</div>


				<!-- Freelancer Indicators -->
				<div class="sidebar-widget">
					<div class="freelancer-indicators">

						<!-- Indicator -->
						<div class="indicator">
							<strong>88%</strong>
							<div class="indicator-bar" data-indicator-percentage="88"><span></span></div>
							<span>Job Success</span>
						</div>

						<!-- Indicator -->
						<div class="indicator">
							<strong>100%</strong>
							<div class="indicator-bar" data-indicator-percentage="100"><span></span></div>
							<span>Recommendation</span>
						</div>
						
						<!-- Indicator -->
						<div class="indicator">
							<strong>90%</strong>
							<div class="indicator-bar" data-indicator-percentage="90"><span></span></div>
							<span>On Time</span>
						</div>	
											
						<!-- Indicator -->
						<div class="indicator">
							<strong>80%</strong>
							<div class="indicator-bar" data-indicator-percentage="80"><span></span></div>
							<span>On Budget</span>
						</div>
					</div>
				</div>
				 

				<!-- Sidebar Widget -->
				<div class="sidebar-widget">
					<h3>Share</h3>

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




<!-- Apply for a job popup
================================================== -->
<div id="small-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

	<!--Tabs -->
	<div class="sign-in-form">

		<ul class="popup-tabs-nav">
			<li><a href="#tab">Add Note</a></li>
		</ul>

		<div class="popup-tabs-container">

			<!-- Tab -->
			<div class="popup-tab-content" id="tab">
				
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>Do Not Forget</h3>
				</div>
					
				<!-- Form -->
				<form method="post" id="add-note">

					<select class="selectpicker with-border default margin-bottom-20" data-size="7" title="Priority">
						<option>Low Priority</option>
						<option>Medium Priority</option>
						<option>High Priority</option>
					</select>

					<textarea name="textarea" cols="10" placeholder="Note" class="with-border"></textarea>

				</form>
				
				<!-- Button -->
				<button class="button full-width button-sliding-icon ripple-effect" type="submit" form="add-note">Add Note <i class="icon-material-outline-arrow-right-alt"></i></button>

			</div>

		</div>
	</div>
</div>
<!-- Apply for a job popup / End -->
