<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('nombre', 100)->unique();
            $table->text('descripcion');
            //cantidad total de valores, cantidad de decimales
            $table->decimal('precio', 10, 2);
            $table->decimal('descuento');
            $table->string('avatar');
            $table->integer('stock')->nullable();
          //  $table->integer('categorie_id');

        //    $table->foreing('categorie_id')->references('id')->on('categories');

        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
