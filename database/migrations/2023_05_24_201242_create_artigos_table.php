<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artigos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('autor_id')->constrained('users');
            $table->foreignId('revisado_por_id')->constrained('users');
            $table->foreignId('editor_id')->constrained('users');
            $table->string('titulo', 100);
            $table->string('introducao', 1000);
            $table->text('conteudo');
            $table->text('imagem_url')->nullable();
            $table->boolean('postado')->default(false);
            $table->integer('visualizacao')->default(1);
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artigos');
    }
};
