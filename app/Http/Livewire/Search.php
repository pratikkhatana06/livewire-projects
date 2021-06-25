<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\User;
use WithPagination;

class Search extends Component
{
    public $searchTerm;

    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        return view('livewire.search',[
            'users' => User::where('name','like', $searchTerm)->paginate(10)
        ]);
    }
}
