<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function welcome () {
        $announcements=Announcement::where('is_accepted',true)->orderBy('created_at', 'DESC')->paginate(4);
       
        return view('welcome', compact('announcements'));
    }

    public function onBuild (){
        return view ('onBuild');
    }
   
   
}