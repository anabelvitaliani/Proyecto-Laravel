<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['nombre', 'descripcion','precio','descuento','avatar', 'categoria'];

    public function categorie(){
      return $this->belongsTo(Categorie::class, "categorie_id");
    }
}
