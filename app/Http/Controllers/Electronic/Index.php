<?php

namespace App\Http\Controllers\Electronic;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Livewire\WithFileUploads;
use App\Models\Electronics;
class Index extends Component
{
    use WithFileUploads;
    public $title;
    public $excerpt;
    public $image;
    public $price;
    public $location;
    public $brand;



    public  function SaveElectronic(){
        $this->validate([
            'title' => 'required|max:50',
            'excerpt' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:12000',
            'price' => 'required',
            'location' => 'required|max:50',
            'brand' => 'required|max:50',
        ]);

        $GetFileUpload=\Str::random(10).'.'.$this->image->getClientOriginalExtension();
        $this->image->storeAs('Electronics',$GetFileUpload,'Hosts');

        Electronics::create([
            'title' =>$this->title,
            'excerpt' =>$this->excerpt,
            'image' =>$GetFileUpload,
            'price' =>$this->price,
            'location' =>$this->location,
            'brand' =>$this->brand,
        ]);
        notyf()->livewire()->position('y','top')->addSuccess('Electronic has been created successfully');
        return redirect()->back();

   
    }

    
    
    public function render()
    {
        return view('electronic.index')->extends('layouts.master');
    }
}


