<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;


class Announcement extends Model
{
    use HasFactory;

    protected $fillable= [
        "name", "description", "price", "category_id",
    ];

    public function categories(){
        return $this->belongsTo(Category::class);
    }
}
