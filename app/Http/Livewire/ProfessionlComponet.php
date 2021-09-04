<?php

namespace App\Http\Livewire; 

use App\Models\User;
use App\Models\Jobs;
use App\Models\Profile;
use App\Models\Hiring;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ProfessionlComponet extends Component
{
    public $prof_id;
 
    public function mount($prof_id)
    { 
        $this->$prof_id = $prof_id;
    }  


    // public function hirePro(){
    //     $hire = new Hiring();
    //     $hire->pro_id = $this->prof_id;
    //     $hire->user_id = Auth::user()->id;
    //     $hire->user_name = Auth::user()->name;
    //     $hire->save();
    //     $this->dispatchBrowserEvent('success');
    // }


    // public function verifyforCheckout()
    // {
    //     if(!Auth::check())
    //     {
    //         return redirect()->route('login');
    //     }
    // }



 
    public function render()
    {
        //$this->verifyforCheckout(); 

        $prof = Profile::where('user_id', $this->prof_id)->first();
        
        $detail = User::where('id', $this->prof_id)->first();

        $jobs = Jobs::where('user_id', $this->prof_id)->orderBy('created_at', 'DESC')->paginate(10);

        return view('livewire.professionl-componet', ['prof' =>$prof, 'detail'=>$detail, 'jobs'=>$jobs])->layout('layouts.base');
        
    }
}
