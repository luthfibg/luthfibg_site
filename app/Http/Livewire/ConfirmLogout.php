<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ConfirmLogout extends Component
{
    public $confirm;
    public function render()
    {
        return view('livewire.confirm-logout');
    }
    public function confirmLogout($id)
    {
        $this->confirm = $id;
    }
    public function killUser()
    {
        Auth::logout();
    }
}