<?php

namespace App\Http\Livewire\Admin;
use Illuminate\Support\Facades\Auth;

use Livewire\Component;

class LoginForm extends Component
{

    public $email;
    public $password;

    protected $rules = [
        'email' => [ 'required', 'email' ],
        'password' => 'required'
    ];

    public function login()
    {
        $credentials = $this->validate();

        if(Auth::attempt($credentials)) {
            return redirect()->intended(route('dashboard'));
        } else {
            $this->addError('email', trans('auth.failed'));
            return true;
        }
    }

    public function render()
    {
        return view('livewire.admin.login-form');
    }
}
