<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccesoMKTBOXTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_acceso_m_k_t_b_o_x', function (Blueprint $table) {
            $table->increments('id');
            $table->mediumText('Usuario');
            $table->mediumText('Campus');
            $table->increments('id');
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
        Schema::dropIfExists('_acceso_m_k_t_b_o_x');
    }
}
