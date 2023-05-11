<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Support\Facades\Auth;

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
        // 'category.required' => 'categoria obbligatoria',

    ];

    public function store()
    {
        $this->validate();
        $category = Category::find($this->category);
        Auth::user()->announcements()->create([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'category_id'=>$category->id,
        ]);
        
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
