<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('prueba/{nombre}', function ($nombre) {
    return "Hola $nombre";
})->where("nombre","[a-zA-Z]+");

/*Route::get('home/{id}/{nom}', function ($id,$nom) {
  return "Datos validados $id - $nom";
})->where(["id"=>"[0-9]+","nom"=>"[a-zA-Z]+"]);
*/
Route::get('casa/{dato?}', function ($dato = null) { //con parametros opcionales
    //return view('casa',["id"=>$dato]);
    $vista=view("casa")
                      ->with("id",$dato)
                      ->with("nombre",$dato);
    return $vista;
});

Route::get('home/{id?}', function ($id = null) {
    return view("home/home")->with("id",$id);
});

//Invocar controladores
Route::get('control/', "controlController@mostrar");

// php artisan make:controller miscontroladores/operacionesController
Route::get('controlb/', "miscontroladores\operacionesController@mostrar")
->middleware("fechamdwr");
/* DEBUG MODE
Route::get('personas/', function(){
  dd(\App\persona::all());
});
*/


Route::get('personas/', "miscontroladores\personasController@index");
