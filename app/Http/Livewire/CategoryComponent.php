<?php

namespace App\Http\Livewire;

use App\Models\ServiceCategory; 
use App\Models\Profile;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryComponent extends Component
{
    use WithPagination;
    public $category_slug; 
    public $category_name; 
    

    public function mount($category_slug)
    {
        // $this->sorting = "default";
        // $this->pagesize = 12;
        $this->category_slug = $category_slug;
    }

    public function render()
    {
        $category = ServiceCategory::where('slug',$this->category_slug)->first();
        $category_id = $category->id;
        $category_name = $category->name;

        $categories = ServiceCategory::all();

        $profs = Profile::where('category', $category_name)->orderBy('name', 'ASC')->paginate(10);

        return view('livewire.category-component', ['profs'=>$profs])->layout('layouts.bas');
    }
}
