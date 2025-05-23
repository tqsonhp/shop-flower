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
        Schema::create('sectionuser', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamps();
            // laravel sẽ tự tạo ra 2 cột:create_up  lưu thời gian tạo dòng dữ liệu
                                        // update_at lưu thời gian cập nhật gần nhất 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sectionuser');
    }
};

// hàm up sẽ được gọi khi chạy lệnh/ php artisan migrate
// lệnh sẽ thực thi tạo bảng 

// hàm down sẽ được gọi khi chạy lệnh/ php artisan migrate:rollback (xoá bỏ những j đã được tạo bởi hàm up)
