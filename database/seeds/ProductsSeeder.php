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
              "avatarUno"=>"ddl1",
              "avatarDos"=>"ddl2",
              "categoria"=>"Bombones",
            ],
            [
              "nombre"=>"Café irlandés",
              "descripcion"=>"Exquisita combinación de whisky y café, cubierto de chocolate amargo",
              "precio"=>150,
              "descuento"=>0,
              "avatarUno"=>"ci1",
              "avatarDos"=>"ci2",
              "categoria"=>'Bombones',
            ],
            [
              "nombre"=>"Katy",
              "descripcion"=>"Chocolate semiamargo con crema de naranja",
              "precio"=>150,
              "descuento"=>20,
              "avatarUno"=>"nar1",
              "avatarDos"=>"nar2",
              "categoria"=>"Bombones",
            ],
            [
              "nombre"=>"Naranja y leche",
              "descripcion"=>"Cascaritas de naranja tiernizadas bañadas en chocolate con leche",
              "precio"=>150,
              "descuento"=>10,
              "avatarUno"=>"nyl1",
              "avatarDos"=>"nyl2",
              "categoria"=>"Bombones",
            ],
            [
              "nombre"=>"Chocolate y frambuesa",
              "descripcion"=>"Relleno de mermelada casera de frambuesa, cubierto de chocolate amargo. Gramaje=180g.",
              "precio"=>38,
              "descuento"=>0,
              "avatarUno"=>"cyf1",
              "avatarDos"=>"cyf2",
              "categoria"=>"Alfajores",
            ],
            [
              "nombre"=>"Hojaldre",
              "descripcion"=>"Quebradiza masa de ojaldre con relleno de dulce de leche repostero. Gramaje=120g.",
              "precio"=>38,
              "descuento"=>10,
              "avatarUno"=>'h1',
              "avatarDos"=>'h2',
              "categoria"=>"Alfajores",
            ],
            [
              "nombre"=>"Hojaldre y chocolate",
              "descripcion"=>"Quebradiza masa de ojaldre con relleno de dulce de leche repostero y recubierto con chocolate. Gramaje=150g.",
              "precio"=>45,
              "descuento"=>0,
              "avatarUno"=>'hyc1',
              "avatarDos"=>'hyc2',
              "categoria"=>"Alfajores",
            ],
            [
              "nombre"=>"Cheescake",
              "descripcion"=>"Tradicional torta de queso mascarpone, con una base de galletas y recubierta de mermelada de frambuesa artesanal",
              "precio"=>600,
              "descuento"=>0,
              "avatarUno"=>"chck1",
              "avatarDos"=>"chck2",
              "categoria"=>"Reposteria",
            ],
            [
              "nombre"=>"Torta helada",
              "descripcion"=>"Se compone de tres pisos de helado artesanal, cada uno recubierto de galletas caseras de vainilla. Las capas pueden ser de dulche de leche, crema americana y chocolate, o a elección por encargo.",
              "precio"=>550,
              "descuento"=>10,
              "avatarUno"=>"th1",
              "avatarDos"=>"th2",
              "categoria"=>"Reposteria",
            ],
          ]
        );
    }
}
