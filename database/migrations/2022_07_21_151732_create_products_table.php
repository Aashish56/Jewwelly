<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('details')->nullable();
            $table->string('url')->nullable();
            $table->string('sku')->nullable();
            $table->string('image')->nullable();
            $table->string('weight')->nullable();
            $table->string('weight_unit')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('price')->nullable();
            $table->integer('prev_price')->nullable();
            $table->integer('product_quantity')->nullable();
            $table->boolean('show_quantity')->nullable();
            $table->boolean('low_stock_warning')->nullable();
            $table->boolean('status')->nullable();
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
