<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Selector extends Component
{
    public $selected = [];

    public $listeners = ['userSelected' => 'select'];

    public function select($user)
    {
        $this->selected[] = $user;
    }

    public function clearSelected()
    {
        $this->selected = [];
    }

    public function render()
    {
        return view('livewire.selector');
    }
}
