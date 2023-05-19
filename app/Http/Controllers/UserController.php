<?php
//IMPLEMENTARE PROFILO UTENTE!
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function showProfile(){
   return view('user.profile');
   }
   public function getProfile(Request $request){
   
   }
   }
