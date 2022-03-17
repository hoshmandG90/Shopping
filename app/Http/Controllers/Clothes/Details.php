<?php

namespace App\Http\Controllers\Clothes;

use Livewire\Component;
use App\Models\clothes;

class Details extends Component
{

    public $clothes;

    public function mount($id)
    {
        $this->clothes = clothes::find($id);
    }

    public function render()
    {
        return view('clothes.details')->extends('layouts.master');
    }
}
