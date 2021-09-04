<?php
 
namespace App\Http\Livewire\Admin;

use App\Models\Services;
use Livewire\Component;
use Livewire\WithPagination;  

class AdminServicesComponent extends Component
{
    use WithPagination;

    public function deleteService($id)
    {
        $service = Services::find($id);
        if($service->image)
        {
            unlink('asset/image/services'.'/'.$service->image);
        }
        $service->delete();
        $this->dispatchBrowserEvent('success');
    }

    public function render()
    {
        $services = Services::paginate(10);
        return view('livewire.admin.admin-services-component', ['services' => $services])->layout('layouts.admin');
    }
}
