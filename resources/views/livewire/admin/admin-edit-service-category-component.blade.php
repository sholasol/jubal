<div>
    <div class="dashboard-container">

        <!-- Dashboard Sidebar
        ================================================== -->
        @livewire('admin.admin-sidebar-component') 

        <div class="dashboard-content-container" data-simplebar>
            <div class="dashboard-content-inner" >
                
                <!-- Dashboard Headline -->
                <div class="dashboard-headline">
                    <h3>Edit Service Category</h3>
                    @if(Session::has('message'))
                             <div class="alert alert-success" style="color: rgb(95, 243, 10);">{{ Session::get('message') }}</div>
                        @endif
                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs" class="dark">
                        <ul>
                            <li><a href="{{ route('admin.service_category') }}">Service Category</a></li>
                        </ul>
                    </nav>
                </div>
        
                <!-- Row -->
                <form wire:submit.prevent="updateCategory" enctype="multipart/form-data">
                    @csrf
                <div class="row">
                    
                    <div class="col-xl-12">
                        <div id="test1" class="dashboard-box">
    
                            <!-- Headline -->
                            <div class="headline">
                                <h3><i class="icon-material-outline-lock"></i>Create Service Category</h3>
                            </div>
    
                            <div class="content with-padding">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Service Category Name</h5>
                                            <input type="text" class="with-border" name="name" wire:model="name" wire:keyup="generateSlug">
                                            @error('name')<p style="color: crimson;">{{ $message }}</p> @enderror
                                        </div>
                                    </div>
    
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Service Category Slug</h5>
                                            <input type="text" class="with-border" name="slug" wire:model="slug">
                                            @error('slug')<p style="color: crimson;">{{ $message }}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-4"> 
                                        <div class="submit-field">
                                            <h5>Service Image</h5>
                                            <input type="file" class="with-border" name="image" wire:model="newimage">
                                            @error('newimage')<p style="color: crimson;">{{ $message }}</p> @enderror
                                            @if ($newimage)
                                                <img src="{{ $newimage->temporaryUrl() }}" width="120" alt="">
                                            @else
                                                <img src="{{ asset('asset/image/serviceCategory') }}/{{ $image }}" width="120" alt="">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                    
                    <!-- Button -->
                    <div class="col-xl-12">
                        <input id=submitBtn type="submit" name="submit" value="Update Category" class="btn btn-info form-control-line"> 
                        {{-- wire:click="reset()" --}}
                        {{-- <button type="submit" name="submit"  class="button ripple-effect big margin-top-30">Save Changes</button> --}}
                    </div>
                    
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
