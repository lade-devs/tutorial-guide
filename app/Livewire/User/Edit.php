<?php

namespace App\Livewire\User;

use Livewire\Component;

class Edit extends Component
{
    use UserActionTrait;

    public $user;

    public function mount()
    {
        $this->user = User::find(1);
    }

    public function render()
    {
        return view('livewire.user.edit');
    }

    public function store()
    {
        $this->validate();

        $this->user->update($this->getFormParameters());
    }
}
