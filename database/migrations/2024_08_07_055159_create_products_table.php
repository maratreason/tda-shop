<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('title');
            $table->string('alias');
            $table->double('price')->default(0);
            $table->double('old_price')->default(0);
            $table->text('description')->nullable();
            $table->string('img')->nullable();
            $table->text('gallery_img')->nullable();
            $table->integer('discount')->default(0);
            $table->tinyInteger('new')->default(0);
            $table->tinyInteger('hit')->default(0);
            $table->integer('category_id');
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
};
