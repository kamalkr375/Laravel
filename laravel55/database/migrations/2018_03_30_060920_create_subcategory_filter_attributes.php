<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubcategoryFilterAttributes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcategory_filter_attributes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('subcategory_filter_id')->unsigned();
            $table->foreign('subcategory_filter_id')->references('id')->on('subcategory_filters')->onDelete('cascade');
            $table->string('filter_value');
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
        Schema::dropIfExists('subcategory_filter_attributes');
    }
}
