<div>

        <div class="dashboard-content-container" data-simplebar>
            <div class="dashboard-content-inner" >
                
                <!-- Dashboard Headline -->
                <div class="dashboard-headline">
                    <h3>Add Service Cat</h3>
                    @if(Session::has('message'))
                             <div class="alert alert-success">{{ Session::get('message') }}</div>
                        @endif
                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs" class="dark">
                        <ul>
                            <li><a href="{{ route('admin.service_category') }}">Service Category</a></li>
                        </ul>
                    </nav>
                </div>

               <div class="panel-default">
                   <div class="panel-heading">
                        <h3>Add New Service Category</h3>
                   </div>
                   <div class="panel-body">
                       @if(Session::has('message'))

                         <div class="alert alert-success">
                             {{ Session::get('message') }}
                        </div>  
                       @endif
                    <form wire:submit.prevent="createNewCategory">
                        @csrf
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Category Name</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" name="name" wire:model="name" wire:keyup="generateSlug">
                          @error('name')<p>{{ $message }}</p> @enderror
                          <div id="emailHelp" class="form-text">Category Name</div>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Category Slug</label>
                          <input type="text" class="form-control" name="slug" wire:model="slug">
                          @error('slug')<p>{{ $message }}</p> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Category Image</label>
                            <input type="file" class="form-control" name="image" wire:model="image">
                            @error('image')<p>{{ $message }}</p> @enderror
                          </div>
                        <button type="submit" class="btn" style="color: rgb(1, 13, 20);">Add Category</button>
                      </form>
                   </div>
               </div>
            </div>
        </div> 
</div>
