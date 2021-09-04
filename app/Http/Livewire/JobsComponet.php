<?php

namespace App\Http\Livewire;

use App\Models\Jobs;
use Livewire\WithPagination;
use Livewire\Component; 

class JobsComponet extends Component
{
    use WithPagination;

    public function render()
    {
        $jobs = Jobs::where('status', 'available')->paginate(12);
        return view('livewire.jobs-componet', ['jobs'=>$jobs])->layout('layouts.bas');
    }
}
