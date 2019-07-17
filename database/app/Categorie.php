<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public $guarded = [];

    public function products(){
      return $this->hasMany(Product::class, "categorie_id");
    }
}
