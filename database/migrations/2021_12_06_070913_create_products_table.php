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
            $table->integer('brand_id');
            $table->integer('category_id');       
            $table->integer('subcategory_id');
            $table->integer('subsubcategory_id');
            $table->string('name_en');
            $table->string('name_hin');
            $table->string('slug_en');
            $table->string('slug_hin');           
            $table->string('product_code');
            $table->integer('quantity');
            $table->string('tags_en');
            $table->string('tags_hin');
            $table->string('size_en')->nullable();
            $table->string('size_hin')->nullable();
            $table->string('color_en');
            $table->string('color_hin');
            $table->decimal('selling_price', 8, 2, true);
            $table->decimal('discount_price', 8, 2, true);
            $table->string('short_description_en');
            $table->string('short_description_hin');
            $table->text('long_description_en');
            $table->text('long_description_hin');
            $table->string('thumbnail');
            $table->tinyInteger('hot_deals')->nullable();
            $table->tinyInteger('featured')->nullable();
            $table->tinyInteger('special_offer')->nullable();
            $table->tinyInteger('special_deals')->nullable();
            $table->string('digital_file', 255)->nullable();
            $table->tinyInteger('status')->default(0);      
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
