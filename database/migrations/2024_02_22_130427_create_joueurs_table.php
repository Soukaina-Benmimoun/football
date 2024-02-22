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
        Schema::create('joueurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->integer('numero');
            $table->string('post');
            $table->integer('age');
            $table->string('nationalite');
            $table->integer('gols')->nullable()->default(0);
            $table->integer('assists')->nullable()->default(0);
            $table->unsignedBigInteger( 'equipe_id') ;
            $table->foreign('equipe_id')->references('id')->on('equipes')->onDelete( 'cascade' ) ;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('joueurs');
    }
};
