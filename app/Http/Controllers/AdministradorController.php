<?php

namespace App\Http\Controllers;

use App\Models\ProveedorInter;
use App\Models\Reporte;
use Illuminate\Http\Request;

class AdministracionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
//        $this->middleware('isadmin',['only'=>'/user']);

    }



    public function index()
    {
        //
    }

    public function admini()
    {
        //
        return view('usuarios.administrador');
    }
    public function difu()
    {
        //
        return view('usuarios.difucion');
    }
    public function financieros()
    {
        //
        return view('usuarios.financieros');
    }
    public function jurid()
    {
        //
        return view('usuarios.juridico');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function graficas(){
//        $todaI=ProveedorInter::all();
//        return $todaI;
//
//        return view('ADMINISTRATIVOS.Graficas',compact('todaI'));

        $navegadores=ProveedorInter::with('PaquetesInternet')->get();
//return $navegadores;

        $puntos=[];
        foreach($navegadores as $navegador){
            $puntos[]=['name'=>$navegador['representante'],'y'=> floatval($navegador['id'])];
        }
        return view("ADMINISTRATIVOS.Graficas",["data"=> json_encode($puntos)]);

    }

//    public function datos(){
//        $todaInformacion=Reporte::all();
//    }

}
