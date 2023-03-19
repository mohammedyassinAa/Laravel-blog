<?php

namespace App\Http\Livewire;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class DeleteUser extends ModalComponent
{
    public ?int $userid;

    // public function mount(User $user)
    // {
    //     $this->user = $user;
    // }

    // public function deleteUser($userid)
    // {
    //     // <school-laravel></school-laravel>
    //     // TODO: Check for validation
    //     $user = User::where('id', $userid)->first();
    //     if ($user) {
    //         $user->delete();
    //     }
    //     return redirect()->back();
    // }
    public function deleteUser($userid)
{
    $user = User::where('id', $userid)->first();

    if ($user) {
        $user->delete();

        // Update the data source to reflect the updated data
        $this->dataSource = $this->dataSource->except($userid);
    }
    
    session()->flash('message', 'User deleted successfully.');

    return redirect()->back();
}
    

    public function render()
    {
        return view('livewire.delete-user');
    }
    
}