<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogupController extends Controller
{
    public function showlogup(){
        return view('auth/logup');
    }
}
