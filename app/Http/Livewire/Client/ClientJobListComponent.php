<?php

namespace App\Http\Livewire\Client;

use App\Models\Jobs;
use Livewire\Component;
use Livewire\WithPagination; 
use Illuminate\Support\Facades\Auth;

class ClientJobListComponent extends Component
{
    use WithPagination;


    public function render()
    {
        //$jobs = Jobs::paginate(10);
        $jobs = Jobs::where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->paginate(10);
        return view('livewire.client.client-job-list-component', ['jobs'=>$jobs])->layout('layouts.admin');
    } 
}
