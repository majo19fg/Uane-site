<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUrlHistoryToCampusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('campuses', function (Blueprint $table) {
            $table->string('miniatura')->after('name')->default('default.jpg');
            $table->string('url')->after('miniatura');
            $table->string('direccion')->after('url');
            $table->string('latitud')->after('direccion');
            $table->string('longitud')->after('latitud');            
            $table->text('hisroty')->after('longitud');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('campuses', function (Blueprint $table) {
            $table->dropColumn('miniatura');
            $table->dropColumn('direccion');
            $table->dropColumn('latitud');
            $table->dropColumn('longitud');
            $table->dropColumn('url');
            $table->dropColumn('hisroty');
        });
    }
}
