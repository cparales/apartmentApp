<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->references('id')->on('users');
            $table->string('title');
            $table->string('locality');
            $table->string('country');
            $table->string('address');
            $table->string('type');
            $table->integer('rooms_nr')->unsigned();
            $table->integer('floors_nr')->unsigned();
            $table->integer('price')->unsigned();
            $table->string('photo_url')->nullable();
            $table->string('contact_nr');
            $table->string('description')->nullable();
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
        Schema::dropIfExists('houses');
    }
}
