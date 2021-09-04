<?php

namespace App\Http\Livewire\Client;




use App\Models\User;
use App\Models\Profile;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class CleinProfessionalComponent extends Component
{
    public function render()
    { 
        $profs = Profile::paginate(12);
        return view('livewire.client.clein-professional-component', ['profs'=>$profs])->layout('layouts.admin');
    }
}
