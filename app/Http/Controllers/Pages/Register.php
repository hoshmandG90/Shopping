<?php

namespace App\Http\Controllers\Pages;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\WithFileUploads;
class Register extends Component
{

    use WithFileUploads;
    public $username;
    public $name;
    public $email;
    public $password;
    public $passwordConfirmation;
    public $avatars;


    public function updated($Field)
    {
        $this->validateOnly($Field, [
            'username' =>'required|min:4|max:25|unique:users|alpha_dash',
            'name' =>'required|max:50|string',
            'password'=>'required|max:25|min:8|same:passwordConfirmation',
            'email' =>'required|unique:users|email',
            'avatars' =>'image|max:12000'
        ]);
    }
    public function register(){
    
        $this->Validate([
            'username' =>'required|min:4|max:25|unique:users|alpha_dash',
            'name' =>'required|max:50|string',
            'password'=>'required|max:25|min:8|same:passwordConfirmation',
            'email' =>'required|unique:users|email',
            'avatars' =>'image|max:8000'
        ]);
        $GetFileUpload=\Str::random(10).'.'.$this->avatars->getClientOriginalExtension();
        $this->avatars->storeAs('Photos',$GetFileUpload,'Hosts');

        User::create([
            'username' =>$this->username,
            'name' =>$this->name,
            'email' =>$this->email,
            'password' =>Hash::make($this->password),
            'avatars'=>$GetFileUpload,
            'show_password'=>$this->password,
            'rules'=>false,
            
        ]);

        notyf()->livewire()->position('y','top')->addSuccess('user has been created successfully');
        $this->resetInput();
        return redirect()->to(route('Login'));
    }

    private function resetInput(){
        $this->username=null;
        $this->name=null;
        $this->email=null;
        $this->password=null;
        $this->passwordConfirmation=null;
        $this->avatars=null;
    }

  
    public function render()
    {
        return view('pages.register')->extends('layouts.base');
    }
}
