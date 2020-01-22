<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UaneConvenio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uane_convenios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('campus');
            $table->string('empresa');
            $table->string('giro_empresa');
            $table->string('direccion_empresa');
            $table->string('nombre_representante_legal');
            $table->string('nombre_contacto');
            $table->string('telefono_contacto');
            $table->string('correo_contacto');
            $table->timestamp('fecha_inicio');

            $table->string('convenio_para_beca_convenio')->nullable();
            $table->string('convenio_para_practicas')->nullable();
            $table->string('convenio_para_servicio_social')->nullable();
            $table->string('convenio_para_servicio_otro')->nullable();
            $table->longText('convenio_otro_especificar')->nullable();

            $table->string('beca_para_bach');
            $table->string('beca_para_lic');
            $table->string('beca_para_post');
            $table->string('beca_para_bach_linea');
            $table->string('beca_para_lic_linea');
            $table->string('beca_para_post_linea');
            $table->string('alcance_Municipal')->nullable();
            $table->string('alcance_Estatal')->nullable();
            $table->string('alcance_Nacional')->nullable();
            $table->longText('alcance_observaciones')->nullable();


            $table->string('documento')->nullable();
            $table->string('nombre_documento')->nullable();
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
        Schema::dropIfExists('uane_convenios');
    }
}
