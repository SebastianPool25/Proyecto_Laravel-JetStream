<?php

namespace App\Http\Livewire;
use App\Models\User;
use Livewire\Component;

class BuscardorUsers extends Component
{
    public $search = '';
    public function render()
    {
        return view('livewire.buscardor-users', [
            'users' => User::where('name', 'like', '%'.$this->search.'&' )->get(),
        ]);
    }
}
