<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('serviceId');
            $table->string('serviceTitle');
            $table->string('serviceDescription');
            $table->string('serviceImage')->nullable();
            $table->string('maintenanceTitle')->nullable();
            $table->string('maintenanceDescription')->nullable();
            $table->string('maintenanceImage')->nullable();
            $table->string('consultantTitle')->nullable();
            $table->string('consultantDescription')->nullable();
            $table->string('consultantImage')->nullable();
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
        Schema::dropIfExists('services');
    }
}
