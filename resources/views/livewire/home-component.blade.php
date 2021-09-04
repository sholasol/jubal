<div class="intro-banner" data-background-image="{{ asset('asset/1.gif') }}">
	<div class="container">
		
		<!-- Intro Headline -->
		<div class="row">
			<div class="col-md-12">
				<div class="banner-headline">
					<h3>
						<strong>Hire music pros or be hired</strong>
						<br>
						<span style="color: #111 !important;"
						class="txt-rotate"
						data-period="500"
						data-rotate='["The best music producers from around the world.", "Top quality Deejays & live bands", "Professional mixing engineers", "Expert music instrumentalists",  "Make bookings for top recording studios.",  "Buy & create hot new beats for your track.", ".......and more!" ]'></span>
						{{-- <span>Thousands of small businesses use <strong class="color">Hireo</strong> to turn their ideas into reality.</span> --}}
					</h3>
				</div>
			</div>
		</div>
		
		<!-- Search Bar -->
		<div class="row">
			<div class="col-md-12">
				<div class="intro-banner-search-form margin-top-95 margin-bottom-95">

					<!-- Search Field -->
					<div class="intro-search-field with-autocomplete">
						{{-- <label for="autocomplete-input" class="field-title ripple-effect">Where?</label> --}}
						<div class="input-with-icon">
							<input id="address" type="text" placeholder="Location">
							<i class="icon-material-outline-location-on"></i>
						</div>
					</div>

					<!-- Search Field -->
					<div class="intro-search-field">
						{{-- <label for ="intro-keywords" class="field-title ripple-effect">What job you want?</label> --}}
						<input id="intro-keywords" type="text" placeholder="Job Title or Keywords">
					</div>

					<!-- Button -->
					<div class="intro-search-button">
						<button class="button ripple-effect" onclick="window.location.href='jobs-list-layout-full-page-map.html'"><i class="icon-line-awesome-search"></i></button>
					</div>
				</div>
			</div>
		</div>

		<!-- Stats -->
		{{-- <div class="row">
			<div class="col-md-12">
				<ul class="intro-stats margin-top-45 hide-under-992px">
					<li>
						<strong class="counter">1,586</strong>
						<span>Jobs Posted</span>
					</li>
					<li>
						<strong class="counter">3,543</strong>
						<span>Tasks Posted</span>
					</li> 
					<li>
						<strong class="counter">1,232</strong>
						<span>Freelancers</span>
					</li>
				</ul>
			</div>
		</div> --}}

	</div>
</div>


<!-- Content
================================================== -->

<!-- Icon Boxes -->
<div class="section padding-top-65 padding-bottom-65" style="background-color:#0177f414; opacity: 0.7;">
	<div class="container">
		<div class="row">

			<div class="col-xl-12">
				<!-- Section Headline -->
				<div class="section-headline centered margin-top-0 margin-bottom-5">
					<h3>How It Works?</h3>
				</div>
			</div>
			
			<div class="col-xl-4 col-md-4">
				<!-- Icon Box -->
				<div class="icon-box with-line">
					<!-- Icon -->
					<div class="icon-box-circle">
						<div class="icon-box-circle-inner">
							<i class="icon-feather-user-plus"></i>
							{{-- <div class="icon-box-check"><i class="icon-material-outline-check"></i></div> --}}
						</div> 
					</div>
					<h3>Create an Account</h3>
					<p>Sign up & create your profile. </p>
				</div>
			</div>

			<div class="col-xl-4 col-md-4">
				<!-- Icon Box -->
				<div class="icon-box with-line">
					<!-- Icon -->
					<div class="icon-box-circle">
						<div class="icon-box-circle-inner">
							<i class="icon-line-awesome-file"></i>
							{{-- <div class="icon-box-check"><i class="icon-material-outline-check"></i></div> --}}
						</div>
					</div>
					<h3>Post a Job</h3>
					<p>Provide details of the music service you require Our music pros from around the world are at your service.</p>
				</div>
			</div>

			<div class="col-xl-4 col-md-4">
				<!-- Icon Box -->
				<div class="icon-box">
					<!-- Icon -->
					<div class="icon-box-circle">
						<div class="icon-box-circle-inner">
							<i class="icon-feather-users"></i>
							{{-- <div class="icon-box-check"><i class="icon-material-outline-check"></i></div> --}}
						</div>
					</div>
					<h3>Choose a Music Pro</h3>
					<p>Explore our wide range of music pros around the world or in your locality and choose the ones that fit your bill.</p>
				</div>
			</div>

		</div>
	</div>
</div>
<!-- Icon Boxes / End -->

<!-- Photo Section -->
<div class="photo-section" data-background-image="{{ asset('asset/1.jpeg') }}">

	<!-- Infobox -->
	<div class="text-content white-font">
		<div class="container">

			<div class="row">
				<div class="col-lg-6 col-md-8 col-sm-12">
					<h2>Hire music pros  <br> Or render music services anytime</h2>
					<p>Sign up, upload your profile, hire a music pro or be hired as a music pro.</p>
					<a href="/register" class="button button-sliding-icon ripple-effect big margin-top-20">Get Started <i class="icon-material-outline-arrow-right-alt"></i></a>
				</div>
			</div>

		</div>
	</div>

	<!-- Infobox / End -->

