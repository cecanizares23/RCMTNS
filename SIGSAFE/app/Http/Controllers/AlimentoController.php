<?php

namespace fincavicola\Http\Controllers;

use Illuminate\Http\Request;
use fincavicola\Alimento;
use fincavicola\Http\Requests\SotreAlimentoRequest;
Use Session;

class AlimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alimentos = Alimento::all();
        return view('Alimento.index',compact('alimentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Alimento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SotreAlimentoRequest $request)
    {
        $alimentos = new Alimento();
        $alimentos->nombre = $request['nombre'];
        $alimentos->tipo = $request['tipo'];
        if(is_null($alimentos)){
        Session::flash('message','No se guardo'); 
        }
        $alimentos->save();
        Session::flash('message','Guardado con exito');
        
        return view('Alimento.create',compact('message'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alimento = Alimento::find($id);
        return view ('Alimento.show',compact('alimento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $alimento = Alimento::find($id);
        return view ('Alimento.edit',compact('alimento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SotreAlimentoRequest $request, $id)
    {
        $alimento = Alimento::find($id);
        $alimento->fill($request->all());
        if(is_null($alimento)){
        Session::flash('message','No se actualizo'); 
        }
        $alimento->save();
        Session::flash('message','Se actualizo con exito');
        
        return redirect()->intended('/Alimento/');
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
