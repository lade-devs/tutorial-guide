<?php

namespace App\Livewire\User;

use Livewire\Component;

class Create extends Component
{
    use UserActionTrait;

    public function render()
    {
        return view('livewire.user.create');
    }

    public function store()
    {
        $this->validate();

        User::query()->create($this->getFormParameters());
    }
}
