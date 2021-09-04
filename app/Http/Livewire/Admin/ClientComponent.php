<?php

namespace App\Http\Livewire\Admin;

use App\Models\Jobs;
use Livewire\Component;

use Livewire\WithPagination;

class ClientComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $jobs = Jobs::orderBy('created_at', 'DESC')->paginate(12);
        return view('livewire.admin.client-component', ['jobs' =>$jobs])->layout('layouts.admin');
    }
} 
