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

class ClientEditProfileComponent extends Component
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
    public $description;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'country' => 'required',
            'image' => 'required',
            'category' => 'required',
            'description' => 'required'
        ]);
    }

    public function createProfile()
    { 
        $this->validate([
            'country' => 'required',
            'image' => 'required',
            'category' => 'required',
            'description' => 'required'
        ]); 

        $profile = new Profile();
        $profile->name = Auth::user()->name;
        $profile->user_id = Auth::user()->id;
        $profile->category = $this->category;
        $profile->link = $this->link;
        $profile->link1 = $this->link1;
        $profile->link2 = $this->link2;
        $profile->rate = $this->rate;
        $profile->country = $this->country;
        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('profiles', $imageName); //storage directory and image name
        $profile->image = $imageName;
        $profile->description = $this->description;
        $profile->save();
        $this->dispatchBrowserEvent('done');
    } 
 


    public function render()
    {
        $scategories = ServiceCategory::orderBy('name', 'ASC')->get();
        return view('livewire.client.client-edit-profile-component', ['scategories'=>$scategories])->layout('layouts.admin');
    }
}
