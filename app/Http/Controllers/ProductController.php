<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Categorie;

class ProductController extends Controller
{
    public function index(){
      $products = Product::all();
    //  $categories = Categorie::all();
      //dd($products);
      return view('products.showProducts')->with([
        "products" => $products,
      //  "categories" => $categories
      ]);
    }


public function create(){
  $products = Product::all();
  $categories = Categorie::all();
  return view('products.newproduct')->with([
        "products" => $products,
        "categories" => $categories
      ]);;
}

//siempre que mando datos por un formulario (a la bd creo) no uso post ni get, sino $request, que es un objeto
public function save(Request $request){
//1er parametro:qué voy a validar, 2do:como, 3ero:especificacion de msjs de error si queres cambiar los de laravel
      $this->validate($request, [
        'nombre'=>'required|unique:products|string',
        'descripcion'=>'required|string',
        'precio'=>'required|numeric',
        'descuento'=>'numeric',
      //  'categoria'=>'required|string',
        'avatar' => 'required|image',
      ],
      [
//nombre del imput-validacion que falla (se puede poner solo una)
        'required'=>'El campo es obligatorio',
        'nombre.unique'=>'El producto ya existe',
        'string'=> 'Este campo debe contener solo letras',
        'numeric'=>'Este campo debe contener solo numeros',
      //  'image' => 'Imagen invalida',
      ]);
//si pongo algo aca y no pasó las validaciones previas, no se ejecuta

    $path = $request->file("avatar")->store("public/productsImg");
    $nombreAvatar = basename($path);

//primera forma posible
    \App\Product::create(
      [
        'nombre'=>$request->input('nombre'),
        'descripcion'=>$request->input('descripcion'),
        'precio'=>$request->input('precio'),
        'descuento'=>$request->input('descuento'),
        'avatar'=> $nombreAvatar,
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
    $categories = Categorie::all();
    return view('products.editProduct')->with([
          "product" => $product,
          "categories" => $categories
        ]);;
}

public function update($id, Request $request){

      $this->validate($request, [
        'nombre'=>'required|string|unique:products,nombre,'.$id,
        'descripcion'=>'required|string',
        'precio'=>'required|numeric',
        'descuento'=>'numeric',
        'avatar' => 'image',
        //categoria
      ],
      [
//nombre del imput-validacion que falla (se puede poner solo una)
        '.required'=>'El campo es obligatorio',
        '.string'=>'El campo debe contener solo letras',
        '.numeric'=>'El campo debe contener solo numeros',
        'nombre.unique'=>'El producto ya existe',
        'image' => 'Imagen invalida'
        //falta validacion de categoria
      ]);

      $productEdit = Product::find($id);

      $productEdit->nombre = $request->nombre;
      $productEdit->descripcion = $request->descripcion;
      $productEdit->precio = $request->precio;
      $productEdit->descuento = $request->descuento;
      //categoria
      //avatar
      $productEdit->save();
      return redirect('/product');
    }

    function delete($id){
      $product = Product::find($id);
      $product->delete();
      return redirect('/product');
    }
}
