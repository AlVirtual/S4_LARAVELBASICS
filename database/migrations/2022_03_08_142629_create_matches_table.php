<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->id();

            $table->dateTime('date');
            
            $table->unsignedBigInteger('local_team_id');
            $table->foreign('local_team_id')->references('id')->on('teams')
                    ->onUpdate('cascade')
                    ->onDelete('no action');
            
            $table->unsignedBigInteger('visitor_team_id');
            $table->foreign('visitor_team_id')->references('id')->on('teams')
                    ->onUpdate('cascade')
                    ->onDelete('no action');
            
            $table->tinyInteger('goals_local')->nullable();
            $table->tinyInteger('goals_visitor')->nullable();
            
            $table->unsignedBigInteger('stadium_id');
            $table->foreign('stadium_id')->references('id')->on('stadia')
                    ->onUpdate('cascade')
                    ->onDelete('no action');


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
        Schema::dropIfExists('matches');
    }
}
