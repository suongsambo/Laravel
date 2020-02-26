<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Products', function (Blueprint $table) {
            $table->bigIncrements('id');
<<<<<<< HEAD
            $table->string('product_name');
            $table->integer('price');
            $table->integer('view')->unsigned()->default(0);
            $table->integer('cat_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->tinyInteger('status')->default(1);
            $table->boolean('sold_out')->default(false);
=======
            $table->string('product_id');
            $table->string('product_name');
            $table->integer('price');
            $table->integer('qty');
            $table->softDeletes('deleted_at');
            $table->dropColumn('deleted_at');
>>>>>>> fc5a024a7de7384c5699401429f70d8378fd9b43
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
        Schema::dropIfExists('Products');
    }
}
