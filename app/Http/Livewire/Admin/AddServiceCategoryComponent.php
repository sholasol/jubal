<?php

namespace App\Http\Livewire\Admin;

use App\Models\ServiceCategory;
use Livewire\Component;
use Carbon\Carbon;
use Illuminate\Support\Str; 
use Livewire\WithFileUploads;


class AddServiceCategoryComponent extends Component
{
    use WithFileUploads; 
    public $name;
    public $slug;
    public $image;


    public function generateSlug()
    {
        $this->slug = Str::slug($this->name, '-');
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required',
            'slug' => 'required',
            'image' => 'required|mimes:png,jpg, jpeg'
        ]);
    }

    public function createNewCategory()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required',
            'image' => 'required|mimes:png,jpg, jpeg'
        ]); 

        $scategory = new ServiceCategory();
        $scategory->name = $this->name;
        $scategory->slug = $this->slug;
        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('serviceCategory', $imageName);
        $scategory->image = $imageName;
        $scategory->save();
        $this->dispatchBrowserEvent('success');
        //session()->flash('message', 'Service category has been created successfully'); 

    }

    public function render()
    {
        return view('livewire.admin.add-service-category-component')->layout('layouts.admin');
    }
}
