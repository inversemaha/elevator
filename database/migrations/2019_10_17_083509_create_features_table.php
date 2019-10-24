<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('features', function (Blueprint $table) {
            $table->increments('featureId');
            $table->unsignedInteger('productId');
            $table->string('featureTitle')->nullable();
            $table->text('featureDescription')->nullable();
            $table->string('featureImage')->nullable();
            $table->string('featureFile')->nullable();
            $table->string('featureTitle2')->nullable();
            $table->text('featureDescription2')->nullable();
            $table->string('featureImage2')->nullable();
            $table->string('featureFile2')->nullable();
            $table->string('featureTitle3')->nullable();
            $table->text('featureDescription3')->nullable();
            $table->string('featureImage3')->nullable();
            $table->string('featureFile3')->nullable();
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
        Schema::dropIfExists('features');
    }
}
