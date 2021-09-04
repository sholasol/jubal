<?php

namespace App\Http\Livewire\Client;

use App\Models\Profile;
use App\Models\Jobs;
use App\Models\Hiring;
use Illuminate\Support\Facades\Auth;
use Livewire\Component; 

class ClientHireProfessionalComponent extends Component
{
     
    public $pro_id;
    public $comment;
    public $title;
    public $city;
    public $service_category;



    public function mount($pro_id)
    {  
        $this->$pro_id = $pro_id;
    } 


    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'title' => 'required',
            'city' => 'required',
            'comment' => 'required'
        ]);
    }


    public function postJob()
    {
        $this->validate([
            'title' => 'required',
            'city' => 'required',
            'comment' => 'required'
        ]); 
        
        $hire = new Hiring();
        $hire->title = $this->title;
        $hire->user_id = Auth::user()->id;
        $hire->user_name = Auth::user()->name;
        $hire->pro_id = $this->pro_id;
        $hire->comment = $this->comment;
        $hire->city = $this->city;
        $hire->save();
        $this->dispatchBrowserEvent('success');

    }


 
    public function render()
    {
        $prof = Profile::where('user_id', $this->pro_id)->first();
        $jobs = Jobs::where('user_id', $this->pro_id)->orderBy('created_at', 'DESC')->paginate(10);
        return view('livewire.client.client-hire-professional-component',['prof'=>$prof, 'jobs'=>$jobs])->layout('layouts.admin');
    }
}
