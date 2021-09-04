<?php

namespace App\Http\Livewire\Admin;

use App\Models\Services;
use App\Models\ServiceCategory;
use Livewire\Component;
use Carbon\Carbon;
use Illuminate\Support\Str; 
use Livewire\WithFileUploads;

class AdminAddServicesComponent extends Component
{
    use WithFileUploads; 
    public $name;
    public $slug;
    public $image;
    public $tagline;
    public $service_category_id;
    public $description;

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
    }

    public function createNewService()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required',
            'tagline' => 'required',
            'service_category_id' =>'required'
        ]); 
        $service = new Services();
        $service->name = $this->name;
        $service->slug = $this->slug;
        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('services', $imageName);
        $service->image = $imageName;
        $service->tagline = $this->tagline;
        $service->service_category_id  = $this->service_category_id ;
        $service->description = $this->description;
        $service->save();
        $this->dispatchBrowserEvent('success');
    }

    public function render()
    {
        $categories = ServiceCategory::all(); 
        return view('livewire.admin.admin-add-services-component', ['categories'=>$categories])->layout('layouts.admin');
    }
}
