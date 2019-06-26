<?php

use Illuminate\Database\Seeder;

class UsuarioAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table("users")->insert(
      [
        [
        "name"=> "Anabel",
        "surname"=> "DH",
        "email"=> "anabel.vitaliani@gmail.com",
        "password"=> "dh123456",
        "admin"=> true,
        ]
      ]
      );
    }
}
