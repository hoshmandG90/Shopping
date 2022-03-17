<?php

namespace App\Http\Controllers\Electronic;

use Livewire\Component;
use App\Models\electronics;
class View extends Component
{

    public $limit=9;


    public function Increment(){
        $this->limit+=3;
    }
    public function render()
    {
        $electronics=electronics::latest()->paginate($this->limit);
        return view('electronic.view',compact('electronics'))->extends('layouts.master');
    }
}
