<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemasTable extends Migration {
    public function up() {
        Schema::create('temas', function (Blueprint $table) {
            $table->string('codtem');
            $table->string('nomtem');
            $table->timestamps();
            $table->primary('codtem');
        });
    }

    public function down() {
        Schema::dropIfExists('temas');
    }
}