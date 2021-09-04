<?php

namespace App\Http\Livewire\Admin;

use App\Models\ServiceCategory;
use Livewire\Component;
use Carbon\Carbon;
use Illuminate\Support\Str; 
use Livewire\WithFileUploads;

class AdminEditServiceCategoryComponent extends Component
{
    use WithFileUploads;

    
    public $category_id;
    public $name;
    public $slug;
    public $image;
    public $newimage;


    public function mount($category_id)
    {
        
        $scategory = ServiceCategory::find($category_id);
        $this->category_id = $scategory->id;
        $this->name = $scategory->name;
        $this->slug = $scategory->slug;
        $this->image = $scategory->image;

    }
  

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name, '-');
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required',
            'slug' => 'required'
        ]);


        //validate new image
        if($this->newimage)
        {
            $this->validateOnly($fields, [
                'newimage' => 'required|mimes:png,jpeg'
            ]);
        }
    }

    public function updateCategory()
    {
        //form validation before processing
        $this->validate([
            'name' =>'requi red',
            'slug'  =>'required'
        ]);

        //validate new image
        if($this->newimage)
        {
            $this->validate([
                'newimage' => 'required|mimes:png,jpeg'
            ]);
        }


        

        $scategory = ServiceCategory::find($this->category_id);
        $scategory->name = $this->name;
        $scategory->slug = $this->slug;
        //if new image is selected
        if($this->newimage)
        {
            $imageName = Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('serviceCategory', $imageName); //storage directory and image name
            $scategory->image = $imageName;
        } 
        $scategory->save();

        $this->dispatchBrowserEvent('success');

        //session()->flash('message', 'Category updated successfully');
    }



    public function render()
    {
        $scategories = ServiceCategory::all(); 
        return view('livewire.admin.admin-edit-service-category-component', ['scategories'=>$scategories])->layout('layouts.admin');
    }
}
