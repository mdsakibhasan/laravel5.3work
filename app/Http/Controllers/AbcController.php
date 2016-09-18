<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AbcController extends Controller
{
   public function index()
   {
     $name="sakib";
     $mail="s@gamil";
   	 return view('abc/abc')->with('abul',$name);
   }
}
