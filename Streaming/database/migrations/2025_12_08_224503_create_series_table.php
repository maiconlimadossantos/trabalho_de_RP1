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
        Schema::create('series', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descricao')->nullable();
            $table->date('data_lancamento')->nullable();
            $table->string('genero')->nullable();
            $table->string('criador')->nullable();
            $table->integer('temporadas')->nullable();
            $table->integer('episodios')->nullable();
            $table->string('classificacao')->nullable(); // ex: Livre, 12 anos, 16 anos, etc.
            $table->string('idioma')->nullable();
            $table->string('legendas')->nullable();
            $table->string('url_capa')->nullable();
            $table->string('status')->nullable(); // ex: Em andamento, Concluída, Cancelada
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('series');
    }
};
