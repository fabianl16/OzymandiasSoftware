<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmmoniaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parameters', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->float('temperature', 8, 2);
            $table->float('salinity', 8, 2);
            $table->float('PH', 8, 2);
            $table->integer('Code_tank')->unsigned();
            $table->foreign('Code_tank')->references('Tank_code')->on('tanks');
            $table->timestamps();
            
        });
        Schema::create('ammonia', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->double('ammonia', 8, 2);
            $table->double('TAN', 8, 2);
            $table->bigInteger('parameter_id')->unsigned();
            $table->foreign('parameter_id')->references('id')->on('parameters');
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
        Schema::dropIfExists('parameters');
        Schema::dropIfExists('ammonia');
    }
}
