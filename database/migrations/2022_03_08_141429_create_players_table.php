<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();

            $table->string('name',45);
            $table->string('surname',45);
            $table->string('age',2);
            $table->unsignedBigInteger('team_id')->unique()->nullable();
            
            //llave foranea
            
            $table->foreign('team_id')->references('id')->on('teams')
                    ->onUpdate('cascade')
                    ->onDelete('set null');



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
        Schema::dropIfExists('players');
    }
}
