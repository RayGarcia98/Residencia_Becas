<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormatosolicitudesController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        

        return view('formato.formato1');
        
        
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
       
        Reporte::create([
            'Asunto' => request('Asunto', 'Formato'),
            'Fecha_elaboracion' => request('Fecha_elaboracion'),
            'Destinatario' => request('Destinatario'),
            'Depto_destinatario' => request('Depto_destinatario'),
            'Cuerpo_texto' => request('Cuerpo_texto'),
            'Remitente' => request('Remitente'),
            'Depto_remitente' => request('Depto_remitente'),
            


        ]);

        return redirect('')->with('success', 'enviado a finacieros correctamente!');


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
}
