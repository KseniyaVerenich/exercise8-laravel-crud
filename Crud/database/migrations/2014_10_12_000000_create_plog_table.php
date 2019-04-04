<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plant_log', function (Blueprint $table) {
            $table->integer('id')->index();
            $table->string('common name');
            $table->string('genus')->nullable();
            $table->string('species')->nullable();
            $table->binary('photo')->nullable();
            $table->string('description');
            $table->timestamp('date');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plant_log');
    }
}