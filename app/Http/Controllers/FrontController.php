<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;

class FrontController extends Controller
{


    public function categoryShow (Category $category) {
       

       $announcements=$category->announcements;
        return view ('categoryShow', compact ('announcements','category'));

    }

    public function setLanguage ($lang) {
        session()->put('locale',$lang);
        return redirect()->back();
    }
}
