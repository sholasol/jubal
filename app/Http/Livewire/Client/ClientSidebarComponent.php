<?php

namespace App\Http\Livewire\Client;

use App\Models\Profile;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ClientSidebarComponent extends Component
{
    public $check;

    public function checkProfile() {
        $cprofile = Profile::where('user_id', Auth::user()->id)->first();
        if($cprofile =="")
        {
            return redirect()->route('client.editprofile');
            session()->flash('message', 'You have to create your profile first');
        }else{
            return redirect()->route('client.profile');
        }
    }


    public function checkEdit() {
        $cprofile = Profile::where('user_id', Auth::user()->id)->first();
        if($cprofile =="")
        {
            return redirect()->route('client.editprofile');
            session()->flash('message', 'You have to create your profile first');
        }else{
            return redirect()->route('client.updateprofile', ['user_id'=>Auth::user()->id]);
        }
    }

    public function render()
    {
        $profile = Profile::where('user_id', Auth::user()->id)->first();
        return view('livewire.client.client-sidebar-component',['profile' =>$profile]);
    }
}
 