<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTerrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images_terrains', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_image');
            $table->foreign('id_image')->references('id')->on('images')->onUpdate('cascade');
            $table->unsignedBigInteger('id_terrain');
            $table->foreign('id_terrain')->references('id')->on('terrains')->onUpdate('cascade');
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
        Schema::dropIfExists('images_terrains');
    }
}
