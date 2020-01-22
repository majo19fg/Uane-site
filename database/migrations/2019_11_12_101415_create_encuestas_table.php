<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuestas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('matricula');
            $table->string('campus');
            $table->string('sexo');
            $table->string('edad');            
            $table->string('ciudad');
            $table->string('codigo_postal');
            $table->string('pregunta6');
            $table->string('pregunta7');
            $table->string('pregunta8');
            $table->string('pregunta9');
            $table->string('pregunta10');
            $table->string('pregunta11');
            $table->string('pregunta12');
            $table->string('pregunta13');
            $table->string('pregunta14');
            $table->string('pregunta15');
            $table->string('pregunta16');
            $table->string('pregunta17');
            $table->string('pregunta18');
            $table->string('pregunta19');
            $table->string('pregunta20');
            $table->string('pregunta21');
            $table->string('pregunta22');
            $table->string('pregunta23');
            $table->string('pregunta24');
            $table->string('pregunta25');
            $table->string('pregunta26a');
            $table->string('pregunta26b');
            $table->string('pregunta26c');
            $table->string('pregunta26d');
            $table->string('pregunta26e');
            $table->string('pregunta27');
            $table->string('pregunta28'); 
            $table->string('pregunta29');
            $table->string('pregunta30');
            $table->string('pregunta31');
            $table->string('pregunta32');
            $table->string('pregunta33'); 
            $table->string('pregunta34');
            $table->string('pregunta35');
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
        Schema::dropIfExists('encuestas');
    }
}
