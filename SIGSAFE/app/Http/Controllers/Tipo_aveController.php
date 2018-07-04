<?php

namespace fincavicola\Http\Controllers;

use Illuminate\Http\Request;
use fincavicola\Tipo_ave;
use fincavicola\Http\Requests\StoreTipo_aveRequest;
Use Session;

class Tipo_aveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos = Tipo_ave::all();
        return view('TipoAve.index',compact('tipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('TipoAve.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTipo_aveRequest $request)
    {
        $tipos = new Tipo_ave();
        $tipos->nombre = $request->input('nombre');
        if(is_null($tipos)){
        Session::flash('message','No se guardo'); 
        }
        $tipos->save();
        Session::flash('message','Guardado con exito');
        
        return view('TipoAve.create',compact('message'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipo = Tipo_ave::find($id);
        return view ('TipoAve.show',compact('tipo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $tipo_ave = Tipo_ave::find($id);
        return view ('TipoAve.edit',compact('tipo_ave'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreTipo_aveRequest $request, $id)
    {
        $tipo_ave = Tipo_ave::find($id);
        $tipo_ave->fill($request->all());
        if(is_null($tipo_ave)){
        Session::flash('message','No se actualizo'); 
        }
        $tipo_ave->save();
        Session::flash('message','Se actualizo con exito');
        
        return redirect()->intended('/TipoAve/');
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
