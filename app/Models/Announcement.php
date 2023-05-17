<?php

namespace App\Models;

use App\Models\User;
use App\Models\Image;
use App\Models\Category;
use Laravel\Scout\Searchable;
use App\Models\Revisor_announcement;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Announcement extends Model
{
    use HasFactory, Searchable;

    protected $fillable= [
        "name",
        "description",
        "price",
        "category_id",
        "is_accepted",
        "revisor_id",
        "user_id"
        ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user () {
        return $this->belongsTo(User::class);
    }
    public function revisor (){
        return $this->belongsTo(User::class);
    }
    public function images(){
        return $this->hasMany(Image::class);
    }
        public static function toBeRevisionedCount(){
        return Announcement::where('is_accepted',null)->count();
    }
    public function setAccepted($value){
       
        $this->is_accepted=true;
        $this->save();
        return true;
    }

    public function setRevisor(){
        $this->revisor_id=Auth::user()->id;
        $this->save();
        return true;
    }

    public function toSearchableArray()
    {
        $category = $this->category;
        $array=[
            'id'=>$this->id,
            'name'=>$this->name,
            'description'=>$this->description,
            'category'=>$category,
        ];
        return $array;
    }

   
}
