<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct () {
        $this->middleware('auth',['except' => 'index']);
    }
    public function index(Announcement $announcements)
    {
        $announcements=Announcement::where('is_accepted',true)->orderBy('created_at', 'DESC')->paginate(12);
                
        // $announcements=Announcement::paginate(4);
        return view('annunci.indexAnnouncement', compact('announcements'));
    }

     public function searchAnnouncement (Request $request){
        $announcements=Announcement::search($request->searched)->where('is_accepted', true)->paginate(10);
        return view('annunci.indexAnnouncement', compact('announcements'));
    }
     public function reportAnnouncement (Announcement $announcement){
        $announcement->is_accepted=null;
        return redirect()->back()->with('message',"Grazie per la segnalazione, un revisore controllerà l'annuncio");
     }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('annunci.articleNew'); 
        
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Announcement $announcement)
    {
        return view ('annunci.detArticle', compact('announcement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Announcement $announcement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Announcement $announcement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Announcement $announcement)
    {
        //
    }
}