</div>
<!-- Photo Section / End -->

<!-- Category Boxes -->
<div class="section margin-top-1">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">

				<div class="section-headline centered margin-top-45 margin-bottom-15">
					<h3>Popular Job Categories</h3>
				</div>

				<!-- Category Boxes Container -->
				<div class="categories-container">

					<!-- Category Box -->
					@foreach ($categories as $category)
					<a href="{{ route('category', ['category_slug'=>$category->slug]) }}" class="category-box">
						<div class="category-box-icon">
							<img src="{{ asset('asset/image/serviceCategory') }}/{{ $category->image }}">
							{{-- <i class="icon-line-awesome-music"></i> --}}
						</div>
						{{-- <div class="category-box-counter">612</div> --}}
						<div class="category-box-content">
							<h3>{{ $category->name }}</h3>
							{{-- <p>Mastering Engineer, Music producers & More</p> --}}
						</div>
					</a>
					@endforeach
				</div>

			</div>
		</div>
	</div>
</div>
<!-- Category Boxes / End -->


<!-- Features Jobs -->
<div class="section gray margin-top-15 padding-top-45 padding-bottom-10">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				
				<!-- Section Headline -->
				<div class="section-headline margin-top-0 margin-bottom-35">
					<h3>Featured Jobs</h3>
					<a href="/jobs" class="headline-link">Browse All Jobs</a>
				</div>
				
				<!-- Jobs Container -->
				<div class="listings-container compact-list-layout margin-top-35">
					
					<!-- Job Listing -->
					@foreach ($jobs as $job)
					<span  class="job-listing with-apply-button">

						<!-- Job Listing Details -->
						<div class="job-listing-details">
							
							<!-- Logo -->
							<div class="job-listing-company-logo">
								<a href="/jobdetail/{{ $job->id }}"><img src="{{ asset('asset/my_jobs.png') }}" alt="jubal"></a>
							</div>

							<!-- Details -->
							<div class="job-listing-description">
								<h3 class="job-listing-title"><a href="/jobdetail/{{ $job->id }}">{{ $job->title }}</a></h3> 
								<!-- Job Listing Footer -->
								<div class="job-listing-footer">
									<ul>
										<li><i class="icon-material-outline-business"></i> Hexagon <div class="verified-badge" title="Verified Employer" data-tippy-placement="top"></div></li>
										<li><i class="icon-material-outline-location-on"></i> San Francissco</li>
										<li><i class="icon-material-outline-business-center"></i> Created</li>
										<li><i class="icon-material-outline-access-time"></i> {{ $job->created_at->diffForHumans() }}</li>
									</ul>
								</div>
							</div>

							<!-- Apply Button -->
							<a href="/jobdetail/{{ $job->id }}" class="list-apply-button ripple-effect">Job Details</a>
						</div>
					</span>
					@endforeach	
				</div>
				<!-- Jobs Container / End -->

			</div>
		</div>
	</div>
</div>
<!-- Featured Jobs / End -->


<!-- Features Cities -->
{{-- <div class="section margin-top-65 margin-bottom-65">
	<div class="container">
		<div class="row">

			<!-- Section Headline -->
			<div class="col-xl-12">
				<div class="section-headline centered margin-top-0 margin-bottom-45">
					<h3>Featured Cities</h3>
				</div>
			</div>

			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				<a href="jobs-list-layout-1.html" class="photo-box" data-background-image="images/featured-city-01.jpg">
					<div class="photo-box-content">
						<h3>San Francisco</h3>
						<span>376 Jobs</span>
					</div>
				</a>
			</div>
			
			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				<a href="jobs-list-layout-full-page-map.html" class="photo-box" data-background-image="images/featured-city-02.jpg">
					<div class="photo-box-content">
						<h3>New York</h3>
						<span>645 Jobs</span>
					</div>
				</a>
			</div>
			
			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				<a href="jobs-grid-layout-full-page.html" class="photo-box" data-background-image="images/featured-city-03.jpg">
					<div class="photo-box-content">
						<h3>Los Angeles</h3>
						<span>832 Jobs</span>
					</div>
				</a>
			</div>

			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				<a href="jobs-list-layout-2.html" class="photo-box" data-background-image="images/featured-city-04.jpg">
					<div class="photo-box-content">
						<h3>Miami</h3>
						<span>513 Jobs</span>
					</div>
				</a>
			</div>

		</div>
	</div>
</div> --}}
<!-- Features Cities / End -->


