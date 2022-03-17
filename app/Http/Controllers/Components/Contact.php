<?php

namespace App\Http\Controllers\Components;

use Livewire\Component;
use App\Models\Contact as Contacts;
class Contact extends Component
{

    public $name;
    public $email;
    public $message;
    public function saveContact(){

       $validation= $this->validate([
            'name' => 'required|max:100',
            'email' => 'required|email|unique:contacts,email',
            'message' => 'required|max:255|min:10',
        ]);

        Contacts::create($validation);
        notyf()->livewire()->position('y','top')->addSuccess("Your message has been sent successfully");
        $this->ResetInput();
        return redirect()->back();
   
    }

    public function ResetInput(){
        $this->name=null;
        $this->email=null;
        $this->message=null;
    }
    public function render()
    {
        return view('components.contact')->extends('layouts.master');
    }
}
