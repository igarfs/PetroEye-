<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_de_poco');
            $table->string('localizacao');
            $table->dateTime('inicio');
            $table->decimal('profundidade', 8, 2);
            $table->string('status');
            $table->string('operador');
            $table->string('campo');
            $table->string('bacia');
            $table->date('data_de_perfuracao');
            $table->date('data_de_conclusao');
            $table->decimal('latitude', 10, 7);
            $table->decimal('longitude', 10, 7);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
}
