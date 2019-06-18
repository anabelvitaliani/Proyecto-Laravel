<?php

use Illuminate\Database\Seeder;


class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("products")->insert(
          [
            [
              "nombre"=> "Bombones de dulce de leche",
              "descripcion"=> "Delicioso bocadito de chocolate relleno de un suave y tentador dulce de leche.",
              "precio"=>100,
              "descuento"=>0,
              "avatar"=>"productsImg/orangutan-bebe.jpg",
          //    "stock" =>
            //  "category_id"=>
            ],
            [
              "nombre"=>"Café irlandés",
              "descripcion"=>"Exquisita combinación de whisky y café, cubierto de chocolate amargo",
              "precio"=>150,
              "descuento"=>0,
              "avatar"=>"",
            //  "category_id"=>
            ],
            [
              "nombre"=>"Katy",
              "descripcion"=>"Chocolate semiamargo con crema de naranja",
              "precio"=>150,
              "descuento"=>20,
              "avatar"=>"",
            //  "category_id"=>,
            ],
            [
              "nombre"=>"Naranja y leche",
              "descripcion"=>"Cascaritas de naranja tiernizadas bañadas en chocolate con leche",
              "precio"=>150,
              "descuento"=>10,
              "avatar"=>"",
            //  "category_id"=>,
            ],
            [
              "nombre"=>"Chocolate y frambuesa",
              "descripcion"=>"Relleno de mermelada casera de frambuesa, cubierto de chocolate amargo. Gramaje=180g.",
              "precio"=>38,
              "descuento"=>0,
              "avatar"=>"cyf1",
              //"category_id"=>,
            ],
            [
              "nombre"=>"Hojaldre",
              "descripcion"=>"Quebradiza masa de ojaldre con relleno de dulce de leche repostero. Gramaje=120g.",
              "precio"=>38,
              "descuento"=>10,
              "avatar"=>'h1',
            //  "category_id"=>,
            ],
            [
              "nombre"=>"Hojaldre y chocolate",
              "descripcion"=>"Quebradiza masa de ojaldre con relleno de dulce de leche repostero y recubierto con chocolate. Gramaje=150g.",
              "precio"=>45,
              "descuento"=>0,
              "avatar"=>'hyc1',
              //"category_id"=>,
            ],
            [
              "nombre"=>"Cheescake",
              "descripcion"=>"Tradicional torta de queso mascarpone, con una base de galletas y recubierta de mermelada de frambuesa artesanal",
              "precio"=>600,
              "descuento"=>0,
              "avatar"=>"chck1",
            //  "category_id"=>,
            ],
            [
              "nombre"=>"Torta helada",
              "descripcion"=>"Se compone de tres pisos de helado artesanal, cada uno recubierto de galletas caseras de vainilla. Las capas pueden ser de dulche de leche, crema americana y chocolate, o a elección por encargo.",
              "precio"=>550,
              "descuento"=>10,
              "avatar"=>"th1",
            //  "category_id"=>,
            ],
          ]
        );
    }
}
