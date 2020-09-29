<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fights', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('slug');
            $table->unsignedBigInteger('tournament_id');
            $table->unsignedBigInteger('first_team_id');
            $table->unsignedBigInteger('second_team_id');
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();
            $table->foreign('tournament_id')->references('id')->on('tournaments');
            // $table->foreign('first_team_id')->references('id')->on('teams');
            // $table->foreign('second_team_id')->references('id')->on('teams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fights');
    }
}
