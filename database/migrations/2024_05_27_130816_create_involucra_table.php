<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvolucraTable extends Migration
{
    public function up()
    {
        Schema::create('involucra', function (Blueprint $table) {
            $table->id();
            $table->foreignId('persona_id')->constrained('personas')->onDelete('cascade');
            $table->foreignId('accidente_id')->constrained('accidentes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('involucra');
    }
}
