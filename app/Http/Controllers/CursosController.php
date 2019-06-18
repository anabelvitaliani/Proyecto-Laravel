<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{

public function getCursosDH(){

  $url='https://www.digitalhouse.com/api/getcursos';
  $cursosJson=file_get_contents($url);
  $arrayCursos = json_decode($cursosJson, true);
  return view('cursos')->with([
    "cursos" => $arrayCursos
  ]);
}

public function getComisionesDH($id){
  $url='https://www.digitalhouse.com/api/getcomisiones';
  $comisionesJson=file_get_contents($url);
  $arrayComisiones = json_decode($comisionesJson, true);

  return view('comisiones')->with([
    "comisiones" => $arrayComisiones,
    "id" => $id
  ]);
}
}
