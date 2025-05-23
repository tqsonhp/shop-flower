<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="mainheader.css">
    <link rel="stylesheet" href="{{ asset('css/mainproduct.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
    <title>Product</title>
</head>
<body>
    <!-- JS Lightbox -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

    @include('layout.header')

    <div class="product_container">
        <div class="product_item">            
                <a href="/images/anhhoa1.jpg" data-lightbox="product-gallery">
                    <img src="/images/anhhoa1.jpg" alt="ảnh 1" width="150">
                        </a>
                
                        
                <h3>sản phẩm 1 </h3>
                <p>Giá : 100.000đ</p>
                    {{-- <div class="product_info"> 
                        <p>rổ giá</p>
                        <p>kích cỡ</p>
                        <p>loại</p>
                    </div> --}}
        </div>

        <div class="product_item">            
                 <img src="/images/anhhoa1.jpg" alt="ảnh sản phẩm">
                <h3>sản phẩm 2 </h3>
                <p>Giá : 200.000đ</p>
        </div>

        <div class="product_item">            
                 <img src="/images/anhhoa1.jpg" alt="ảnh sản phẩm">
                <h3>sản phẩm 3 </h3>
                <p>Giá : 300.000đ</p>
        </div>

        <div class="product_item">            
                <img src="/images/anhhoa1.jpg" alt="ảnh sản phẩm">
                <h3>sản phẩm 4 </h3>
                <p>Giá : 400.000đ</p>
        </div>

        <div class="product_item">            
                 <img src="/images/anhhoa1.jpg" alt="ảnh sản phẩm">
                <h3>sản phẩm 5 </h3>
                <p>Giá : 500.000đ</p>
        </div>

        <div class="product_item">            
                 <img src="/images/anhhoa1.jpg" alt="ảnh sản phẩm">
                <h3>sản phẩm 5 </h3>
                <p>Giá : 500.000đ</p>
        </div>

        <div class="product_item">            
                <img src="/images/anhhoa1.jpg" alt="ảnh sản phẩm">
                <h3>sản phẩm 5 </h3>
                <p>Giá : 500.000đ</p>
        </div>

        <div class="product_item">            
                 <img src="/images/anhhoa1.jpg" alt="ảnh sản phẩm">
                <h3>sản phẩm 5 </h3>
                <p>Giá : 500.000đ</p>
        </div>

        <div class="product_item">            
                 <img src="/images/anhhoa1.jpg" alt="ảnh sản phẩm">
                <h3>sản phẩm 5 </h3>
                <p>Giá : 500.000đ</p>
        </div>

        <div class="product_item">            
                <img src="/images/anhhoa1.jpg" alt="ảnh sản phẩm">
                <h3>sản phẩm 5 </h3>
                <p>Giá : 500.000đ</p>
        </div>

        <div class="product_item">            
                 <img src="/images/anhhoa1.jpg" alt="ảnh sản phẩm">
                <h3>sản phẩm 5 </h3>
                <p>Giá : 500.000đ</p>
        </div>

        <div class="product_item">            
                 <img src="/images/anhhoa1.jpg" alt="ảnh sản phẩm">
                <h3>sản phẩm 5 </h3>
                <p>Giá : 500.000đ</p>
        </div>

        <div class="product_item">            
                 <img src="/images/anhhoa1.jpg" alt="ảnh sản phẩm">
                <h3>sản phẩm 5 </h3>
                <p>Giá : 500.000đ</p>
        </div>

    </div>

</body>
</html>