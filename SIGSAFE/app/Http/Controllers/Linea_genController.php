<?php

namespace fincavicola\Http\Controllers;

use Illuminate\Http\Request;
use fincavicola\Linea_gen;
use fincavicola\Tipo_ave;
use fincavicola\Http\Requests\StoreLinea_genRequest;
Use Session;
Use Illuminate\Support\Facades\DB;

class Linea_genController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lineas = DB::table('linea_gens')
            ->leftJoin('tipo_aves','linea_gens.id_tipo_ave','=','tipo_aves.id')
            ->select('linea_gens.*','tipo_aves.nombre as ta')
            ->get();
        return view('LineaG.index',compact('lineas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos_aves = Tipo_ave::all();
        return view('LineaG.create',compact('tipos_aves'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLinea_genRequest $request)
    {
        $lineas = new Linea_gen();
        $lineas->nombre = $request['nombre'];
        $lineas->observacion = $request['observacion'];
        $lineas->id_tipo_ave = $request['id_tipo_ave'];
        if(is_null($lineas)){
        Session::flash('message','No se guardo'); 
        }
        $lineas->save();
        Session::flash('message','Guardado con exito');
        
        return redirect()->intended('/LineaG/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lineas = DB::table('linea_gens')
            ->leftJoin('tipo_aves','linea_gens.id_tipo_ave','=','tipo_aves.id')
            ->select('linea_gens.*','tipo_aves.nombre as ta')
            ->where('linea_gens.id','=',$id)
            ->get();

         return view ('LineaG.show',['lineas'=>$lineas[0]]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $linea = Linea_gen::find($id);
        $tipos_aves = Tipo_ave::all();
        return view ('LineaG.edit',compact('linea','tipos_aves'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreLinea_genRequest $request, $id)
    {
        $linea = Linea_gen::find($id);
        $linea->fill($request->all());
        if(is_null($linea)){
        Session::flash('message','No se actualizo'); 
        }
        $linea->save();
        Session::flash('message','Se actualizo con exito');
        
        return redirect()->intended('/LineaG/');
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
