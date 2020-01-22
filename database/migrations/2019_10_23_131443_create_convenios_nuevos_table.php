<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConveniosNuevosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('convenios_nuevos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('campus');
            $table->string('empresa');
            $table->string('nombre_empresa');            
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

            $table->string('nivel_presencial');
            $table->string('beca_pre');
            $table->string('tipo_pre');
            $table->string('aplica_pre');
            $table->string('doble_beneficiopre');
            $table->string('beca_preDB');
            $table->string('tipo_preDB');
            $table->string('aplica_preDB');
            $table->string('vigencia_pre');
            $table->string('cvigencia_pre');
            $table->string('aqa_pre');
            $table->string('ciudad_pre');
            $table->string('observaciones_pre');
            $table->string('nivel_enlinea');
            $table->string('beca_el');
            $table->string('tipo_el');
            $table->string('aplica_el');
            $table->string('doble_beneficio');
            $table->string('beca_elDB');
            $table->string('tipo_elDB');
            $table->string('aplica_elDB');
            $table->string('vigencia_el');
            $table->string('cvigencia_el');
            $table->string('aqa_el');
            $table->string('ciudad_el');
            $table->string('observaciones_el');
            $table->string('alcance');
            $table->string('observaciones');


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
        Schema::dropIfExists('convenios_nuevos');
    }
}
