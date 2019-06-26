<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index(){
      $products = Product::all();
      //dd($products);
      return view('products.showProducts')->with(compact('products'));
    }


public function create(){
      return view('products.newproduct');
}

//siempre que mando datos por un formulario (a la bd creo) no uso post ni get, sino $request, que es un objeto
public function save(Request $request){
//1er parametro:qué voy a validar, 2do:como, 3ero:especificacion de msjs de error si queres cambiar los de laravel
      $this->validate($request, [
        'nombre'=>'required|unique:products|string',
        'descripcion'=>'required|string',
        'precio'=>'required|numeric',
        'descuento'=>'numeric',
        'categoria'=>'required|string',
      ],
      [
//nombre del imput-validacion que falla (se puede poner solo una)
        'nombre.required'=>'El campo nombre es obligatorio',
        'nombre.unique'=>'El producto ya existe',
        'nombre.string'=>'El nombre debe contener solo letras',
        'descripcion.required'=>'La descripcioncion es necesaria',
        'descripcion.string'=>'La descripcion debe contener solo letras',
        'precio.required'=>'El campo precio es obligatorio',
        'precio.numeric'=>'El precioio debe contener solo numeros',
        'descuento.numeric'=>'El precioio debe contener solo numeros',
      ]);
//si pongo algo aca y no pasó las validaciones previas, no se ejecuta

//primera forma posible
    \App\Product::create(
      [
        'nombre'=>$request->input('nombre'),
        'descripcion'=>$request->input('descripcion'),
        'precio'=>$request->input('precio'),
        'descuento'=>$request->input('descuento'),
        'avatar'=>$request->input('avatar'),
        'categoria'=>$request->input('categoria'),
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


public function edit($id){
    $product = Product::find($id);

    return view('products.editProduct')->with(compact('product'));
}

public function update($id, Request $request){

      $this->validate($request, [
        'nombre'=>'required|unique:products|string',
        'descripcion'=>'required|string',
        'precio'=>'required|numeric',
        'descuento'=>'numeric'
      ],
      [
//nombre del imput-validacion que falla (se puede poner solo una)
        '.required'=>'El campo nombre es obligatorio',
        '.string'=>'El campo debe contener solo letras',
        '.numeric'=>'El campo debe contener solo numeros',
        'nombre.unique'=>'El producto ya existe',
      ]);

      $productEdit = Product::find($id);

      $prudctEdit->nombre = $request->input('nombre');
      $prudctEdit->descripcion = $request->descripcion;
      $prudctEdit->precio = $request->precio;
      $prudctEdit->descuento = $request->descuento;

      $productEdit->save();
      //return redirect('');
    }
}
