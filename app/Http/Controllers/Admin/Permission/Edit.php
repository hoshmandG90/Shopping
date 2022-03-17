<?php

namespace App\Http\Controllers\Admin\Permission;

use Livewire\Component;
use App\Models\User;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Hash;
class Edit extends Component
{

    public $user;

    use WithFileUploads;
    public $username;
    public $name;
    public $email;
    public $NewAvatar;
    public $password;
    public $passwordConfirmation;

    public function mount(User $user){
        $this->user = $user;
        $this->username = $user->username;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->user = $user;

    }

    public function updated($Field){
        $this->validateOnly($Field,[
            'username' => 'required|alpha_dash|max:10|min:4|unique:users,username,'.$this->user->id,
            'name' => 'required|string|max:50',
            'email' => 'required|email|unique:users,email,'.$this->user->id,
            'password' => 'required|max:25|min:8|same:passwordConfirmation',
        ]);
    }

    
    public function EditUser(User $user){
        $this->Validate([
            'username' => 'required|alpha_dash|max:10|min:4|unique:users,username,'.$this->user->id,
            'name' => 'required|string|max:50',
            'email' => 'required|email|unique:users,email,'.$this->user->id,
            'password' => 'required|max:25|min:8|same:passwordConfirmation',
   
           ]);

      

           $this->user->update([
            'username'=>$this->username,
            'name'=>$this->name,
            'password'=>Hash::make($this->password),
            'show_password'=>$this->password,
            'email'=>$this->email,
        ]);        
        notyf()->livewire()->position("y","top")->addSuccess("successfully $user->username  updated");
        return redirect()->back();


    }
    public function render()
    {
        return view('admin.permission.edit')->extends('layouts.master');
    }
}
