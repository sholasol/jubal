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
                    <h3>Post a Job</h3>
    
                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs" class="dark">
                        <ul>
                            <li><a href="{{ route('client.dashboard') }}">Dashboard</a></li>
                            <li>Post a Job</li>
                        </ul>
                    </nav>
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
                                <h3><i class="icon-feather-folder-plus"></i> Job Submission Form</h3>
                            </div>
    
                            <div class="content with-padding padding-bottom-10">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Category of Service</h5>
                                            <select class=" with-border"  wire:model="service_category">
                                                <option value="">Select Category</option>
                                                @foreach ($scategories as $scategory)
                                                    <option>{{ $scategory->name }}</option>
                                                @endforeach
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
                                            <h5>Male/Female</h5>
                                            <select class=" with-border"  wire:model="gender">
                                                <option value="">Select</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                                <option>Gender is not Important</option>
                                            </select>
                                        </div>
                                    </div>
                                    @if ($service_category =="Singer / Vocalist")
                                        
                                    
                                    <label class="col-xl-12" for="" style="color: crimson;">Singers</label>
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>How Many Males</h5>
                                            <select class=" with-border" wire:model="male">
                                                <option value="">Select</option>
                                                @for ($i = 1; $i <= 100; $i++)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>How Many Females</h5>
                                            <select class=" with-border"  wire:model="female">
                                                <option value="">Select</option>
                                                @for ($i = 1; $i <= 100; $i++)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Number of Singers</h5>
                                            <select class=" with-border"  wire:model="no_singer">
                                                <option value="">Select</option>
                                                @for ($i = 1; $i <= 100; $i++)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>How Many Songs</h5>
                                            <select class=" with-border"  wire:model="no_song">
                                                <option value="">Select</option>
                                                @for ($i = 1; $i <= 20; $i++)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Song Demo <small style="color: crimson;"> 2mb Max Upload</small></h5>
                                            <input type="file" class="with-border" wire:model="demo">
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Project Timeline</h5>
                                            <input type="date" class="with-border" wire:model="timeline">
                                        </div>
                                    </div>
                                    @endif
                                    @if ($service_category =="Song Writers")
                                    <label class="col-xl-12" for="" style="color: crimson;">Song writers</label>
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Number of Songs</h5>
                                            <select class=" with-border"  wire:model="no_song">
                                                <option value="">Select</option>
                                                @for ($i = 1; $i <= 20; $i++)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>
    
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Proposed song title</h5>
                                            <input type="text" class="with-border"  wire:model="proposed_title"> 
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Nature of Writing</h5>
                                            <select class=" with-border"  wire:model="writing_nature">
                                                <option>Accounting and Finance</option>
                                                <option>Clerical & Data Entry</option>
                                                <option>Counseling</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Language Pref.</h5>
                                            <input type="text" class="with-border" wire:model="language">
                                        </div>
                                    </div>
    
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Genre</h5>
                                            <select class=" with-border"  wire:model="genre">
                                                <option>Full Time</option>
                                                <option>Freelance</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Timeline</h5>
                                            <input type="date" class="with-border" wire:model="timeline">
                                        </div>
                                    </div>
                                    @endif
                                    {{-- End of Song writers --}}
                                    @if ($service_category =="Recording Studio")
                                    <label class="col-xl-12" for="" style="color: crimson;">Live studio recording</label>
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Number of Songs</h5>
                                            <select class=" with-border"  wire:model="no_song">
                                                <option value="">Select</option>
                                                @for ($i = 1; $i <= 20; $i++)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>
    
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Instrumentalists/studio engineer.</h5>
                                            <select class=" with-border"  wire:model="need_instrumentalist_engineer">
                                                <option value="">Full Time</option>
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select> 
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>No. of instrumentalists</h5>
                                            <select class=" with-border"  wire:model="no_instrumentalist">
                                                <option value="">Select</option>
                                                @for ($i = 1; $i <= 40; $i++)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Location</h5>
                                            <input type="text" class="with-border" wire:model="location">
                                        </div>
                                    </div>
    
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Instrumentalist Available</h5>
                                            <select class=" with-border"  wire:model="intrumentalist_available">
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>How many Sessions</h5>
                                            <select class=" with-border"  wire:model="no_session">
                                                <option value="">Select</option>
                                                @for ($i = 1; $i <= 100; $i++)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>Instrumentalist work in Proxy?</h5>
                                            <select class=" with-border"  wire:model="work_proxy">
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>Song Demo <small style="color: crimson;"> 2mb Max Upload</small></h5>
                                            <input type="file" wire:model="demo">
                                        </div>
                                    </div>

                                    @endif
                                    

                                    @if ($service_category =="Rehearsal Studio")
                                    <label class="col-xl-12" for="" style="color: crimson;">Reharsal/Performance/Touring</label>



                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>How many Instrumentalist</h5>
                                            <select class=" with-border"  wire:model="no_instrumentalist">
                                                <option value="">Select</option>
                                                @for ($i = 1; $i <= 20; $i++)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>
    
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Category of Instrumentalist</h5>
                                            <input type="checkbox" class="with-border" wire:model="instrumentalist_category">
                                            {{-- <input type="checkbox" class="with-border"> --}}
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>How many sessions?</h5>
                                            <select class=" with-border" wire:model="no_session">
                                                <option value="">Select</option>
                                                @for ($i = 1; $i <= 40; $i++)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>How many Locations?</h5>
                                            <select class="with-border" wire:model="no_location">
                                                <option value="">Select</option>
                                                @for($i = 1; $i<= 40; $i++)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>
    
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Nature of Performance</h5>
                                            <select class=" with-border"  wire:model="nature_performance">
                                                <option>Outdoor Concert</option>
                                                <option>Album</option>
                                                <option>Wedding</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Original Song / Cover</h5>
                                            <select class=" with-border"  wire:model="song_type">
                                                <option>Original Song</option>
                                                <option>Cover</option>
                                            </select>
                                        </div>
                                    </div>
                                    @endif

                                    @if ($service_category =="Performing Artists")
                                    <label class="col-xl-12" for="" style="color: crimson;">Solo Presentation/Serenades</label>


                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Nature of Musician</h5>
                                            <select class=" with-border"  wire:model="nature_musician">
                                                <option value="">Select</option>
                                                @foreach ($instruments as $instrument)
                                                    <option>{{ $instrument->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
    
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Location </h5>
                                            <select class="with-border" wire:model="location">
                                                <option>Full Time</option>
                                                <option>Freelance</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Duration</h5>
                                            <select class=" with-border"  wire:model="duration">
                                                <option value="">Select</option>
                                                @for ($i = 1; $i <= 60; $i++)
                                                    <option>{{ $i }} Minutes</option>
                                                @endfor
                                                <option>1 Hour 15 minutes</option>
                                                <option>2 Hours</option>
                                                <option>2 Hours 30 minutes</option>
                                                <option>2Hours 45 minutes</option>
                                                <option> 3 Hours</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Number of Songs</h5>
                                            <select class=" with-border"  wire:model="no_song">
                                                <option value="">Select</option>
                                                @for ($i = 1; $i <= 20; $i++)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>
    
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Required Dress Code</h5>
                                            <select class=" with-border"  wire:model="dress_code">
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Presentation Date</h5>
                                            <input type="date" class="with-border" wire:model="presentation_date">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>Song Titles</h5>
                                            <input type="text" class=" with-border" wire:model="song_title">
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>Upload Song/ Album <small style="color: crimson;"> 2mb Max Upload</small></h5>
                                            <input type="file" wire:model="demo">
                                        </div>
                                    </div>
                                    @endif

                                    @if ($service_category =="Deejays")
                                    <label class="col-xl-12" for="" style="color: crimson;">Deejay/Liveband</label>
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Nature of Musician</h5>
                                            <select class=" with-border"  wire:model="nature_musician">
                                                <option value="">Select</option>
                                                <option>Deejay</option>
                                                <option>Life Band</option>
                                            </select>
                                        </div>
                                    </div>
    
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Location </h5>
                                            <input type="text" class="with-border" wire:model="location">
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Nature of Event</h5>
                                            <select class=" with-border"  wire:model="nature_event">
                                                <option value="">Select</option>
                                                <option>Wedding</option>
                                                <option>Birthday Party</option>
                                                <option>House Warming</option>
                                                <option>Beach Party</option>
                                                <option> Others</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Outdoor/Indoor</h5>
                                            <select class="with-border" wire:model="event_type">
                                                <option value="">Select</option>
                                                <option>Outdoor</option>
                                                <option>Indoor</option>
                                            </select>
                                        </div>
                                    </div>
    
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Number of Guests</h5>
                                            <input type="number" class="with-border" wire:model="no_guest">
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5> Date</h5>
                                            <input type="date" class="with-border" wire:model="event_date">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>Equipment Available</h5>
                                            <select class=" with-border" wire:model="equipment_available">
                                                <option value="">Select</option>
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>Any particular Song?</h5>
                                            <input type="text" class="with-border" wire:model="preferred_song">
                                        </div>
                                    </div>
                                    @endif


                                    @if ($service_category =="Recording Studio")
                                    <label class="col-xl-12" for="" style="color: crimson;">Recording studio / Rehearsal Room</label>

                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>How Many Sessions</h5>
                                            <select class=" with-border"  wire:model="no_session">
                                                <option value="">Select</option>
                                                @for($i=1; $i<=20;  $i++)
                                                    <option value="{{ $i }}">{{ $i }} Session(s)</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>
    
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Preferred Location </h5>
                                            <input type="text" class="with-border" wire:model="preferred_location">
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Recording Type</h5>
                                            <select class=" with-border"  wire:model="recording_type">
                                                <option value="">Select</option>
                                                <option>Digital Recording</option>
                                                <option>Analogue Recording</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Do you need Audio Recording?</h5>
                                            <select class=" with-border"  wire:model="audio_recording">
                                                <option value="">Select</option>
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select>
                                        </div>
                                    </div>
    
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Do you have studio Engr.?</h5>
                                            <select class=" with-border"  wire:model="have_studio_engr">
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Do you need Instrumentalist?</h5>
                                            <select class=" with-border"  wire:model="need_instrumentalist">
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>Are you bringing Additional Instrument?</h5>
                                            <select class=" with-border"  wire:model="additional_instrumentalist">
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>Proposed Date</h5>
                                            <input type="date" class=" with-border" wire:model="proposed_date">
                                        </div>
                                    </div>
                                    @endif

                                    @if ($service_category =="Music Producer")
                                    <label class="col-xl-12" for="" style="color: crimson;">Music Production</label>
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Number of Songs</h5>
                                            <select class=" with-border"  wire:model="no_song">
                                                <option value="">Select</option>
                                                @for ($i = 1; $i <= 20; $i++)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>
    
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Genre</h5>
                                            <input type="text" class="with-border"  wire:model="genre"> 
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Stage of Production needed</h5>
                                            <select class=" with-border" wire:model="production_stage">
                                                <option value="">Select</option>
                                                <option>Entire Process</option>
                                                <option>Creating background instrumentals</option>
                                                <option>Beat making / instrumentals only</option>
                                                <option>Mixing + mastering only</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Timeline/Delivery</h5>
                                            <select class=" with-border" wire:model="timeline_delivery">
                                                <option value="">Select</option>
                                                <option>No hard & fast timeline</option>
                                                <option> Calendar drop</option>
                                            </select>
                                        </div>
                                    </div>
    
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Producer Color/Caliber</h5>
                                            <select class=" with-border"  wire:model="producer_caliber">
                                                <option>(Yellow)Talented & experienced ($)</option>
                                                <option>(Blue) Talented, experienced with proven track record ($$)</option>
                                                <option>(Red) Top producer/hit maker. ($$$)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Upload Song Demo <small style="color: crimson;"> 2mb Max Upload</small></h5>
                                            <input type="file" class="with-border" wire:model="demo">
                                        </div>
                                    </div>
                                    @endif


                                    @if ($service_category =="Beat Makers")
                                    <label class="col-xl-12" for="" style="color: crimson;">Beat Making</label>
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Style of Music</h5>
                                            <select class=" with-border"  wire:model="music_style">
                                                <option value="">Select</option>
                                                <option>Afro Beat</option>
                                                <option>Hip Hop Beat</option>
                                            </select>
                                        </div>
                                    </div>
    
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Fresh Beat</h5>
                                            <select class="with-border" wire:model="fresh_beat">
                                                <option value="">Select</option>
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>How Many Beats?</h5>
                                            <select class="with-border" wire:model="no_beat">
                                                <option value="">Select</option>
                                                @for ($i=1; $i<=20; $i++)
                                                <option>{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Timeline/Delivery</h5>
                                            <select class=" with-border" wire:model="timeline_delivery">
                                                <option value="">Select</option>
                                                <option>No hard & fast timeline</option>
                                                <option> Calendar drop</option>
                                            </select>
                                        </div>
                                    </div>
    
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Caliber Beat Maker</h5>
                                            <select class=" with-border" wire:model="beat_maker_caliber">
                                                <option>Talented & experienced (Valuable)</option>
                                                <option>Talented, experienced with proven track record (Very Valuable)</option>
                                                <option>Top producer/hit maker. (Most Valuable)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Upload Song Demo <small style="color: crimson;"> 2mb Max Upload</small></h5>
                                            <input type="file" class="with-border" wire:model="demo">
                                        </div>
                                    </div>

                                    @endif

                                    @if ($service_category =="Mixing Enginer")
                                    <label class="col-xl-12" for="" style="color: crimson;">Mixing</label>
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Genre</h5>
                                            <input type="text" class="with-border" wire:model="genre"> 
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Type of Recording</h5>
                                            <select class="with-border" wire:model="recording_type">
                                                <option value="">Select</option>
                                                <option>Digital studio recording</option>
                                                <option> Live/Analogue recording</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Timeline/Delivery</h5>
                                            <select class=" with-border" wire:model="timeline_delivery">
                                                <option value="">Select</option>
                                                <option>No hard & fast timeline</option>
                                                <option> Calendar drop</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                   
                                    <div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>Upload Song Demo <small style="color: crimson;"> 2mb Max Upload</small></h5>
                                            <input type="file" class="with-border" wire:model="demo">
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>Provide References</h5>
                                            <input type="text" class="with-border" wire:model="reference">
                                        </div>
                                    </div>
                                    @endif

                                    @if ($service_category =="Mastering Engineer")
                                    <label class="col-xl-12" for="" style="color: crimson;">Mastering</label>
                                    <div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>Genre</h5>
                                            <input type="text" class="with-border"  wire:model="genre"> 
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>Provide Reference</h5>
                                            <input type="text" class="with-border" wire:model="reference"> 
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>Timeline/Delivery</h5>
                                            <select class="with-border" wire:model="timeline_delivery">
                                                <option value="">Select</option>
                                                <option>No hard & fast timeline</option>
                                                <option> Calendar drop</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>Upload Song Demo</h5>
                                            <input type="file" class="with-border" wire:model="demo">
                                        </div>
                                    </div>

                                    @endif

                                    @if ($service_category =="Voice Coaches and Trainers")

                                    <label class="col-xl-12" for="" style="color: crimson;">Music Instructor/Vocal Coach</label>
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Area of learning</h5>
                                            <select class=" with-border"  wire:model="learning_area">
                                                <option value="">Select</option>
                                                <option>Voice/singing</option>
                                                <option>Musical instrument</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Specify instrument (e.g Saxophone)</h5>
                                            <select class="with-border" wire:model="instrument">
                                                <option value="">Select</option>
                                                @foreach ($instruments as $service)
                                                <option>{{ $service->name }}</option>
                                                @endforeach
                                                
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Scope/target of learning</h5>
                                            <select class="with-border" wire:model="learning_scope">
                                                <option value="">Select</option>
                                                <option>Individual</option>
                                                <option>Organization</option>
                                            </select>
                                        </div>
                                    </div>
    
                                    <div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>Trainee Age</h5>
                                            <input type="text" class="with-border"  wire:model="trainee_age"> 
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>Preferred Location</h5>
                                            <input type="text" class="with-border"  wire:model="preferred_location"> 
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>Prior Knowledge of Keyboard</h5>
                                            <select class="with-border" wire:model="prior_knowledge">
                                                <option value="">Select</option>
                                                <option>Yes</option>
                                                <option> No</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>Level of Proficiency</h5>
                                            <select class="with-border" wire:model="proficiency">
                                                <option value="">Select</option>
                                                <option>Begineer</option>
                                                <option> Intermediate</option>
                                                <option> Advanced</option>
                                            </select>
                                        </div>
                                    </div>
                                    @endif

                                    
                                    @if ($service_category =="Music Video Director")
                                    <label class="col-xl-12" for="" style="color: crimson;">Music video Director</label>
                                    <div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>Number of Songs</h5>
                                            <select class=" with-border"  wire:model="no_song">
                                                <option value="">Select</option>
                                                @for ($i = 1; $i <= 20; $i++)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>Timeline/Delivery</h5>
                                            <select class=" with-border" wire:model="timeline_delivery">
                                                <option value="">Select</option>
                                                <option>No hard & fast timeline</option>
                                                <option> Calendar drop</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>Director Color/Caliber</h5>
                                            <select class="with-border"  wire:model="director_caliber">
                                                <option>(Yellow)Talented & experienced ($)</option>
                                                <option>(Blue) Talented, experienced with proven track record ($$)</option>
                                                <option>(Red) Top producer/hit maker. ($$$)</option>
                                            </select>
                                        </div>
                                    </div>
                            
                                    <div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>Upload Song Demo <small style="color: crimson;"> 2mb Max Upload</small></h5>
                                            <input type="file" class="with-border" wire:model="demo">
                                        </div>
                                    </div>

                                    @endif



                                    @if ($service_category =="Lyrics Video Makers")
                                    <label class="col-xl-12" for="" style="color: crimson;">lyrics video creators</label>
                                    <div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>Number of Songs</h5>
                                            <select class=" with-border" wire:model="no_song">
                                                <option value="">Select</option>
                                                @for ($i = 1; $i <= 20; $i++)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>Timeline/Delivery</h5>
                                            <select class=" with-border" wire:model="timeline_delivery">
                                                <option value="">Select</option>
                                                <option>No hard & fast timeline</option>
                                                <option> Calendar drop</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>Director Color/Caliber</h5>
                                            <select class=" with-border"  wire:model="director_caliber">
                                                <option>(Yellow)Talented & experienced ($)</option>
                                                <option>(Blue) Talented, experienced with proven track record ($$)</option>
                                                <option>(Red) Top producer/hit maker. ($$$)</option>
                                            </select>
                                        </div>
                                    </div>
                            
                                    <div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>Upload Song Demo <small style="color: crimson;"> 2mb Max Upload</small></h5>
                                            <input type="file" class="with-border" wire:model="demo">
                                        </div>
                                    </div>

                                    @endif


                                    @if ($service_category =="Album Art Designer")
                                    <label class="col-xl-12" for="" style="color: crimson;">Album Art Designer</label>
                                    <div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>Nature and Scope</h5>
                                            <select class=" with-border"  wire:model="nature_album">
                                                <option value="">Select</option>
                                                <option>Single Track</option>
                                                <option>Full Album</option>
                                                <option>E.P</option>
                                            </select>
                                        </div>
                                    </div>
    
                                    <div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>Artists name & Song/album title</h5>
                                            <input type="text" class="with-border"  wire:model="artist_name"> 
                                        </div>
                                    </div>
                                    

                                    <div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>Timeline/Delivery</h5>
                                            <select class=" with-border" wire:model="timeline_delivery">
                                                <option value="">Select</option>
                                                <option>No hard & fast timeline</option>
                                                <option> Calendar drop</option>
                                            </select>
                                        </div>
                                    </div>
    
                                    <div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>Upload Song/ Album <small style="color: crimson;"> 2mb Max Upload</small></h5>
                                            <input type="file" class="with-border" wire:model="demo">
                                        </div>
                                    </div>

                                    @endif


                                    <div class="col-xl-12">
                                        <div class="submit-field">
                                            <h5>Additional Information</h5>
                                            <textarea cols="30" rows="5" class="with-border" wire:model="additional_information"></textarea>
                                            @error('additional_information')<p style="color: crimson;">{{ $message }}</p> @enderror
                                        </div>
                                    </div> 

                                    {{-- <div class="col-xl-12" wire:ignore>
                                        <div class="submit-field">
                                            <h5>Additional Information</h5>
                                            <textarea id="description" name="description" cols="30" rows="5" class="with-border" wire:model="additional_information"></textarea>
                                            @error('additional_information')<p style="color: crimson;">{{ $message }}</p> @enderror
                                        </div>
                                    </div>  --}}
    
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-xl-12">
                        <button type="submit" class="button ripple-effect big margin-top-30"><i class="icon-feather-plus"></i> Post a Job</button>
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