<?php

namespace App\Http\Controllers\Web;

use Auth;
use Request;
use App\Http\Controllers\Controller;
class AppController extends Controller
{
  public function getApp(){
     return view('app');
  }

  public function getLogin(){

        return view('login');
    }

    public function getLogout(){
        Auth::logout();
        return redirect('/login');
}
}
