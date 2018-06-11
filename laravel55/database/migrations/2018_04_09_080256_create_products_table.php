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
                $table->string('name');
                $table->string('slug')->unique();
                $table->text('title')->nullable();
                $table->text('info')->nullable();
                $table->text('description')->nullable();
                $table->string('code')->unique();
                $table->string('barcode');
                $table->integer('category_id'); 
                $table->index('category_id');
                $table->integer('subcategory_id');
                $table->index('subcategory_id');
                $table->integer('brand_id');
                $table->index('brand_id');
                $table->integer('vendor_id');
                $table->index('vendor_id');
                $table->integer('gender_id');
                $table->index('gender_id');
                $table->integer('is_combo');
                $table->integer('quantity');
                $table->integer('quantity_limitation_without_inventory');
                $table->integer('negative_quantity_allow');
                $table->float('inr_price');
                $table->index('inr_price');
                $table->integer('new');
                $table->index('new');
                $table->integer('home_menu');
                $table->integer('hot_seller');
                $table->string('discount_type')->nullable();
                $table->index('discount_type');
                $table->string('discount')->nullable();
                $table->index('discount');
                $table->integer('image_number');
                $table->integer('gift_card');
                $table->index('gift_card');
                $table->text('rack')->nullable();
                $table->integer('status');
                $table->index('status');
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
