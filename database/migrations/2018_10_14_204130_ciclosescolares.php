<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ciclosescolares extends Migration
{
    
    public function up()
    {
    Schema::create('ciclosescolares',function(Blueprint $table){
            $table->increments('id_ciclo');
            $table->string('ciclo',50);
            $table->timestamps();
    });
    }

    public function down()
    {
    Schema::drop('ciclosescolares');
    }
}
