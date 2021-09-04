<?php

namespace App\Http\Livewire\Admin;

 
use App\Models\User;
use App\Models\Profile; 
use Livewire\Component;
use Livewire\WithPagination;

class ProfessionalComponent extends Component
{
    use WithPagination;
    
    public function render()
    { 
        $profs = Profile::orderBy('name', 'ASC')->paginate(12);
        // $profs = Profile::where()->inRandomOrder() ->limit(10)->get();
        return view('livewire.admin.professional-component', ['profs'=>$profs])->layout('layouts.admin');
    }
}
