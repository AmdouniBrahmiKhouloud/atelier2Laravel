<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function index(){
        return ' <h1> Hello, 5TWIN4 </h1>';
    }
    function show(){
        return view('show',['name'=>"khouloud"]);
    }
}
