<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;

class FrontController extends Controller
{
    public function categoryShow(Category $category)
    {
        $announcements = $category->announcements;
        return view('categoryShow', compact('announcements', 'category'));
    }

    public function setLanguage($lang)
    {
        session()->put('locale', $lang);
        return redirect()->back();
    }
    public function userAnnouncements(Auth $user)
    {
        $announcements=Announcement::where('user_id', $user->id )->get();
        return view('user.userAnnouncements_index', compact('announcements'));
    }
}
