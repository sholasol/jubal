<?php

namespace App\Http\Livewire\Professional;

use Livewire\Component;

class ProfessionalDashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.professional.professional-dashboard-component')->layout('layouts.admin');
    }
}
