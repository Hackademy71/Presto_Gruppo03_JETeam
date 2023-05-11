<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;

class FrontController extends Controller
{


    public function categoryShow (Category $category) {

        return view ('categoryShow', compact ('category'));

    }
}
