<?php

namespace App\Http\Controllers\Components;

use Livewire\Component;

class Header extends Component
{
    public function render()
    {
        return view('components.header')->extends('layouts.master');
    }
}
