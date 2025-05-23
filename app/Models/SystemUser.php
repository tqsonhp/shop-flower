<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; // nếu bạn định dùng để đăng nhập sau này
use Illuminate\Notifications\Notifiable;

class SystemUser extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'sectionuser'; // tên bảng bạn đã tạo trong migration

    public $timestamps = false; // 👈 THÊM DÒNG NÀY nếu bảng không có created_at và updated_at

    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}
