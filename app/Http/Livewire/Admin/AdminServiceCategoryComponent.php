<?php

namespace App\Http\Livewire\Admin;

use App\Models\ServiceCategory;
use Livewire\Component;
use Livewire\WithPagination;

class AdminServiceCategoryComponent extends Component
{
    use WithPagination;

    public function deleteCategory($id)
    {
        $scategory = ServiceCategory::find($id);
        if($scategory->image)
        {
            unlink('asset/image/serviceCategory'.'/'.$scategory->image);
        }
        $scategory->delete();
        $this->dispatchBrowserEvent('success');
    }

    public function render()
    {
        $scategories = ServiceCategory::paginate(10);
        return view('livewire.admin.admin-service-category-component', ['scategories' =>$scategories])->layout('layouts.admin');
    }
}
