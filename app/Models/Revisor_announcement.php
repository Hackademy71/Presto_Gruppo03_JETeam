<?php

namespace App\Models;

use App\Models\User;
use App\Models\Announcement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Revisor_announcement extends Model
{
    use HasFactory;
    protected $fillable=[
        'announcement_id',
        'user_id',
    ];
    public function announcement(){
        $this->belongsTo(Announcement::class);
    }
    public function user(){
        $this->hasMany(User::class);
    }
}
