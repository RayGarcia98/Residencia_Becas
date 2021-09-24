<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Area1Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isarea1',['only'=>'index']);

    }


    public function index(){
        return view('area1');
    }
}
