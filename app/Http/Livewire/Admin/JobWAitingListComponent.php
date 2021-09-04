<?php

namespace App\Http\Livewire\Admin;

use App\Models\Jobs;
use Livewire\Component;
use Livewire\WithPagination; 

class JobWAitingListComponent extends Component
{
    // public $user_id;
    // public $id;
    // use WithPagination;

    // public function mount()
    // {

    // }

    

    public function approveJob($id)
    {
        Jobs::where('id', $id)->update([
            'status' =>'approved'
        ]);
        $this->dispatchBrowserEvent('success');
    }

    public function deleteJob($id)
    {
        $job = Jobs::find($id);
        $job->delete();
        $this->dispatchBrowserEvent('success');
    }




    public function render()
    {
        $jobs = Jobs::where('status' , 'available')->paginate(10);
        return view('livewire.admin.job-w-aiting-list-component',['jobs'=>$jobs])->layout('layouts.admin');
    }
}
