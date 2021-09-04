<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminJobCandidateComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-job-candidate-component')->layout('layouts.admin');
    }
}
