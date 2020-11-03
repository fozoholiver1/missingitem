<?php

namespace App\Http\Livewire\Connectyu\Document;

use Livewire\Component;

class Show extends Component
{
    public function render()
    {
        return view('livewire.connectyu.document.show')->layout('layouts.guest');
    }
}
