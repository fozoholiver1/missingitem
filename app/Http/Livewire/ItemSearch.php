<?php

namespace App\Http\Livewire;

use App\Models\Item;
use Livewire\Component;

class ItemSearch extends Component
{
    public $search;
    protected $queryString = ['search'];
    public function render()
    {
        $this->items= Item::all();

        return view('livewire.item-search',
            [
//                'items' => Item::where('owner', $this->search)->get(),


                    'items' => Item::where('owner', 'like', '%'.$this->search.'%')->get(),


            ]);;
    }
}
