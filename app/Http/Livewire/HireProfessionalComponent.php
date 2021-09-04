<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Jobs;
use App\Models\Profile;
use App\Models\Hiring;
use App\Models\ServiceCategory;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class HireProfessionalComponent extends Component
{

    public $prof_id;
    public $title;
    public $service_category;
    public $comment;
    public $user_id;
 
    public function mount($prof_id)
    { 
        $this->$prof_id = $prof_id;
    }  

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'title' => 'required',
            'comment' => 'required'
        ]);
    }


    public function verifyforCheckout()
    {
        if(!Auth::check())
        {
            return redirect()->route('login');
        }
    }

    public function postJob()    {
        $this->validate([
            'title' => 'required',
            'comment' => 'required'
        ]); 

        $hire = new Hiring();
        $hire->user_id = $this->user_id;
        $hire->title = $this->title;
        $hire->user_id = Auth::user()->id;
        $hire->user_name = Auth::user()->name;
        $hire->comment = $this->comment;
        $hire->save();
        $this->dispatchBrowserEvent('success');
    }


    public function render()
    {
        $this->verifyforCheckout();  
        $prof = Profile::where('user_id', $this->prof_id)->first();
        $scategories = ServiceCategory::orderBy('name', 'ASC')->get();
        return view('livewire.hire-professional-component', ['prof' =>$prof, 'scategories'=>$scategories])->layout('layouts.base');
    } 
}
