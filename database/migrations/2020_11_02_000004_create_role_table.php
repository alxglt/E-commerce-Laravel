<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('role', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default('user');
            $table->integer('right_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('role', function (Blueprint $table) {
            $table->foreign('right_id')->references('id')->on('rights');

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role');
    }
}
