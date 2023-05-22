<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersMessage extends Model
{
    use HasFactory;
    protected $fillable=[
        'message',
        'userFrom_id',
        'userTo_id',
    ];

    public function user(){
        $this->belongsTo(User::class);
    }
}
