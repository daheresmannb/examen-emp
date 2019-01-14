<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutorsTable extends Migration {
    public function up() {
        Schema::create('autores', function (Blueprint $table) {
            $table->string('codaut');
            $table->string('nomaut');
            $table->timestamps();
            $table->primary('codaut');
        });
    }

    public function down() {
        Schema::dropIfExists('autores');
    }
}