<?php

namespace App\Http\Livewire\Client;

use App\Models\Jobs;
use Livewire\Component;
use Livewire\WithPagination; 
use Illuminate\Support\Facades\Auth;

class ClientJobDoneComponent extends Component
{ 
    public function render()
    {
        $jobs = Jobs::where('taken_by', Auth::user()->id)->paginate(10);
        return view('livewire.client.client-job-done-component', ['jobs'=>$jobs])->layout('layouts.admin');
    }
}
