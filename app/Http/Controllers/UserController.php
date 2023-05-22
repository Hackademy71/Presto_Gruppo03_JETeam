<?php
//IMPLEMENTARE PROFILO UTENTE!
namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUser;
use App\Models\Announcement;

class UserController extends Controller
{
   public function userProfile(){
   return view('user.profile');
   }
   public function postUserData(Request $request){
      $userData = Auth::user()->profile()->create([
         'address'=>$request->address,
         'city'=>$request->city,
         'tel_number'=>$request->tel_number,
         'CAP'=>$request->CAP,
         'state'=>$request->state,
         'gender'=>$request->gender,
         'contactMethod'=>false,
         'nickname'=>$request->nickname, 
         'surname'=>$request->surname,
     ]);
     return redirect('/user/profile')->with('message','Complimenti, hai modificato i tuoi dati!');
   }
//    public function profileEdit(Profile $profile){
//       $platforms = Profile::all();
//       return view('user.', compact('profile'));
//   }

  public function profileUpdate(Request $request){
     
      Profile::where('user_id',Auth::user()->id)->update([
         'address'=>$request->address,
         'city'=>$request->city,
         'tel_number'=>$request->tel_number,
         'CAP'=>$request->CAP,
         'state'=>$request->state,
         'gender'=>$request->gender,
         'contactMethod'=>false,
         'nickname'=>$request->nickname, 
         'surname'=>$request->surname,
      ]);

      return redirect(route('userProfile'));
  }
  public function contactUser(User $user, Request $request)
  {
   $message=$request;
   
   Mail::to($user->email)->send(new ContactUser($user, Auth::user(), $message));
   return redirect('/')->with('message', 'Hai inviato una mail a {{$user->name}}');
  }
  public function contactModule(Announcement $announcement){
   return view('user.contact',compact('announcement'));
  }

   }
