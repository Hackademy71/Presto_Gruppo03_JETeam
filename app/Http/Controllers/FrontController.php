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
        $announcements = $category->announcements;
        return view('categoryShow', compact('announcements', 'category'));
    }

    public function setLanguage($lang)
    {
        session()->put('locale', $lang);
        return redirect()->back();
    }
    public function userAnnouncements()
    {
        $announcement=[
            'to_check'=>[],
            'user'=>[]
        ];
        if(Auth::user()->is_revisor){
            $announcement['to_check']=$this->indexRevisor();

        }
        $announcements['user']=Announcement::where('user_id', Auth::user()->id)->where('is_accepted', true)->orderBy('created_at', 'DESC')->paginate(4);
        if($announcements['tocheck'][0]=='is_empty'){
        return view('user.userAnnouncements_index', compact('announcements'))->with('message','Non ci sono annunci da revisionare');
        }
        return view('user.userAnnouncements_index', compact('announcements'));

    }
    public function indexRevisor(){
        $announcement_to_check=Announcement::where('is_accepted',false)->orderBy('created_at', 'DESC')->first();
        if(isEmpty($announcement_to_check)){
            $announcement_to_check='is_empty';
        }
        return $announcement_to_check;
    }
}
