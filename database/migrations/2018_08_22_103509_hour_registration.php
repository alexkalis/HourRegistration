<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HourRegistration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('HourRegistration', function (Blueprint $table){
            $table->increments('id');
            $table->string('hours')->integer();
            $table->string('date')->date();
            $table->string('day');
            $table->string('beginTime');
            $table->string('endTime ');
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
        //
    }
}
