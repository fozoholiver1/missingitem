<?php

namespace App\Http\Livewire;
use App\Models\Item;
use Livewire\Component;

class ItemShow extends Component
{

    public Item $item;

    public function render()
    {

;
        return view('livewire.item-show',[ 'item'=>$this->item,])->layout('layouts.guest');
    }
}
