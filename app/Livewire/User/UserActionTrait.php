<?php


namespace App\Livewire\User;


trait UserActionTrait
{
    public string $name = '';

    public string $email = '';

    public Collection $roles;

    protected $rules = [
        'name' => ['required'],
        'email' => ['required', 'email'],
    ];

    public function mountUserActionTrait()
    {
        // If you have roles model
        //$this->roles = Roles::class;
    }

    protected function getFormParameters(): array
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
        ];
    }
}
