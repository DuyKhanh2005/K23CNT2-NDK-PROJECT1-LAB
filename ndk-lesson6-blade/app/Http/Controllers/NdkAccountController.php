<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NdkAccountController extends Controller
{
    //#form login - get
    public function login(){
        return view('ndk-login');
    }

}
