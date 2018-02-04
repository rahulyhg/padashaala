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
            $table->string('name',75)->nullable();
            $table->string('brand',75)->nullable();

            $table->string('slug',75)->nullable();
            $table->string('sku',100)->nullable();
            $table->string('barcode',100);
            $table->longText('short_description')->nullable();
            $table->longText('long_description')->nullable();
            $table->boolean('in_stock')->default(1);
            $table->integer('stock_qty')->nullable();
            $table->boolean('tax')->default(0);
            $table->integer('tax_percentage')->nullable();
            $table->boolean('pre_order')->default(0);
            $table->boolean('status')->default(1);
            $table->boolean('approved')->default(0);

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
