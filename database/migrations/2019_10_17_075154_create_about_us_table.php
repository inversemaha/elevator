<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_us', function (Blueprint $table) {
            $table->increments('aboutId');
            $table->string('visionTitle')->nullable();
            $table->string('visionDescription')->nullable();
            $table->string('visionImage')->nullable();
            $table->string('aboutTitle')->nullable();
            $table->string('aboutDescription')->nullable();
            $table->string('aboutImage')->nullable();
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
        Schema::dropIfExists('about_us');
    }
}