<!-- Highest Rated Freelancers -->
<div class="section gray padding-top-65 padding-bottom-70 full-width-carousel-fix">
	<div class="container">
		<div class="row">

			<div class="col-xl-12">
				<!-- Section Headline -->
				<div class="section-headline margin-top-0 margin-bottom-25">
					<h3>Highest Rated Freelancers</h3>
					<a href="/profs" class="headline-link">Browse All Music Pros</a>
				</div>
			</div>

			<div class="col-xl-12">
				<div class="default-slick-carousel freelancers-container freelancers-grid-layout">

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
									<a href="/professional/{{ $prof->user_id }}"><img src="{{ asset('asset/image/profiles') }}/{{ $prof->image }}" alt="jubal"></a>
								</div>

								<!-- Name -->
								<div class="freelancer-name">
									<h4><a href="/professional/{{ $prof->user_id }}">{{ $prof->name }} <img class="flag" src="images/flags/gb.svg" alt="" title="United Kingdom" data-tippy-placement="top"></a></h4>
									<span>{{ $prof->category }}</span>
								</div>

								<!-- Rating -->
								<div class="freelancer-rating">
									<div class="star-rating" data-rating="5.0"></div>
								</div>
							</div>
						</div>
						
						<!-- Details -->
						<div class="freelancer-details">
							<div class="freelancer-details-list">
								<ul>
									<li>Location <strong><i class="icon-material-outline-location-on"></i> {{ $prof->country }}</strong></li>
									<li>Job Rate <strong>${{ $prof->rate }}</strong></li>
									{{-- <li>Job Success <strong>95%</strong></li> --}}
								</ul>
							</div>
							<a href="/professional/{{ $prof->user_id }}" class="button button-sliding-icon ripple-effect">View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
						</div>
					</div>
					@endforeach
					<!-- Freelancer / End -->


				</div>
			</div>

		</div>
	</div>
</div>
<!-- Highest Rated Freelancers / End-->


<!-- Membership Plans -->
{{-- <div class="section padding-top-60 padding-bottom-75">
	<div class="container">
		<div class="row">

			<div class="col-xl-12">
				<!-- Section Headline -->
				<div class="section-headline centered margin-top-0 margin-bottom-35">
					<h3>Membership Plans</h3>
				</div>
			</div>


			<div class="col-xl-12">

				<!-- Billing Cycle  -->
				<div class="billing-cycle-radios margin-bottom-70">
					<div class="radio billed-monthly-radio">
						<input id="radio-5" name="radio-payment-type" type="radio" checked>
						<label for="radio-5"><span class="radio-label"></span> Billed Monthly</label>
					</div>

					<div class="radio billed-yearly-radio">
						<input id="radio-6" name="radio-payment-type" type="radio">
						<label for="radio-6"><span class="radio-label"></span> Billed Yearly <span class="small-label">Save 10%</span></label>
					</div>
				</div>

				<!-- Pricing Plans Container -->
				<div class="pricing-plans-container">

					<!-- Plan -->
					<div class="pricing-plan">
						<h3>Basic Plan</h3>
						<p class="margin-top-10">One time fee for one listing or task highlighted in search results.</p>
						<div class="pricing-plan-label billed-monthly-label"><strong>$19</strong>/ monthly</div>
						<div class="pricing-plan-label billed-yearly-label"><strong>$205</strong>/ yearly</div>
						<div class="pricing-plan-features">
							<strong>Features of Basic Plan</strong>
							<ul>
								<li>1 Listing</li>
								<li>30 Days Visibility</li>
								<li>Highlighted in Search Results</li>
							</ul>
						</div>
						<a href="pages-checkout-page.html" class="button full-width margin-top-20">Buy Now</a>
					</div>

					<!-- Plan -->
					<div class="pricing-plan recommended">
						<div class="recommended-badge">Recommended</div>
						<h3>Standard Plan</h3>
						<p class="margin-top-10">One time fee for one listing or task highlighted in search results.</p>
						<div class="pricing-plan-label billed-monthly-label"><strong>$49</strong>/ monthly</div>
						<div class="pricing-plan-label billed-yearly-label"><strong>$529</strong>/ yearly</div>
						<div class="pricing-plan-features">
							<strong>Features of Standard Plan</strong>
							<ul>
								<li>5 Listings</li>
								<li>60 Days Visibility</li>
								<li>Highlighted in Search Results</li>
							</ul>
						</div>
						<a href="pages-checkout-page.html" class="button full-width margin-top-20">Buy Now</a>
					</div>

					<!-- Plan -->
					<div class="pricing-plan">
						<h3>Extended Plan</h3>
						<p class="margin-top-10">One time fee for one listing or task highlighted in search results.</p>
						<div class="pricing-plan-label billed-monthly-label"><strong>$99</strong>/ monthly</div>
						<div class="pricing-plan-label billed-yearly-label"><strong>$1069</strong>/ yearly</div>
						<div class="pricing-plan-features">
							<strong>Features of Extended Plan</strong>
							<ul>
								<li>Unlimited Listings Listing</li>
								<li>90 Days Visibility</li>
								<li>Highlighted in Search Results</li>
							</ul>
						</div>
						<a href="pages-checkout-page.html" class="button full-width margin-top-20">Buy Now</a>
					</div>
				</div>

			</div>

		</div>
	</div>
</div> --}}
<!-- Membership Plans / End-->