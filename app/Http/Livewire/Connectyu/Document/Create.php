<?php

namespace App\Http\Livewire\Connectyu\Document;

use Livewire\Component;

class Create extends Component
{
    public $title;
    public $body;
    protected $rules=[

    ];

    public function render()
    {
        return view('livewire.connectyu.document.create')->layout('layouts.guest');
    }
}
