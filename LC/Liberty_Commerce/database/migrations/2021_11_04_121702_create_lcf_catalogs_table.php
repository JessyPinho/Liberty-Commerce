<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLcfCatalogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lcf_catalogs', function (Blueprint $table) {
            $table->id()->nullable(false);
            $table->string('nom_jeu', 50)->nullable(false);
            $table->string('description');
            $table->string('image');
            $table->float('prix')->nullable(false);
            $table->string('genre');
            $table->integer('stock');
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
        Schema::dropIfExists('lcf_catalogs');
    }
}
