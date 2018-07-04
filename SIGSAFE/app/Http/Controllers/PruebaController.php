<?php

namespace fincavicola\Http\Controllers;

use Illuminate\Http\Request;
use fincavicola\Prueba;
use fincavicola\Http\Requests\StorePruebaRequest;

class PruebaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pruebas = Prueba::all();
        return view('Prueba.index',compact('pruebas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Prueba.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePruebaRequest $request)
    {
        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/',$name);
        }
        $prueba = new Prueba();
        $prueba->name = $request->input('name');
        $prueba->imagen = $name;
        $prueba->slug = $request->input('slug');
        $prueba->save();
        return 'Guardado';



       // Este método nos sirve para obtener un dato especifico que se envio por el usuario return $request ->input('name');
       // Este metodo nos sirve para obtener todos los datos que son enviados por el user return $request->all();
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Prueba $prueba)
    {
        //$prueba = Prueba::where('slug',"=",$slug)->firstOrFail();
        //$prueba = Prueba::find($id);
        return view ('Prueba.show',compact('prueba'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Prueba $prueba)
    {
        //si algo en el controlador esta mal, la ruta no se muestra sea cual sea la funcion afectada

        return view ('Prueba.edit',compact('prueba'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Prueba $prueba)
    {
        $prueba->fill($request->except('imagen'));
         if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $name = time().$file->getClientOriginalName();
            $prueba->imagen = $name; 
            $file->move(public_path().'/images/',$name);
        }
        $prueba->save();

        return "actualizado";    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prueba $prueba)
    {
        $file_path = public_path().'/images/'.$prueba->imagen;
        \File::delete($file_path);
        $prueba->delete();
        return 'deleted';
    }
    
}
