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
            $table->increments('id');
            $table->integer('catogory_id');
            $table->text('title');
            $table->double("orignal_price");
            $table->double("discount_price"); 
            $table->tinyInteger("in_stock")->default(1);
            $table->tinyInteger("status")->default(0);
            $table->timestamps();
            $table->softDeletes();

            // $table->foreign('catogory_id')
            // ->references('catogory_id')->on('catogories')
            // ->onDelete('cascade')
            // ->onUpdate('cascade');
                 
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
