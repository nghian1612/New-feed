<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Feedskills extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedskills', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_feed')->unsigned();
            $table->foreign('id_feed')->references('id')->on('feeds');
            $table->bigInteger('id_skill')->unsigned();
            $table->foreign('id_skill')->references('id')->on('skills');
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
        Schema::dropIfExists('feedskills');
    }
}
