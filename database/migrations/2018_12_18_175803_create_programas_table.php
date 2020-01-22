<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('url');
            $table->mediumText('descripcion_corta')->nullable();
            $table->string('duracion_curso')->nullable();
            $table->text('descripcion_programa')->nullable();
            $table->timestamp('inicio_curso')->nullable();
            $table->string('visible')->default('show');
            $table->unsignedInteger('tipoPrograma_id')->nullable();
            $table->unsignedInteger('modalidadPrograma_id')->nullable();
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
        Schema::dropIfExists('programas');
    }
}
