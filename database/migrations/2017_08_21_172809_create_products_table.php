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
            $table->increments('id')->unsigned();
            $table->string('product_name', 50);
            $table->text('type',50);
            $table->text('subtype',50)->nullable();
            $table->float('mrp');
            $table->float('gst');
            $table->float('discount');
            $table->float('price',10);
            $table->text('description');
            $table->string('path',255);
            $table->string('path2',255);
            $table->string('path3',255);
            $table->string('path4',255);
            $table->string('video',255);
            $table->string('remark1',255)->nullable();
            $table->string('remark2',255)->nullable();
            $table->string('remark3',255)->nullable();
            $table->string('remark4',255)->nullable();
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
