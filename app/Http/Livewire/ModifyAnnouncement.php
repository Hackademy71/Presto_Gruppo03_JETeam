<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ModifyAnnouncement extends Component
{
    public $name;
    public $description;
    public $price;
    public $catAnnouncement;
    public $images=[];
    public $temporary_images;
    public $announcement;

    public function mount(){
        $this->name=$this->announcement->name;
        $this->description=$this->announcement->description;
        $this->price=$this->announcement->price;
        $this->catAnnouncement=$this->announcement->category->id;
        $this->images=$this->announcement->images;
        

    }
    public function update(){
        $this->announcement->name=$this->name;
        $this->announcement->description=$this->description;
        $this->announcement->price=$this->price;
        $this->announcement->category=$this->catAnnouncement;
        $this->announcement->save();
        return redirect()->back()->with('message', "Complimenti, annuncio modificato");
    }

    public function render()
    {
        return view('livewire.modify-announcement');
    }
}
