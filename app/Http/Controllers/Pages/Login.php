<?php

namespace App\Http\Controllers\Pages;

use Livewire\Component;
use App\Models\User;
class Login extends Component
{
    public $username;
    public $password;
    public $check=null;
    public function updated($field)
    {
        $this->validateOnly($field, [
            'username' => 'required',
            'password' => 'required',
        ]);
    }
    public function Login(){
  
        $this->validate([
            'username' => 'required',
            'password' => 'required|min:8',
        ]);

        if(\Auth::attempt(['username' => $this->username, 'password' => $this->password])){
            return redirect()->route('welcome');
        }else{

           $this->check="the username and password do not match";
        }
    }
    public function render()
    {
        return view('pages.login')->extends('layouts.master');
    }
}
