<?php

namespace App\Http\Controllers\Clothes;

use Livewire\Component;
use App\Models\clothes;
use App\Models\Sales;
class Details extends Component
{

    public $clothes;

    public $quantity;

    public function mount($id)
    {
        $this->clothes = clothes::find($id);
    }

    public function addToCart()
    {
        if($this->quantity){
            Sales::create([
                'title' => $this->clothes->title,
                'excerpt' => $this->clothes->excerpt,
                'price' => $this->clothes->price,
                'quantity' => $this->quantity,
                'location' => $this->clothes->location,
                'brand' => $this->clothes->brand,
            ]);
            notyf()->livewire()->position('y','top')->addSuccess("Your item has been added to cart");
            return redirect()->back();


        }else{
            notyf()->livewire()->position('y','top')->addError("Please enter quantity");
            return redirect()->back();
        }
       

    }

    public function render()
    {
        return view('clothes.details')->extends('layouts.master');
    }
}
