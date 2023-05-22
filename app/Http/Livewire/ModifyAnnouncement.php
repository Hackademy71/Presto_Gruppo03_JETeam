<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Announcement;
use Illuminate\Support\Facades\Auth;

class ModifyAnnouncement extends Component
{
    public $name;
    public $description;
    public $price;
    public $catAnnouncement;
    public $images=[];
    public $temporary_images;
    public Announcement $announcement;

    public function mount(){
        $this->name=$this->announcement->name;
        $this->description=$this->announcement->description;
        $this->price=$this->announcement->price;
        $this->catAnnouncement=$this->announcement->category->id;
        $this->images=$this->announcement->images;
        

    }
    public function store(){
        $this->announcement->update([
            'name'=>$this->name,
            'description'=>$this->description,
            'price'=>$this->price,
            'category_id'=>$this->catAnnouncement,
            'user_id'=>Auth::user()->id,
        ]);
        return redirect()->back()->with('message', "Complimenti, annuncio modificato");
    }

    public function render()
    {
        return view('livewire.modify-announcement');
    }
}
