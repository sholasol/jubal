<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;

class ClientWalletComponent extends Component
{
    public function render()
    {
        return view('livewire.client.client-wallet-component')->layout('layouts.admin');
    }
}
