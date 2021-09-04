<?php

namespace App\Http\Livewire\Client;

use App\Models\Profile;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ClientProfileComponent extends Component
{
    public function render()
    {
        $profile = Profile::where('user_id', Auth::user()->id)->first();
        return view('livewire.client.client-profile-component', ['profile' =>$profile])->layout('layouts.admin');
    }
}
