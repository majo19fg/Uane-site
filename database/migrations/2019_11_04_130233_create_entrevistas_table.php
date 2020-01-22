<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntrevistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrevistas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('matricula');
            $table->string('sexo_p1');            
            $table->integer('edad_p2');
            $table->integer('codigo_postal_p3');
            $table->string('ciudad_p4');
            $table->string('campus_p5');
            $table->string('p6');
            $table->string('p7');
            $table->string('p8');
            $table->string('p9');
            $table->string('p10');
            $table->string('p11');
            $table->string('p12');
            $table->string('p13');
            $table->string('p14');
            $table->string('p15');
            $table->string('p16');
            $table->string('p17');
            $table->string('p18');
            $table->string('p19');
            $table->string('p20');
            $table->string('p21');
            $table->string('p22');
            $table->string('p23');
            $table->string('p24');
            $table->string('p25');
            $table->string('p26');
            $table->string('p27');
            $table->string('p28');
            $table->string('p29');
            $table->string('p30');
            $table->string('p31');
            $table->string('p32');
            $table->string('p33');
            $table->string('p34');
            $table->string('p35');
            $table->string('p36');
            $table->string('p37');
            $table->string('p38');
            $table->string('p39');
            $table->string('p40');
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
        Schema::dropIfExists('entrevistas');
    }
}
