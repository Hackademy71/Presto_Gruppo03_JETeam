<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

class NewArticle extends Component
{
    use WithFileUploads;
    public $name;
    public $description;
    public $price;
    public $category;
    public $message;
    public $validated;
    public $images=[];
    public $temporary_images;
    public $announcement;

    protected $rules = [
        'name' => 'required',
        'description' => 'required',
        'price' => 'required|numeric|digits_between:0,8',
        'category' => 'required',
        'images.*'=>'image|max:1024',
        'temporary_images.*'=>'image|max:1024',
    ];
    protected $messages = [
        'required' => 'Il campo :attribute è richiesto',
        'min' => 'Il campo :attribute è troppo corto',
        'numeric' => 'Il campo :attribute deve essere in SOLO in numeri',
        'temporary_images.required'=>'L\'immagine è richiesta',
        'temporary_images.*.image'=>'I file devono essere immagini',
        'temporary_images.*.max'=>'L\'immagine dev\'essere massimo di 1Mb',
        'images.image'=>'L\'immagine dev\'essere un\'immagine',
        'images.max'=>'L\'immagine dev\'essere massimo di 1Mb',
    ];
    public function updatedTemporaryImages(){
        if($this->validate([
            'temporary_images.*'=>'image|max:1024',
        ])) {
            foreach($this->temporary_images as $image){
                $this->images[]=$image;
            }
        }
    }
    public function removeImage($key){
        if(in_array($key,array_keys($this->images))){
            unset($this->images[$key]);
        }
    }

    public function store()
    {
        $this->validate();

        $this->announcement = Category::find($this->category)->announcements()->create($this->validate());
        if(count($this->images)){
            foreach($this->images as $image){
                $this->announcement->images()->create(['path'=>$image->store('images','public')]);
            }
        }
    $this->announcement->user()->associate(Auth::user());
    $this->announcement->save();

        // $category = Category::find($this->category);
        // Auth::user()->announcements()->create([
        //     'name' => $this->name,
        //     'description' => $this->description,
        //     'price' => $this->price,
        //     'category_id'=>$category->id,
        // ]);
        
        session()->flash('message', 'Articolo inserito con successo, sarà pubblicato dopo la revisione');
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
        $this->image="";
        $this->images=[];
        $this->temporary_images=[];
        $this->form_id=rand();
    }
    public function render()
    {
        return view('livewire.new-article');
    }
}
