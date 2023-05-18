<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ModifyAnnouncement extends Component
{
    public $name;
    public $description;
    public $price;
    public $category;
    public $images=[];
    public $temporary_images;
    public $announcement;

    public function mount(){
        $this->name=$this->announcement->name;
        $this->description=$this->announcement->description;
        $this->price=$this->announcement->price;
        $this->category=$this->announcement->category;
        $this->images=$this->announcement->images;

    }
    public function update($announcement){
        
    }

    public function render()
    {
        return view('livewire.modify-announcement');
    }
}
