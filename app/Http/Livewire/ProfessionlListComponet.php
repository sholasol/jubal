<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Profile;
use Livewire\Component;
use Livewire\WithPagination;

class ProfessionlListComponet extends Component 
{ 
    use WithPagination;
    public function render()
    {
        $profs = Profile::orderBy('name', 'ASC')->paginate(12);
        // $profs = Profile::orderBy('name', 'ASC')->inRandomOrder() ->limit(9)->get();
        return view('livewire.professionl-list-componet', ['profs' =>$profs])->layout('layouts.bas');
    }
}
