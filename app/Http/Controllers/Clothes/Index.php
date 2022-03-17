<?php

namespace App\Http\Controllers\Clothes;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Livewire\WithFileUploads;
use App\Models\Clothes;
class Index extends Component
{
    use WithFileUploads;
    public $title;
    public $excerpt;
    public $image;
    public $price;
    public $location;
    public $brand;


    public function SaveClothes()
    {
        $this->validate([
            'title' => 'required|max:50',
            'excerpt' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:12000',
            'price' => 'required',
            'location' => 'required|max:50',
            'brand' => 'required|max:50',
        ]);

        $GetFileUpload=\Str::random(10).'.'.$this->image->getClientOriginalExtension();
        $this->image->storeAs('Clothes',$GetFileUpload,'Hosts');

        Clothes::create([
            'title' =>$this->title,
            'excerpt' =>$this->excerpt,
            'image' =>$GetFileUpload,
            'price' =>$this->price,
            'location' =>$this->location,
            'brand' =>$this->brand,
        ]);
        notyf()->livewire()->position('y','top')->addSuccess('Clothes has been created successfully');
        return redirect()->back();


    }
    public function render()
    {
        return view('clothes.index')->extends('layouts.master');
    }
}
