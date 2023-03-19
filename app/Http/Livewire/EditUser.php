<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EditUser extends Component
{
    public function render()
    {
        return view('livewire.edit-user');
    }
    
    public function someComponentMethod()
    {
        $this->forceClose()->closeModal();
    }
}