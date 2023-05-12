<?php

namespace App\Http\Controllers;

use App\Mail\BecomeRevisor;
use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

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
    public function workWithUs ()
    {
        Mail::to ('admin@presto.it')->send (new BecomeRevisor(Auth::user()));
        return redirect ()->back()->with('message','Complimenti! Riceverai la nostra risposta a breve');
    }

    public function makeRevisor (User $user )
    {
        Artisan::call('presto:makeUsersRevisor',["email"=>$user->email]);
        return redirect ('/')->with('message','Complimenti! E\' diventato revisore');
    }

}