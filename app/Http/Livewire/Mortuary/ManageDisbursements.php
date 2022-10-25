<?php

namespace App\Http\Livewire\Mortuary;

use Livewire\Component;
use Auth;

class ManageDisbursements extends Component
{
    public function render()
    {
        $data = $this->getData();
        return view('livewire.mortuary.manage-disbursements', compact('data'))
                ->layout('layouts.admin');
    }

    public function getData()
    {
        return [];
    }
}
