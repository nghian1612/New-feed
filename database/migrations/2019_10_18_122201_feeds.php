<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Feeds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feeds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->double('salary')->nullable();
            $table->string('type_job')->nullable();
            $table->double('level_exp')->nullable();
            $table->string('location')->nullable();
            $table->string('image')->nullable();
            $table->text('link_project')->nullable();
            $table->text('description')->nullable();
            $table->double('type_feed');
            $table->date('time_on')->nullable();;
            $table->date('time_off')->nullable();;
            $table->bigInteger('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users');
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
        Schema::dropIfExists('feeds');
    }
}
