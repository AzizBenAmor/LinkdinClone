<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Login extends Component
{
    public $form=[
        'email'=>'',
        'password'=>''
    ];
   
    protected $rules = [
        'form.email' => 'required|email|exists:users,email',
        'form.password' => 'required|min:6|max:30',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function login(){
        $this->validateOnly($this->form['email']);
        $this->validateOnly($this->form['password']);

        if( Auth::attempt($this->form) ){
            return redirect()->route('home');
        }else{
            return redirect()->route('login')->with('fail','Incorrect credentials');
        }
    }
    public function render()
    {
        return view('livewire.login');
    }
}
