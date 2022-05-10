<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLcfUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lcf_users', function (Blueprint $table) {
            $table->id()->nullable(false);
            $table->string('first_name', 50)->nullable(false);
            $table->string('name', 50)->nullable(false);
            $table->string('email', 50)->unique()->nullable(false);
            $table->string('password', 100)->nullable(false);
            $table->boolean('admin');
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
        Schema::dropIfExists('lcf_users');
    }
}
