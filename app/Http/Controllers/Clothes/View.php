<?php

namespace App\Http\Controllers\Clothes;

use Livewire\Component;
use App\Models\clothes;
class View extends Component
{

    public $limit=9;


    public function Increment(){
        $this->limit+=3;
    }
    public function render()
    {

        $clothes=clothes::latest()->paginate($this->limit);
        return view('clothes.view',compact('clothes'))->extends('layouts.master');
    }
}
