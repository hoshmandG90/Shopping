<?php

namespace App\Http\Controllers\Admin\Dashboard;

use Livewire\Component;
use App\Models\Clothes as clothe;
class Clothes extends Component
{

    public function render()
    {
        $clothes=clothe::latest()->take(6)->get();
        return view('admin.dashboard.clothes',compact('clothes'))->extends('layouts.master');
    }
}
