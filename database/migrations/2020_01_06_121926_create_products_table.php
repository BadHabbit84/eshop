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
            $table->bigIncrements('id');
            $table->string('item_name', 100);
            $table->string('item_description', 100);
            $table->longText('item_detailed_description')->nullable();
            $table->float('item_price');
            $table->integer('item_price_currency_id');
            $table->string('item_note', 150)->nullable();
            $table->integer('item_code')->nullable();
            $table->integer('item_category_id');
            $table->integer('item_sub_category_id')->nullable();
            $table->integer('item_quantity_in_stock')->nullable();
            $table->integer('item_owner_id');
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
