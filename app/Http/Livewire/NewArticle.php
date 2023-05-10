<?php

namespace App\Http\Livewire;

use App\Models\Announcement;
use App\Models\Category;
use Livewire\Component;

class NewArticle extends Component
{
    public $name;
    public $description;
    public $price;
    public $category;

    protected $rules = [
        'name' => 'required',
        'description' => 'required',
        'price' => 'required|numeric|digits_between:0,8',
        'category' => 'required',
    ];
    protected $messages = [
        'required' => 'Il campo :attribute è richiesto',
        'min' => 'Il campo :attribute è troppo corto',
        'numeric' => 'Il campo :attribute deve essere in SOLO in numeri',
    ];

    public function store()
    {
        dd($this->name,$this->description, $this->price);
        $category = Category::find($this->category);
        Announcement::create([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'category_id'=>$category->id,
        ]);
        // $category->announcements()->create([
        //     'name'=>$this->name,
        //     'description'=>$this->description,
        //     'price'=>$this->price,

        // ]);
        session()->flash('message', 'Articolo inserito con successo');
        $this->cleanForm();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function cleanForm()
    {
        $this->name = "";
        $this->description = "";
        $this->price = "";
        $this->category = "";
    }
    public function render()
    {
        return view('livewire.new-article');
    }
}
