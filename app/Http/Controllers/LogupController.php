<?php
    // Các dòng 'use' dưới đây giúp  sử dụng những class quan trọng mà không cần ghi đầy đủ đường dẫn của chúng mỗi lần gọi

namespace App\Http\Controllers;

use Illuminate\Http\Request;             // Class dùng để lấy dữ liệu từ form gửi lên và xử lý request
use Illuminate\Support\Facades\Hash;     // Dùng để mã hoá mật khẩu
use App\Models\SystemUser;                 // Model hệ thống users (bạn cần tạo nếu chưa có)




class LogupController extends Controller
{
    // hiển thị form đăng kí
    public function showlogup(){
        return view('auth/logup');
    }

    // xử lí form đăng kí
    public function logup(Request $request)
    {


    //  b1: Kiểm tra dữ liệu người dùng nhập từ form
    // Hàm validate() sẽ kiểm tra các điều kiện:
    // - 'name': phải có (required), là chuỗi (string), không dài quá 255 ký tự
    // - 'email': phải có, đúng định dạng email, và không trùng với bất kỳ email nào đã có trong bảng 'sectionuser'
    // - 'password': phải có, là chuỗi, ít nhất 6 ký tự và phải trùng với ô xác nhận password (confirmed)

          $validated = $request->validate([
            'name' => 'required|string|max:255',                 
            'email' => 'required|email|unique:sectionuser,email',      // cần chỉ rõ tên bảng là sectionuser
            'password' => 'required|string|min:6|confirmed',      // 'confirmed' nghĩa là phải có thêm trường password_confirmation trong form và trùng với password 
        ]);



         // Trả về kết quả
        return "Đăng ký thành công! Chào mừng bạn, " ;



        
     


       


    }

}

