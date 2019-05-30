<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(){
      return view('newproduct');
    }

//siempre que mando datos por un formulario (a la bd creo) no uso post ni get, sino $request, que es un objeto
    public function save(Request $request){
//1er parametro:qué voy a validar, 2do:como, 3ero:especificacion de msjs de error si queres cambiar los de laravel
      $this->validate($request, [
        'nombre'=>'required|unique:products|string',
        'descripcion'=>'required|string',
        'precio'=>'required|numeric',
        'descuento'=>'numeric'
      ],
      [
//nombre del imput-validacion que falla (se puede poner solo una)
        'nombre.required'=>'El campo nombre es obligatorio',
        'nombre.unique'=>'El producto ya existe',
        'nombre.string'=>'El nombre debe contener solo letras',
        'descripcion.required'=>'La descripcioncion es necesaria',
        'descripcion.string'=>'La descripcioncion debe contener solo letras',
        'precio.required'=>'El campo precioio es obligatorio',
        'precio.numeric'=>'El precioio debe contener solo numeros',
        'descuento.numeric'=>'El precioio debe contener solo numeros',
      ]);
//si pongo algo aca y no pasó las validaciones previas, no se ejecuta

//primera forma posible
    Product::create(
      [
        'nombre'=>$request->input('nombre')
      ]
    );

/*segunda forma posible
$product=new Product();
$product->nombre = $request->input('nombre');
$product->save();*/

/*tercera forma posible
$product=new Product([
'name'=>$request->input('nombre')
]);
$product->save();*/

//sin el return, no redirige
return redirect('/product');
    }
}
