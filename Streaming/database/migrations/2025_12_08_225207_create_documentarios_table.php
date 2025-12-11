<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('documentarios', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descricao')->nullable();
            $table->date('data_lancamento')->nullable();
            $table->string('genero')->nullable();
            $table->string('diretor')->nullable();
            $table->integer('duracao')->nullable(); // duração em minutos
            $table->string('classificacao')->nullable(); // ex: Livre, 12 anos, 16 anos, etc.
            $table->string('idioma')->nullable();
            $table->string('legendas')->nullable();
            $table->string('url_capa')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documentarios');
    }
};
