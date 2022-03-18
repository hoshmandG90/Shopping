<?php

namespace App\Http\Controllers\Electronic;

use Livewire\Component;
use App\Models\electronics;
use App\Models\Sales;
class Details extends Component{

    public $electronic;

    public $quantity;
    public function mount($id){
        $this->electronic=electronics::find($id);
    }

    public function addToCart()
    {
        if($this->quantity){
            Sales::create([
                'customer_name'=>auth()->user()->name,
                'title' => $this->electronic->title,
                'excerpt' => $this->electronic->excerpt,
                'price' => $this->electronic->price,
                'quantity' => $this->quantity,
                'location' => $this->electronic->location,
                'brand' => $this->electronic->brand,
                'image' => $this->electronic->image,
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
        return view('electronic.details')->extends('layouts.master');
    }
}
