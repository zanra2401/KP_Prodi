<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFotosTable extends Migration
{
    public function up()
    {
        Schema::create('fotos', function (Blueprint $table) {
            $table->string('id_foto', 36)->primary();
            $table->text('path_foto');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fotos');
    }
}
