<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;     // Dùng để truy vấn database
use Illuminate\Support\Facades\Hash;   // Dùng để kiểm tra mật khẩu đã mã hoá


class LoginController extends Controller
    // b1: hiển thị form đăng nhập
{
    public function showlogin() {
        return view('auth/login');
    }

    // b2:sử lí đăng nhập
// tạo ra hàm xử lí khi người dùng ấn nút đăng nhập, 
        public function login(Request $request) {
        //1 . lấy dữ liệu email và password từ form html gửi lên
        $email = $request->input('email');          // $email hoặc $password sẽ được nhập giá trị trên name của input gửi lên
        $password = $request->input('password');
        //2. tìm use trong bảng uses  bằng địa chỉ email
        $user = DB::table('uses')->where('email', $email)->first();

// $user = DB::table('uses')->where('email', $email)->first();
// dd($user);
// test nhanh trước khi kiểm tra mật khẩu mã hoá và mk trên database

        // 3. kiểm tra mật khẩu 
        //  if ($user && Hash::check($password, $user->password)) {
        //      return "✅ Đăng nhập thành công!";
        //  } else {
        //      return "❌ Sai thông tin đăng nhập.";
        //  }

         if ($user && $password === $user->password) {
    return "✅ Đăng nhập thành công!";
} else {
    return "❌ Sai thông tin đăng nhập.";
}
    }
}   
