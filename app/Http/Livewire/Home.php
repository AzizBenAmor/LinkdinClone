<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.home');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
