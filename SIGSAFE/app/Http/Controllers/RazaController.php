<?php

namespace fincavicola\Http\Controllers;

use Illuminate\Http\Request;
use fincavicola\Raza;
use fincavicola\Tipo_ave;
use fincavicola\Http\Requests\StoreRazaRequest;
use Illuminate\Support\Facades\DB;
use Session;

class RazaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $razas = DB::table('raza')
            ->leftJoin('tipo_aves','raza.id_tipo_ave','=','tipo_aves.id')
            ->select('raza.*','tipo_aves.nombre as ta')
            ->get();
        return view('Raza.index',compact('razas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos_aves = Tipo_ave::all();
        return view('Raza.create',compact('tipos_aves'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRazaRequest $request)
    {
        $razas = new Raza();
        $razas->nombre = $request['nombre'];
        $razas->id_tipo_ave = $request['id_tipo_ave'];
        if(is_null($razas)){
        Session::flash('message','No se guardo'); 
        }
        $razas->save();
        Session::flash('message','Guardado con exito');
        
        return redirect()->intended('/Raza/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $raza = DB::table('raza')
            ->leftJoin('tipo_aves','raza.id_tipo_ave','=','tipo_aves.id')
            ->select('raza.*','tipo_aves.nombre as ta')
            ->where('raza.id','=',$id)
            ->get();

         return view ('Raza.show',['raza'=>$raza[0]]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $raza = Raza::find($id);
        $tipos_aves = Tipo_ave::all();
        return view ('Raza.edit',compact('raza','tipos_aves'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRazaRequest $request, $id)
    {
        $raza = Raza::find($id);
        $raza->fill($request->all());
        if(is_null($raza)){
        Session::flash('message','No se actualizo'); 
        }
        $raza->save();
        Session::flash('message','Se actualizo con exito');
        
        return redirect()->intended('/Raza/');
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
