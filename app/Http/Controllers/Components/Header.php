<?php

namespace App\Http\Controllers\Components;

use Livewire\Component;
use App\Models\sales as sale;
class Header extends Component
{

    public $sale;
    public $authentication=false;

    public function render()
    {
        $sales=sale::latest()->count();
        $this->sale=sale::latest()->get();
   
        foreach($this->sale as $row){

            if(Auth()->user()->name === $row->customer_name){
                $this->authentication=true;

            }else{
                $this->authentication=false;
            }

        }


        return view('components.header',compact('sales'))->extends('layouts.master');
    }
}
