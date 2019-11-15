<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('election_id');
            $table->string('column1')->nullable();
            $table->string('column2')->nullable();
            $table->string('column3')->nullable();
            $table->string('column4')->nullable();
            $table->string('column5')->nullable();
            $table->string('column6')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
