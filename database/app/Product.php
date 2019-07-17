<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['nombre', 'descripcion','precio','descuento','avatar', 'categorie_id', 'brand_id'];

    public function categorie(){
      return $this->belongsTo(Categorie::class, "categorie_id");
    }

    public function brand(){
      return $this->belongsTo(Brand::class, "brand_id");
    }

  /*  public function customers(){
      return $this->belongsToMany(User::class, "shopping", "product_id", "user_id");
    }*/

}
