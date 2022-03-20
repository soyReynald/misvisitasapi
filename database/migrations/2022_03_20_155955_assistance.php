<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('assistance', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('assistance_id');
            $table->bigInteger('visit_id')->unsigned();
            $table->bigInteger('secretary_id')->unsigned();
            $table->bigInteger('day_id')->unsigned();

            $table->timestamps();

            $table->foreign('visit_id')->references('visit_id')->on('visit');
            $table->foreign('secretary_id')->references('brother_id')->on('brother');
            $table->foreign('day_id')->references('day_id')->on('day');
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
};
