<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function contact(){
        $myName='Swajan Golder';
        return view('contact')->with('name',$myName);
    }
    public function bootstarp(){
        return view('bootstarp');
}
}
