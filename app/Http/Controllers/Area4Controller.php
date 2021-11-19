<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Area4Controller extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isarea4',['only'=>'index']);

    }

    public  function index(){
        return view('area4');
    }
}
