<?php

namespace App\Http\Livewire\Admin;

use App\Models\Services;
use App\Models\ServiceCategory;
use Livewire\Component;
use Carbon\Carbon;
use Illuminate\Support\Str; 
use Livewire\WithFileUploads;

class AdminEditServicesComponent extends Component
{
    use WithFileUploads; 
    public $name;
    public $slug;
    public $image;
    public $newimage;
    public $tagline;
    public $service_category_id;
    public $description;
    public $service_id;

    public function mount($service_id)
    {
         
        $service = Services::find($service_id);
        $this->id = $service->id;
        $this->name = $service->name;
        $this->slug = $service->slug;
        $this->image = $service->image;
        $this->tagline = $service->tagline;
        $this->description = $service->description;
        $this->image = $service->image;
        $this->service_category_id = $service->service_category_id; 
    } 


    public function generateSlug()
    {
        $this->slug = Str::slug($this->name, '-');
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required',
            'slug' => 'required',
            'tagline' => 'required',
            'service_category_id' =>'required'
        ]);

        //validate new image
        if($this->newimage)
        {
            $this->validateOnly($fields, [
                'newimage' => 'required|mimes:png,jpeg'
            ]);
        }
    }

    public function updateService()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required', 
            'tagline' => 'required',
            'service_category_id' =>'required'
        ]); 

        //validate new image
        if($this->newimage)
        {
            $this->validate([
                'newimage' => 'required|mimes:png,jpeg'
            ]);
        }

        $service = Services::find($this->service_id);
        $service->name = $this->name;
        $service->slug = $this->slug;
        //if new image is selected
        if($this->newimage)
        {
            $imageName = Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('services', $imageName); //storage directory and image name
            $service->image = $imageName;
        } 
        $service->tagline = $this->tagline;
        $service->service_category_id  = $this->service_category_id ;
        $service->description = $this->description;
        $service->save();
        $this->dispatchBrowserEvent('success');
    }
 
 
    public function render()
    {
        $categories = ServiceCategory::all(); 
        return view('livewire.admin.admin-edit-services-component', ['categories'=>$categories])->layout('layouts.admin');
    }
}
