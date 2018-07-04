<?php

namespace fincavicola\Http\Controllers;

use Illuminate\Http\Request;
use fincavicola\Material;
use fincavicola\Galpon;
use fincavicola\Http\Requests\StoreMaterialRequest;
Use Session;
Use Illuminate\Support\Facades\DB;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $utensilios = DB::table('materials')
            ->leftJoin('galpons','materials.id_galpon','=','galpons.id')
            ->select('materials.*','galpons.id as gl')
            ->get();
      
        return view('Utensilio.index',compact('utensilios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $galpones = Galpon::all();
        return view('Utensilio.create',compact('galpones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMaterialRequest $request)
    {
        $utensilios = new Material();
        $utensilios->descripcion = $request['descripcion'];
        $utensilios->fecha_ingreso = $request['fecha_ingreso'];
        $utensilios->id_galpon = $request['id_galpon'];

        if(is_null($utensilios)){
        Session::flash('message','No se guardo'); 
        }
        $utensilios->save();
        Session::flash('message','Guardado con exito');
        
        return redirect()->intended('/Utensilio/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $utensilio = Material::find($id);
        return view ('Utensilio.show',compact('utensilio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $utensilio = Material::find($id);
        $galpones = Galpon::all();
        return view ('Utensilio.edit',compact('utensilio','galpones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreMaterialRequest $request, $id)
    {
        $utensilio = Material::find($id);
        $utensilio->fill($request->all());
        if(is_null($utensilio)){
        Session::flash('message','No se actualizo'); 
        }
        $utensilio->save();
        Session::flash('message','Se actualizo con exito');
        
        return redirect()->intended('/Utensilio/');
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
