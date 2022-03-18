<?php

namespace App\Http\Controllers\Admin;

use Livewire\Component;
use App\Models\sales as sale;
use App\Models\checkout;
class Sales extends Component
{


    public $authentication=false;

 
    public function remove($id)
    {
        sale::find($id)->delete();
        notyf()->livewire()->position('y','top')->addSuccess("Your item has been removed ");
        return redirect()->back();
    }

    public function processcheckout()
    {
        $sale=sale::latest()->get();

        foreach($sale as $row){
            checkout::create([
                'title' => $row->title,
                 'excerpt' => $row->excerpt,
                   'price' => $row->price,
                   'quantity' => $row->quantity,
                   'location' => $row->location,
                   'brand' => $row->brand,
                   'image' => $row->image,
                   'customer_name' => $row->customer_name,
               ]);
        }
  
        sale::truncate();
        notyf()->livewire()->position('y','top')->addSuccess("Your item has been added to cart");
        return redirect()->back();
    }
    public function render()
    {

        $sales=sale::latest()->get();

        
        $this->sale=sale::latest()->get();
   
        foreach($this->sale as $row){

            if(\Auth::user()->name === $row->customer_name){
                $this->authentication=true;

            }else{
                $this->authentication=false;
            }
        }

        return view('admin.sales',compact('sales'))->extends('layouts.master');
    }
}
