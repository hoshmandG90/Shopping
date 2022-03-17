<?php

namespace App\Http\Controllers\Admin\Permission;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $search;
    public $perPage = 25;
    public $sortField = 'id';
    public $sortAsc = true;
    public $selected = [];
    public $selectedRows=[];
    public $selectedPageRows=false;

    public function updatingSearch()
    {
        // this function is used to update hook the search
        $this->resetPage();
    }


 
    
    public function deleteUsers()
    {
        // this function is used to delete user when the selected checkbox is checked
       User::destroy($this->selectedRows);
       notyf()->livewire()->position('y','top')->addSuccess('User Deleted Successfully');
       return redirect()->back();       
    }

    public function getUsersProperty()
    {
        return User::search($this->search)->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
        ->Paginate($this->perPage);
    }

    public function updatedselectedPageRows($value){
        // this function is used to updatedselectedPageRows the selected rows in the table
                
        if($value){
            $this->selectedRows=$this->users->pluck('id')->map(function($id){
                return (string)$id;
            });
        }else{

            $this->reset(['selectedRows','selectedPageRows']);
        }
    }

    public function MarkedPersonal(){
        // this function is used to mark the selected rows in the table
        User::whereIn('id',$this->selectedRows)->update(['rules'=>'0']);
        $this->reset(['selectedRows','selectedPageRows']);
        notyf()->livewire()->position('y','top')->addSuccess('Marked As Personal');
        return redirect()->back();


    }

  

 

    public function MarkedAdministrator(){
        // this function is used to mark the selected rows in the table
        User::whereIn('id',$this->selectedRows)->update(['rules'=>'1']);
        $this->reset(['selectedRows','selectedPageRows']);
        notyf()->livewire()->position('y','top')->addSuccess('Marked As dministrator');
        return redirect()->back();
    }


    public function delete($itemId){
        // this function is used to delete the selected rows in the table
        $image = User::findorfail($itemId);        
        unlink("Uploads/Photos/".$image->avatars);    
        User::where("id", $image->id)->delete();
        notyf()->livewire()->position('y','top')->addSuccess("$image->username is deleted");
        return redirect()->back();

    }

    public function render()
    {
        // this function is used to render the table
        $Users=$this->users;
        $count_users=User::count();
        return view('admin.permission.index',compact('Users','count_users'))->extends('layouts.master');
    }

}