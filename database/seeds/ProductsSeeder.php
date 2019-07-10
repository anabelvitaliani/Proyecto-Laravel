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
              "precio"=>150,
              "descuento"=>0,
              "avatar"=>"Bombonddl.jpg",
              "stock" =>true,
              "categorie_id"=>1,
            ],
            [
              "nombre"=>"Café irlandés",
              "descripcion"=>"Exquisita combinación de whisky y café, cubierto de chocolate amargo",
              "precio"=> 100,
              "descuento"=> 0,
              "avatar"=>"BIrlandes.jpg",
              "stock" => true,
              "categorie_id"=> 1,
            ],
            [
              "nombre"=> "Katy",
              "descripcion"=> "Chocolate semiamargo con crema de naranja",
              "precio"=> 150,
              "descuento"=>20,
              "avatar"=> "BombonNaranja.jpg",
              "stock" => false,
              "categorie_id"=> 1,
            ],
            [
              "nombre"=> "Naranja y leche",
              "descripcion"=> "Cascaritas de naranja tiernizadas bañadas en chocolate con leche",
              "precio"=> 150,
              "descuento"=> 10,
              "avatar"=> "naranjaYChoco.jpg",
              "stock" => true,
              "categorie_id"=> 1,
            ],
            [
              "nombre"=> "Bombones de frambuesa",
              "descripcion"=> "Relleno de mermelada casera de frambuesa, cubierto de los mas ricos frutos rojos.",
              "precio"=> 150,
              "descuento"=> 0,
              "avatar"=> "bombonesFrambuesa.jpg",
              "stock" => false,
              "categorie_id"=>1,
            ],
            [
              "nombre"=> "Higos bañados en chocolate",
              "descripcion"=> "Los mas exquisitos higos bañados en chocolate con leche.",
              "precio"=> 180,
              "descuento"=> 0,
              "avatar"=> "Higos.jpg",
              "stock" => false,
              "categorie_id"=> 1,
            ],
            [
              "nombre"=> "Chocolate y frambuesa",
              "descripcion"=> "Rellena de mermelada casera de frambuesa y duce de leche, cubierto con chocolate amargo. Gramaje=180g.",
              "precio"=> 700,
              "descuento"=> 20,
              "avatar"=> "alfFrambuesa.jpg",
              "stock" => true,
              "categorie_id"=>2,
            ],
            [
              "nombre"=> "Hojaldre",
              "descripcion"=> "Quebradiza masa de ojaldre con relleno de dulce de leche repostero. Gramaje=120g.",
              "precio"=> 38,
              "descuento"=> 10,
              "avatar"=> "AlfHojaldre.PNG",
              "stock" => true,
              "categorie_id"=> 2,
            ],
            [
              "nombre"=> "Hojaldre y chocolate",
              "descripcion"=> "Quebradiza masa de ojaldre con relleno de dulce de leche repostero y recubierto con chocolate. Gramaje=150g.",
              "precio"=> 45,
              "descuento"=> 0,
              "avatar"=> 'AlfHojadreyCh.PNG',
              "stock" => true,
              "categorie_id"=> 2,
            ],
            [
            "nombre"=> "Alfajores de maicena",
            "descripcion"=> "Clásicos alfajores de maicena y dulce de leche, rodeados de un toque de coco.",
            "precio"=> 90,
            "descuento"=> 0,
            "avatar"=> 'maicena.jpg',
            "stock" => false,
            "categorie_id"=> 2,
            ],
            [
              "nombre"=> "Cheescake",
              "descripcion" => "Tradicional torta de queso mascarpone, con una base de galletas y recubierta de mermelada de frambuesa artesanal",
              "precio" => 600,
              "descuento" => 10,
              "avatar" => "cheesecake.jpg",
              "stock" => true,
              "categorie_id" => 3,
            ],
            [
              "nombre" => "Torta helada",
              "descripcion" => "Exquisita torta de helado artesanal, recubierto de galletas caseras de vainilla. Puede ser rellena de dulche de leche, crema americana y chocolate, o a elección por encargo.",
              "precio" => 800,
              "descuento" => 10,
              "avatar" => "THelada.jpg",
              "stock" => false,
              "categorie_id" => 3,
            ],
            [
            "nombre" => "Cupcakes de naranja",
            "descripcion" => "Cupcakes de naranja, cubiertos de una crema de chocolate blanco",
            "precio" => 60,
            "descuento" => 0,
            "avatar" => "cupcakeNaranja.jpg",
            "stock" => false,
            "categorie_id" => 3,
            ],
          ]
        );
    }
}
