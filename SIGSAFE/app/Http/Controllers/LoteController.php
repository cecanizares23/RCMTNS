<?php

namespace fincavicola\Http\Controllers;

use Illuminate\Http\Request;
use fincavicola\Lote;
use fincavicola\Http\Requests\StoreLoteRequest;
Use Session;

class LoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lotes = Lote::all();
        return view('Lote.index',compact('lotes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Lote.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLoteRequest $request)
    {
        $lotes = new Lote();
        $lotes->ubicacion = $request['ubicacion'];
        $lotes->obs_inicial = $request['obs_inicial'];
        if(is_null($lotes)){
        Session::flash('message','No se guardo'); 
        }
        $lotes->save();
        Session::flash('message','Guardado con exito');
        
        return view('Lote.create',compact('message'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lote = Lote::find($id);
        return view ('Lote.show',compact('lote'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lote = Lote::find($id);
        return view ('Lote.edit',compact('lote'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreLoteRequest $request, $id)
    {
        $lote = Lote::find($id);
        $lote->fill($request->all());
        if(is_null($lote)){
        Session::flash('message','No se actualizo'); 
        }
        $lote->save();
        Session::flash('message','Se actualizo con exito');
        
        return redirect()->intended('/Lote/');
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
