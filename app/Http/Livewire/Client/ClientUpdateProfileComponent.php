<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use App\Models\Profile;
use App\Models\Jobs;
use App\Models\Services;
use App\Models\ServiceCategory; 
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

class ClientUpdateProfileComponent extends Component
{
    use WithFileUploads;

    public $gender;
    public $image;
    public $country;
    public $category;
    public $link;
    public $link1;
    public $link2;
    public $link3;
    public $rate;
    public $user_id;
    public $profile_id;
    public $description;
    public $newimage;

    public function mount($user_id)
    {
        $profile = Profile::where('user_id', $user_id)->first();
        $this->user_id = $profile->user_id;
        $this->link = $profile->link;
        $this->category = $profile->category;
        $this->link1 = $profile->link1;
        $this->link2 = $profile->link2;
        $this->image = $profile->image;
        $this->rate = $profile->rate;
        $this->country = $profile->country;
        $this->description = $profile->description;
        $this->profile_id = $profile->id;
        
        //$profile->user_id = Auth::user()->id;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'country' => 'required',
            'category' => 'required',
            'description' => 'required'
        ]);
    }

    public function updateProfile()
    { 
        $this->validate([
            'country' => 'required',
            'category' => 'required',
            'description' => 'required'
        ]); 

        $profile = Profile::find($this->profile_id);
        $profile->link = $this->link;
        $profile->link1 = $this->link1;
        $profile->link2 = $this->link2;
        $profile->category = $this->category;
        $profile->rate = $this->rate;
        $profile->country = $this->country;

        if($this->newimage)
        {
            $imageName = Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('profiles', $imageName); //storage directory and image name
            $profile->image = $imageName;
        } 

        $profile->description = $this->description;
        $profile->save();
        $this->dispatchBrowserEvent('done'); 
    }


    public function render()
    {
        $scategories = ServiceCategory::orderBy('name', 'ASC')->get();
        return view('livewire.client.client-update-profile-component', ['scategories'=>$scategories])->layout('layouts.admin');
    }
}
