<?php

namespace App\Http\Livewire\Admin;

use App\Models\Jobs;
use App\Models\User; 
use App\Models\Profile; 
use App\Models\ServiceCategory; 
use Livewire\Component;
use Livewire\WithPagination;
 
class AdminDashboardComponent extends Component
{
    public function render()
    {
        $jobs = Jobs::where('status', 'available')->orderBy('created_at', 'DESC')->limit(5)->get();
        $profs = Profile::orderBy('created_at', 'DESC')->limit(5)->get();
        $pros = Profile::all();
        $allservices = ServiceCategory::all();
        return view('livewire.admin.admin-dashboard-component', ['jobs'=>$jobs, 'profs'=>$profs, 'pros'=>$pros, 'allservices'=>$allservices])->layout('layouts.admin');
    }
}
 