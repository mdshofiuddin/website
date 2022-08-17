<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoundownsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coundowns', function (Blueprint $table) {
            $table->id();
            $table->string('coundownOne')->nullable();
            $table->string('coundownTwo')->nullable();
            $table->string('coundownThree')->nullable();
            $table->string('coundownFour')->nullable();
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
        Schema::dropIfExists('coundowns');
    }
}
