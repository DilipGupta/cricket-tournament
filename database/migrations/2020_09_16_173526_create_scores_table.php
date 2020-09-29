<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('match_id');
            $table->unsignedBigInteger('player_id');
            $table->integer('runs')->nullable();
            $table->integer('balls')->nullable();
            $table->integer('4s')->nullable();
            $table->integer('6s')->nullable();
            $table->double('strike_rate')->nullable();
            $table->integer('over')->nullable();
            $table->integer('maiden')->nullable();
            $table->integer('given_run')->nullable();
            $table->integer('wicket')->nullable();
            $table->double('eco')->nullable();
            $table->timestamps();
            $table->foreign('match_id')->references('id')->on('fights');
            $table->foreign('player_id')->references('id')->on('players');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scores');
    }
}
