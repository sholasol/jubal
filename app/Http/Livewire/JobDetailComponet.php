<?php

namespace App\Http\Livewire;

use App\Models\Jobs;
use App\Models\Applying; 

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class JobDetailComponet extends Component
{
    public $job_id;
    public $user_id;
    public $comment;
    public $pro_name;
 
    public function mount($job_id)
    {  
        $this->$job_id = $job_id;

        // $job = Jobs::where('id', $job_id )->first();
        // $this->pro_name = $job->pro_name;
    } 

    public function verifyforCheckout()
    {
        if(!Auth::check())
        {
            return redirect()->route('login');
        }
    }
 
    public function applyJob(){
        $apply = new Applying();
        $apply->job_id = $this->job_id;
        $apply->pro_name = $this->pro_name;
        $apply->user_id = Auth::user()->id;
        $apply->save();
        $this->dispatchBrowserEvent('success');
    }

    public function render()
    { 
        $this->verifyforCheckout();  
        $job = Jobs::find($this->job_id);
        return view('livewire.job-detail-componet', ['job'=>$job])->layout('layouts.base');
    }
}
