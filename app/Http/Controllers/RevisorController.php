<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class RevisorController extends Controller
{
    public function index(){
        $announcement_to_check=Announcement::where('is_accepted', null)->get();
         return view('revisor.indexRevisor',compact ('announcement_to_check'));
        
    }
    public function acceptAnnouncement(Announcement $announcement){
        
        $announcement->setAccepted(true);
        return redirect()->back()->with('message',"Complimenti, hai accettato l'annuncio");

    }
    public function refuseAnnouncement(Announcement $announcement){
        $announcement->setAccepted(false);
        return redirect()->back()->with('message',"Peccato, hai rifiutato l'annuncio");

    }
}
