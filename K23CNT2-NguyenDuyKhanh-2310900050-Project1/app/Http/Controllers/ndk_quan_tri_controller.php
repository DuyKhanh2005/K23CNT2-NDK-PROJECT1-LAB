<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ndk_quan_tri_controller extends Controller
{
    //

    //login
     // Get Login 
     public function ndkLogin()
     {
         return view('ndkLogin.Login');
     }
 
     // Post Login 
     public function ndkSumbit(Request $request)
     {
         return view('ndkLogin.Login');
     }
}
