<?php
//IMPLEMENTARE PROFILO UTENTE!
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     return redirect('userAnnouncements')->with('message','Complimenti, hai modificato i tuoi dati!');
   }
   }
