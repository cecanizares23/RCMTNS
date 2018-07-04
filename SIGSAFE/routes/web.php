<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('admin');
});

Route::get('/index', function () {
    return view('index');
});
Route::get('/Panel/ave', function () {
    return view('Panel/ave');
});
Route::get('/Panel/galpon', function () {
    return view('Panel/galpon');
});
Route::get('/Panel/produccion', function () {
    return view('Panel/produccion');
});
Route::get('/Panel/vacunacion', function () {
    return view('Panel/vacunacion');
});
Route::get('/Panel/alimentacion', function () {
    return view('Panel/alimentacion');
});
Route::get('/Panel/tratamiento', function () {
    return view('Panel/tratamiento');
});
Route::get('/Panel/productos', function () {
    return view('Panel/productos');
});
Route::get('/Panel/usuarios', function () {
    return view('Panel/usuarios');
});

Route::get('ingreso', function () {
    return view('login');
});

Route::resource('/Usuario','UsuarioController');
Route::resource('/Alimento','AlimentoController');
Route::resource('/Utensilio','MaterialController');
Route::resource('/Ave','AveController');
Route::resource('/Galpon','GalponController');
Route::resource('/Lote','LoteController');
Route::resource('/LineaG','Linea_genController');
Route::resource('/Raza','RazaController');
Route::resource('/TipoAve','Tipo_aveController');
Route::resource('prueba','PruebaController');

/*Route::get('prueb/{name}','PruebController@prueb');

/* Ruta get 
Route::get('/first_route', function() {
	return ('hello world :)');
});

/* Ruta get con 1 parámetro en la URI 
Route::get('/name/{name}',function($name){
	return 'Hola soy '.$name;
});

/* Ruta get con más parámetros en la URI 
Route::get('/name/{name}/lastname/{lastname?}',function($name,$lastname = null){
	return 'Hola soy '.$name. $lastname;
});
*/

