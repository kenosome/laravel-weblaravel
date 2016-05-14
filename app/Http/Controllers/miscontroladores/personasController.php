<?php

namespace App\Http\Controllers\miscontroladores;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class personasController extends Controller
{
    //
    function index(){
      $resultado=\DB::table("personas")->select("nombre","correo")->where("nombre","Kenny")->get();

      return $resultado;
    }
}
