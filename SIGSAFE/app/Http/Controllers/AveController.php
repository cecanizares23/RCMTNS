<?php

namespace fincavicola\Http\Controllers;

use Illuminate\Http\Request;
use fincavicola\Raza;
use fincavicola\Galpon;
use fincavicola\Ave;
use fincavicola\Http\Requests\StoreAveRequest;
Use Illuminate\Support\Facades\DB;
Use Session;


class AveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aves = DB::table('aves')
            ->leftJoin('raza','aves.id_raza','=','raza.id')
            ->leftJoin('galpons','aves.id_galpon','=','galpons.id')
            ->select('aves.*','raza.nombre as raz','aves.*','galpons.id as gal')
            ->get();
        return view('Ave.index',compact('aves'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $ave = Ave::all();
         $razas = Raza::all();
         $galpones = Galpon::all();
        return view('Ave.create',compact('ave','razas','galpones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aves = new Ave();
        $aves->fecha_ingreso = $request['fecha_ingreso'];
        $aves->fecha_baja = $request['fecha_baja'];
        $aves->obs_inicial = $request['obs_inicial'];
        $aves->edad = $request['edad'];
        $aves->peso = $request['peso'];
        $aves->sexaje = $request['sexaje'];
        $aves->id_raza = $request['id_raza'];
        $aves->id_galpon = $request['id_galpon'];
        if(is_null($aves)){
        Session::flash('message','No se guardo'); 
        }
        $aves->save();
        Session::flash('message','Guardado con exito');
        
        return redirect()->intended('/Ave/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $avesR = DB::table('aves')
            ->leftJoin('raza','aves.id_raza','=','raza.id')
            ->leftJoin('galpons','aves.id_galpon','=','galpons.id')
            ->select('aves.*','raza.nombre as raz','aves.*','galpons.id as gal')
            ->get();

        return view ('Ave.show',['ave'=>$avesR[0]]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ave = Ave::find($id);
        $razas = Raza::all();
        $galpones = Galpon::all();
        return view ('Ave.edit',compact('ave','razas','galpones'));
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
        $ave = Ave::find($id);
        $ave->fill($request->all());
        if(is_null($ave)){
        Session::flash('message','No se actualizo'); 
        }
        $ave->save();
        Session::flash('message','Se actualizo con exito');
        
        return redirect()->intended('/Ave/');
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
