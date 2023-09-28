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
        Schema::create('sujestao', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 100);
            $table->string('introducao', 100);
            $table->text('conteudo');
            $table->text('imagem_url')->nullable();
            $table->string('autor', 100);
            $table->string('emailautor', 100);
            $table->boolean('postado')->default(false);



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
        Schema::dropIfExists('sujestao');
    }
};
