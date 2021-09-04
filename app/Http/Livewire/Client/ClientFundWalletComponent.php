<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;

class ClientFundWalletComponent extends Component
{
    public function render()
    {
        return view('livewire.client.client-fund-wallet-component')->layout('layouts.admin'); 
    }
}
