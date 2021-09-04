<?php

namespace App\Http\Livewire\Admin;

use App\Models\Jobs;
use Livewire\Component;
use Livewire\WithPagination;  

class JobsComponent extends Component
{
    use WithPagination;
 


    public function render() 
    {
        $jobs = Jobs::where('status' , 'available')->paginate(10);
        return view('livewire.admin.jobs-component', ['jobs'=>$jobs])->layout('layouts.admin');
    }
}
 