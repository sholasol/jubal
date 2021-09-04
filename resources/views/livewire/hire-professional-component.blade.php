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


<!-- Page Content
================================================== -->
<div class="container">
	<div class="row"> 

		
		<!-- Content -->
		<div class="col-xl-12 col-lg-12 content-right-offset">
			
			<!-- Page Content -->
			<div class="single-page-section">
				<form wire:submit.prevent="postJob" enctype="multipart/form-data">
                    @csrf
                
                        <div class="dashboard-box margin-top-0">
    
                            <!-- Headline -->
                            <div class="headline">
                                <h3><i class="icon-feather-folder-plus"></i> Hiring Request Form</h3>
                            </div>
    
                            <div class="content with-padding padding-bottom-10">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>Category of Service</h5>
                                            <input type="text" class="with-border" value="{{ $prof->category }}" wire:model="service_category" readonly>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>Project Title</h5>
                                            <input type="text" class="with-border" wire:model="title" placeholder="Project Title">
                                            @error('title')<p style="color: crimson;">{{ $message }}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="submit-field">
                                            <h5>Additional Information</h5>
                                            <textarea cols="30" rows="5" class="with-border" wire:model="comment"></textarea>
                                            @error('comment')<p style="color: crimson;">{{ $message }}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <button type="submit" class="button ripple-effect big margin-top-30"><i class="icon-feather-plus"></i> Submit Request</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>
			</div>

			
			
			

		</div>


	</div>
</div>




