<div>
    <div class="dashboard-container">

        <!-- Dashboard Sidebar
        ================================================== -->
        @livewire('admin.admin-sidebar-component') 

        <div class="dashboard-content-container" data-simplebar>
            <div class="dashboard-content-inner" >
                
                <!-- Dashboard Headline -->
                <div class="dashboard-headline">
                    <h3>Add Service </h3>
                    @if(Session::has('message'))
                             <div class="alert alert-success" style="color: rgb(95, 243, 10);">{{ Session::get('message') }}</div>
                        @endif
                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs" class="dark">
                        <ul>
                            <li><a href="{{ route('admin.services') }}">Services</a></li>
                        </ul>
                    </nav>
                </div>
        
                <!-- Row -->
                <form wire:submit.prevent="createNewService" enctype="multipart/form-data">
                    @csrf
                <div class="row">
                    
                    <div class="col-xl-12">
                        <div id="test1" class="dashboard-box">
    
                            <!-- Headline -->
                            <div class="headline">
                                <h3><i class="icon-material-outline-add-circle-outline"></i>Create Service</h3>
                            </div>
    
                            <div class="content with-padding">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>Service  Name</h5>
                                            <input type="text" class="with-border" name="name" wire:model="name" wire:keyup="generateSlug">
                                            @error('name')<p style="color: crimson;">{{ $message }}</p> @enderror
                                        </div>
                                    </div>
    
                                    <div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>Service Slug</h5>
                                            <input type="text" class="with-border" name="slug" wire:model="slug">
                                            @error('slug')<p style="color: crimson;">{{ $message }}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>Tagline</h5>
                                            <input type="text" class="with-border" name="tagline" wire:model="tagline">
                                            @error('tagline')<p style="color: crimson;">{{ $message }}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>Service Category</h5>
                                            <select class="with-border" wire:model="service_category_id">
                                                <option value="">Select Service Category</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}" >{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('service_category_id')<p style="color: crimson;">{{ $message }}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="submit-field">
                                            <h5>Service Image</h5>
                                            <input type="file" class="with-border" name="image" wire:model="image">
                                            @error('image')<p style="color: crimson;">{{ $message }}</p> @enderror
                                            @if ($image)
                                                <img src="{{ $image->temporaryUrl() }}" width="120" alt="">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="submit-field">
                                            <h5>Service Description</h5>
                                            <textarea cols="30" rows="5" class="with-border" wire:model="description"></textarea>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Button -->
                    <div class="col-xl-12">
                        <input id=submitBtn type="submit" name="submit" value="Create Service" class="btn btn-info form-control-line"> 
                        
                    </div>
                    
                </div>
            </form>
            </div>
        </div>
    </div>
</div>

