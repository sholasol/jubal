<?php

namespace App\Http\Livewire;
 
use App\Models\Jobs;
use App\Models\User; 
use App\Models\Profile; 
use App\Models\ServiceCategory; 
use Livewire\Component;
use Livewire\WithPagination;

class HomeComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $jobs = Jobs::where('status', 'available')->orderBy('created_at', 'DESC')->limit(10)->get();
        $profs = Profile::all();
        // $profs = User::where('utype', 'CST')->inRandomOrder() ->limit(10)->get();
        $categories = ServiceCategory::inRandomOrder()->limit(12)->get();
        return view('livewire.home-component', ['jobs'=>$jobs, 'profs'=>$profs, 'categories'=>$categories])->layout('layouts.base');
    }
}
  