<?php

namespace App\Http\Controllers\Admin\Dashboard;

use Livewire\Component;
use App\Models\electronics;
class Electronic extends Component
{
    public function render()
    {
        $Electronics=electronics::latest()->take(6)->get();

        return view('admin.dashboard.electronic')->extends('layouts.master')->with('Electronics',$Electronics);
    }
}
