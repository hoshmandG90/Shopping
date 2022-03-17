<?php

namespace App\Http\Controllers\Electronic;

use Livewire\Component;
use App\Models\electronics;

class Details extends Component{

    public $electronic;

    public function mount($id){
        $this->electronic=electronics::find($id);
    }
    public function render()
    {
        return view('electronic.details')->extends('layouts.master');
    }
}
