<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function welcome () {
        return view('welcome');
    }
    
    public function articleNew (){
        return view('annunci.articleNew'); 
    }
}