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
              "avatar"=>"ProductsImg/Bombonddl.jpg",
          //    "stock" =>
              "categorie_id"=>1,
            ],
            [
              "nombre"=>"Café irlandés",
              "descripcion"=>"Exquisita combinación de whisky y café, cubierto de chocolate amargo",
              "precio"=>150,
              "descuento"=>0,
              "avatar"=>"ProductsImg/BIrlandes.jpg",
              "categorie_id"=>1,
            ],
            [
              "nombre"=>"Katy",
              "descripcion"=>"Chocolate semiamargo con crema de naranja",
              "precio"=>150,
              "descuento"=>20,
              "avatar"=>"ProductsImg/BombonNaranja.jpg",
              "categorie_id"=>1,
            ],
            [
              "nombre"=>"Naranja y leche",
              "descripcion"=>"Cascaritas de naranja tiernizadas bañadas en chocolate con leche",
              "precio"=>150,
              "descuento"=>10,
              "avatar"=>"ProductsImg/naranjaYChoco.jpg",
              "categorie_id"=>1,
            ],
            [
              "nombre"=>"Bombones de frambuesa",
              "descripcion"=>"Relleno de mermelada casera de frambuesa, cubierto de los mas ricos frutos rojos.",
              "precio"=>150,
              "descuento"=>0,
              "avatar"=>"ProductsImg/bombonesFrambuesa.jpg",
              "categorie_id"=>1,
            ],
            [
              "nombre"=>"Higos bañados en chocolate",
              "descripcion"=>"Los mas exquisitos higos bañados en chocolate con leche.",
              "precio"=>180,
              "descuento"=>0,
              "avatar"=>"ProductsImg/Higos.jpg",
              "categorie_id"=>1,
            ],
            [
              "nombre"=>"Chocolate y frambuesa",
              "descripcion"=>"Relleno de mermelada casera de frambuesa y duce de leche, cubierto de chocolate amargo. Gramaje=180g.",
              "precio"=>38,
              "descuento"=>0,
              "avatar"=>"ProductsImg/alfFrambuesa.jpg",
              "categorie_id"=>2,
            ],
            [
              "nombre"=>"Hojaldre",
              "descripcion"=>"Quebradiza masa de ojaldre con relleno de dulce de leche repostero. Gramaje=120g.",
              "precio"=>38,
              "descuento"=>10,
              "avatar"=>"ProductsImg/AlfHojaldre.PNG",
              "categorie_id"=>2,
            ],
            [
              "nombre"=>"Hojaldre y chocolate",
              "descripcion"=>"Quebradiza masa de ojaldre con relleno de dulce de leche repostero y recubierto con chocolate. Gramaje=150g.",
              "precio"=>45,
              "descuento"=>0,
              "avatar"=>'ProductsImg/AlfHojadreyCh.PNG',
              "categorie_id"=>2,
            ],
            [
            "nombre"=>"Alfajores de maicena",
            "descripcion"=>"Clásicos alfajores de maicena y dulce de leche, rodeados de un toque de coco.",
            "precio"=>30,
            "descuento"=>0,
            "avatar"=>'ProductsImg/maicena.jpg',
            "categorie_id"=>2,
            ],
            [
              "nombre"=>"Cheescake",
              "descripcion"=>"Tradicional torta de queso mascarpone, con una base de galletas y recubierta de mermelada de frambuesa artesanal",
              "precio"=>600,
              "descuento"=>0,
              "avatar"=>"ProductsImg/cheesecake.jpg",
              "categorie_id"=>3,
            ],
            [
              "nombre"=>"Torta helada",
              "descripcion"=>"Se compone de tres pisos de helado artesanal, cada uno recubierto de galletas caseras de vainilla. Las capas pueden ser de dulche de leche, crema americana y chocolate, o a elección por encargo.",
              "precio"=>60,
              "descuento"=>10,
              "avatar"=>"ProductsImg/THelada.jpg",
              "categorie_id"=>3,
            ],
            [
            "nombre"=>"Cupcakes de naranja",
            "descripcion"=>"Cupcakes de naranja, cubiertos de una crema de chocolate blanco",
            "precio"=>60,
            "descuento"=>0,
            "avatar"=>"ProductsImg/cupcakeNaranja.jpg",
            "categorie_id"=>3,
            ],
          ]
        );
    }
}
