<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Categorie;
use App\Brand;
use App\Cart;
use Auth;

class CartController extends Controller
{
  public function show($id){
    $cart = new Cart();
    //se puede hacer new cart todas las veces necesarias porque session hay una sola
    $product = Product::find($id);
    return view('product', compact('product', 'cart'));
  }

  public function addToCart($id){
    $cart = new Cart();
    $product = Product::find($id);
    $cart->add($product);

      return redirect("/product");
   }

   public function checkout(){
     $cart = new Cart();

   return view("checkout", compact('cart'));
 }

 public function finishCheckout(){
    $cart = new Cart();
    $cart->clear();

  return view("products.success");
 }

 function deleteToCart($id){

   $cart = new Cart();
   $product = Product::find($id);
   $cart->deleteToCart($product);

   return response()->json(['eliminado' => $id], 200);

 }
}
