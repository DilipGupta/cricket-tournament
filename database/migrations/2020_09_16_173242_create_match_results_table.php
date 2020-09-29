<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('match_results', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('match_id');
            $table->integer('first_team_runs');
            $table->integer('second_team_runs');
            $table->integer('first_team_wickets');
            $table->integer('second_team_wickets');
            $table->timestamps();
            $table->foreign('match_id')->references('id')->on('fights');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('match_results');
    }
}
