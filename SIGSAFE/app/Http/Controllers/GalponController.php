<?php

namespace fincavicola\Http\Controllers;

use Illuminate\Http\Request;
use fincavicola\Galpon;
use fincavicola\Lote;
use fincavicola\Http\Requests\GalponRequest;
use Illuminate\Support\Facades\DB;
use Session;

class GalponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galpones = DB::table('galpons')
            ->leftJoin('lotes','galpons.id_lote','=','lotes.id')
            ->select('galpons.*','lotes.id as lot')
            ->get();

        return view('Galpon.index',compact('galpones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lotes = Lote::all();
        return view('Galpon.create',compact('lotes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalponRequest $request)
    {
        $galpon = new Galpon();
        $galpon->tope_max = $request['tope_max'];
        $galpon->obs_inicial = $request['obs_inicial'];
        $galpon->estado = $request['estado'];
        $galpon->altura = $request['altura'];
        $galpon->anchura = $request['anchura'];
        $galpon->tipo_galpon = $request['tipo_galpon'];
        $galpon->id_lote = $request['id_lote'];

        if(is_null($galpon)){
        Session::flash('message','No se guardo'); 
        }
        $galpon->save();
        Session::flash('message','Guardado con exito');
        
        return redirect()->intended('/Galpon/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $galpon = DB::table('galpons')
            ->leftJoin('lotes','galpons.id_lote','=','lotes.id')
            ->select('galpons.*','lotes.id as lt')
            ->where('galpons.id','=',$id)
            ->get();

         return view ('Galpon.show',['galpon'=>$galpon[0]]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $galpon = Galpon::find($id);
        $lotes = Lote::all();
        return view ('Galpon.edit',compact('galpon','lotes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GalponRequest $request, $id)
    {
        $galpon = Galpon::find($id);
        $galpon->fill($request->all());
        if(is_null($galpon)){
        Session::flash('message','No se actualizo'); 
        }
        $galpon->save();
        Session::flash('message','Se actualizo con exito');
        
        return redirect()->intended('/Galpon/');
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
