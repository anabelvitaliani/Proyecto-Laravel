<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
  public function add(Product $product){
    $cart = session('cart');
    $product->quantity = 1;
    if ($cart){
      $cart[] = $product;
    } else {
      $cart = [$product];
    }

    session(['cart' => $cart]);
  }



  public function list(){
    return session('cart');
  }

  public function contains(Product $product){
    $cart = session('cart');

    if (!$cart){
      return false;
    }

    foreach ($cart as $item){
      if ($item->id == $product->id){
        return true;
      }
    }
    return false;

  }

  /*public function delete(Product $product){
    $cart = session('cart');

    if (!$cart){
      return false;
    }

    foreach ($cart as $key => $item){
      if ($item->id == $product->id){
        unset($cart[$key]);
        return true;
      }
    }
    return false;
  }*/

  public function clear(){
   session(['cart' => []]);
  }


  function deleteToCart($product){
    $cart = session('cart');

    if (!$cart){
      return false;
    }

    foreach ($cart as $key => $item){
      if ($item->id == $product->id){
        unset($cart[$key]);
        break;
      }
    }
    session(['cart' => $cart]);
  }



}
