<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccidentesTable extends Migration
{
    public function up()
{
    Schema::create('accidentes', function (Blueprint $table) {
        $table->id();
        $table->string('codigo')->default('default_value'); 
        $table->time('hora');
        $table->date('fecha');
        $table->string('lugar');
        $table->timestamps();
    });
}

    public function down()
    {
        Schema::dropIfExists('accidentes');
    }
}

