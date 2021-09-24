<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Area3Controller extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isarea3',['only'=>'index']);

    }

    public  function index(){
        return view('area3');
    }
}
