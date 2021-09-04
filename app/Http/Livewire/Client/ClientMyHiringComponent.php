<?php

namespace App\Http\Livewire\Client;

use App\Models\Profile;
use App\Models\Jobs;
use App\Models\Hiring;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination; 

class ClientMyHiringComponent extends Component
{
    use WithPagination;


    public function render()
    {
        $hires = Hiring::where('pro_id', Auth::user()->id)->orderBy('created_at', 'DESC')->paginate(10);
        return view('livewire.client.client-my-hiring-component', ['hires'=>$hires])->layout('layouts.admin');
    }
}
