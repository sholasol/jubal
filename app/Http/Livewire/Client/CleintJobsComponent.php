<?php

namespace App\Http\Livewire\Client;

use App\Models\Jobs;
use Livewire\Component;
use Livewire\WithPagination; 

class CleintJobsComponent extends Component
{
    use WithPagination;

 

 
    public function render()
    {
        $jobs = Jobs::where('status', 'available')->paginate(10);
        return view('livewire.client.cleint-jobs-component', ['jobs'=>$jobs])->layout('layouts.admin');
    }
}
