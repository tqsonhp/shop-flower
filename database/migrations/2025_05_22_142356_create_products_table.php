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
            $table->string('name'); // tên sản phẩm 
           $table->text('description')->nullable(); // Mô tả sản phẩm (có thể bỏ trống)
            $table->decimal('price', 10, 2); // Giá sản phẩm, vd: 99999999.99
            $table->string('image')->nullable(); // Tên file ảnh (đường dẫn ảnh)
            $table->timestamps(); // created_at và updated_at
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
