<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests;

class PagesController extends Controller
{
    public function index()
    {	
    	$name='<i>sakib</i>';
    	$email='sakib@gmail.com';
    	return view('about')->with([
    			'aname'=>$name,
    			'aemail'=>$email
    		]);
    }
    public function contact(){
    	return view('contact');
    }
}
