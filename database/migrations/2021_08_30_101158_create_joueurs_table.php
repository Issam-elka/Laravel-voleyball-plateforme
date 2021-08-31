<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJoueursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('joueurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->integer('age');
            $table->bigInteger('tlf');
            $table->string('email');
            $table->string('genre');
            $table->string('pays_origine');
            
            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id')->nullable()->references('id')->on('roles')->onDelete('cascade');

            $table->unsignedBigInteger('equipe_id');
            $table->foreign('equipe_id')->nullable()->references('id')->on('equipes')->onDelete('cascade');

            $table->unsignedBigInteger('photo_id');
            $table->foreign('photo_id')->nullable()->references('id')->on('photos')->onDelete('cascade');
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
        Schema::dropIfExists('joueurs');
    }
}
