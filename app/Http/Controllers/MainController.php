<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\ElaveEt;

class MainController extends Controller
{
    public function index(){
      $main = ElaveEt::all();
      return view('welcome',compact('main'));
    }
}
