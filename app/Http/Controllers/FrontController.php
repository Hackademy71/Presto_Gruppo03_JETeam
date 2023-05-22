<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RevisorController;

class FrontController extends Controller
{
    public function categoryShow(Category $category)
    {
        $announcements = $category->announcements->where('is_accepted', true);
        return view('categoryShow', compact('announcements', 'category'));
    }

    public function setLanguage($lang)
    {
        session()->put('locale', $lang);
        return redirect()->back();
    }
    public static function userAnnouncements()
    {  
        $announcements=Announcement::where('user_id', Auth::user()->id)->where('is_accepted', true)->orderBy('created_at', 'DESC')->paginate(6);

        return $announcements;
    }
    public static function indexRevisor(){
        $announcement_to_check=Announcement::where('is_accepted',false)->orderBy('created_at', 'DESC')->first();
        if(!$announcement_to_check){//Con un dd ho verificato che è null se non ha annunci da verificare
            $announcement_to_check='is_empty';
        }
        return $announcement_to_check;
    }
    public function show(){
        $announcement=Announcement::where('is_accepted',false)->orderBy('created_at', 'DESC')->first();
        if(!$announcement){
            $announcement='is_empty';
        }
        return view('user.userAnnouncements_index', compact('announcement'));
    }

}
