<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePokemonTypeTable extends Migration
{
    
    public function up()
    {
        Schema::create('pokemon_type', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('status');
            $table->integer('pokemon_id')->unsigned();
            $table->foreign('pokemon_id')->references('id')->on('pokemon');
            $table->integer('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('types');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('pokemon_type');
    }
}
