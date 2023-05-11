<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Announcement extends Model
{
    use HasFactory;

    protected $fillable= [
        "name", "description", "price", "category_id", "is_accepted"
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user () {
        return $this->belongsTo(User::class);
    }
    public static function toBeRevisionedCount(){
        return Announcement::where('is_accepted',null)->count();
    }
}
