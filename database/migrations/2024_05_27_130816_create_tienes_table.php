<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('tiene', function (Blueprint $table) {
        $table->id();
        $table->foreignId('vehiculo_id')->constrained()->onDelete('cascade');
        $table->foreignId('persona_id')->constrained()->onDelete('cascade');
        $table->timestamps();
    });
    
}

    public function down(): void
    {
        Schema::dropIfExists('tienes');
    }
};
