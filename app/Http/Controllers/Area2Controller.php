<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Area2Controller extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isarea2',['only'=>'index']);

    }


    public function index (){
        return view('area2');
    }

}
