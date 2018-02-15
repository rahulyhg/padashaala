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
            $table->increments('id');
            $table->integer('user_id')->unsigned();;
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('product_name')->nullable();
            $table->string('slug')->unique();
            $table->integer('product_price')->nullable();
            $table->integer('discount_percentage')->nullable();  
            $table->boolean('approved')->default(0); 
            $table->string('sku')->nullable();  
            $table->integer('stock_quantity')->nullable();  
            $table->boolean('out_of_stock')->default(0); 
            $table->longText('long_description')->nullable(); 
            $table->longText('short_description')->nullable();     
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
