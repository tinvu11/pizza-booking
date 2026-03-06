@extends('master')
@section('main')
@include('Frontend.partials.menu_carousel', ['carouselTitle' => 'Address & Contact'])
<style>
    /* 1. TỔNG THỂ & NỀN */
    body {
        background-color: #121212; /* Nền tối đồng bộ với trang menu */
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    /* 2. STYLE LẠI CAROUSEL */
    .carousel-item img {
        height: 450px;
        object-fit: cover;
        filter: brightness(0.8); /* Làm mờ ảnh một chút để sang hơn */
    }

    /* 3. TIÊU ĐỀ CONTACT US */
    .text-center h3 {
        font-size: 2.5rem;
        letter-spacing: 3px;
        text-transform: uppercase;
    }

    /* 4. XỬ LÝ PHẦN BỐ CỤC (Fix lỗi Absolute & w-50) */
    .contact-section {
        display: flex;
        flex-wrap: wrap;
        margin: 0;
        /* background: #1a1a1a; */
        border-radius: 15px;
        overflow: hidden;
        position: relative;
    }

    /* Ghi đè lại cái position: absolute mà bạn đã viết trong HTML */
    .row .w-50 {
        position: static !important; /* Hủy bỏ absolute để nó xếp hàng ngang chuẩn */
        width: 50% !important;
        padding: 0 !important;
    }

    /* 5. STYLE BOX THÔNG TIN (Bên phải) */
    /* Target vào cái div có màu nền cũ #033a56 */
    div[style*="background: #033a56"] {
        background:
         linear-gradient(135deg, #1e1e1e 0%, #2a2a2a 100%) !important;
        height: 100% !important; /* Đảm bảo cao bằng map */
        padding: 40px !important;
        margin-left: 0 !important;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    div[style*="background: #033a56"] h3 {
        margin-bottom: 0px !important;
        margin-left: 0 !important;
    }

    div[style*="background: #033a56"] p {
        line-height: 1.8;
        font-size: 1.05rem;
        margin-left: 0 !important;
    }

    /* 6. STYLE BẢN ĐỒ (Bên trái) */
    iframe {
        width: 100% !important;
        height: 100% !important;
        border: none !important;
        filter: grayscale(0.5) contrast(1.2); /* Làm bản đồ trông hơi nghệ thuật một chút */
        transition: 0.5s;
    }

    iframe:hover {
        filter: grayscale(0);
    }

    /* 7. RESPONSIVE (Cho điện thoại) */
    @media (max-width: 768px) {
        .row .w-50 {
            width: 100% !important;
        }
        div[style*="background: #033a56"] {
            height: auto !important;
        }
        iframe {
            height: 300px !important;
        }
    }
</style>




<div class="container-fluid" style="padding: 0 100px; margin-top: 40px;">
  <div class="row contact-section">
  <div class='w-50' style="color: white;position: absolute; right: 0px">
    <div style="height: 480px;margin-left: 0px;background: #033a56">
   <h3 style="font-weight: bold ;margin-left: 20px;">Shale Store Location</h3>
   <p style="margin:20px 0px 0px 20px">
    To order Pizza, please to contact with phone number: 024.36.888.777<br>
    To feedback quality of service, plesea to contact with phone number: 0989.139.565<br>
    Email: shalepizza@gmail.com</p><br>
    <h3 style="font-weight: bold;margin-left: 20px">Shale Pizza Store System
    </h3>
    <p  style="margin:20px 0px 0px 20px">
      1. Shale Pizza Ngoc Khanh 107 D3 Ngoc Khanh, Ba Đinh<br>
      2. Shale Pizza Nguyen Trai 4 Ngo 332 Nguyen Trai, Thanh Xuan<br>
      3. Shale Pizza My Đinh 6 Đong Bat, Cau Giay<br>
      4. Pizza Express Hoang Mai 52 Kim Đong, Hoang Mai<br>
    </p>
   </div>
  </div>
   <div class='w-50'>
      <iframe src="https://www.google.com/maps/d/embed?mid=14891zw5gSgD0RmeehrFN_DuDRL6pXPXo" width="640" height="480"></iframe>
     </div>
  </div>
  </div>
@stop
