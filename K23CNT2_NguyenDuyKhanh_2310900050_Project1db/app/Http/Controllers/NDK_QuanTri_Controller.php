<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NDK_QuanTri_Controller extends Controller
{
     // Get login
     public function ndkLogin()
     {
         return view('ndkLogin.Login');
     }
 
     // Post login 
     public function ndkLoginSumbit(Request $request)
     {
         return view('ndkLogin.Sumbit');
     }
}
