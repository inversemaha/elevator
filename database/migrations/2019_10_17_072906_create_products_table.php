<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('productId');
            $table->unsignedInteger('categoryId');
            $table->string('productName');
            $table->text('productDescription');
            $table->string('productImage')->nullable();
            $table->string('productTitle2')->nullable();
            $table->text('productDescription2')->nullable();
            $table->string('productImage2')->nullable();
            $table->string('productFile')->nullable();
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
        Schema::dropIfExists('products');
    }
}
