<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showproduct() {
        return view('auth.product');
    }
}
