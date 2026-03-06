@extends('master')

@section('main')
@include('Frontend.partials.menu_carousel', ['carouselTitle' => 'WELCOME TO OUR MENU'])
<style>
    /* Custom CSS để nâng cấp giao diện */
    .menu-section {
        /* background-color: #1a1a1a; Nền tối sang trọng */
        padding: 60px 0;
        color: white;
    }

    .menu-title {
        font-family: 'Oswald', sans-serif;
        font-size: 3rem;
        letter-spacing: 5px;
        margin-bottom: 50px;
        text-transform: uppercase;
    }

    .menu-item {
        margin-bottom: 80px; /* Khoảng cách giữa các hàng */
        transition: all 0.4s ease;
    }

    .menu-image-container {
        overflow: hidden;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.5);
    }

    .menu-image-container img {
        width: 100%;
        transition: transform 0.5s ease;
        display: block;
    }

    .menu-item:hover .menu-image-container img {
        transform: scale(1.1);
    }

    .menu-text {
        padding: 40px;
    }

    .category-name {
        font-size: 2rem;
        font-weight: bold;
        margin-bottom: 20px;
        color: #ffc107; /* Màu vàng điểm nhấn */
    }

    .btn-custom {
        background: linear-gradient(45deg, #ff416c, #ff4b2b);
        border: none;
        padding: 12px 30px;
        border-radius: 30px;
        color: white;
        font-weight: bold;
        text-transform: uppercase;
        transition: 0.3s;
    }

    .btn-custom:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(255, 75, 43, 0.4);
        color: white;
    }

    /* Đảm bảo carousel không bị tràn */
    .carousel-item img {
        height: 500px;
        object-fit: cover;
    }
</style>



<div class="menu-section">
    <div class="container">

        <div class="row menu-item align-items-center">
            <div class="col-md-6">
                <div class="menu-image-container">
                    <img src="img-trangchu/P5.jpg" alt="Pizza">
                </div>
            </div>
            <div class="menu-pizzapage col-md-6 menu-text">
                <h2 class="category-name">PREMIUM PIZZA</h2>
                <p>Khám phá hương vị Pizza Ý truyền thống với lớp vỏ giòn tan và nhân phủ đầy đặn.</p>
                <div class="menu-pizzapage">
                <a href="{{route('pizza')}}" class="btn btn-custom">XEM THỰC ĐƠN</a>

</div>
            </div>
        </div>

        <div class="row menu-item align-items-center flex-md-row-reverse">
            <div class="col-md-6">
                <div class="menu-image-container">
                    <img src="img-dessert/1.jpg" alt="Desserts">
                </div>
            </div>
            <div class="col-md-6 menu-text text-md-right">
                <h2 class="category-name">SWEET DESSERTS</h2>
                <p>Những món tráng miệng ngọt ngào, mát lạnh cho bữa ăn thêm trọn vẹn.</p>
                <a href="{{route('dessert')}}" class="btn btn-custom">XEM THỰC ĐƠN</a>
            </div>
        </div>

        <div class="row menu-item align-items-center">
            <div class="col-md-6">
                <div class="menu-image-container">
                    <img src="garlicbreads/3.jpg" alt="Garlic Breads">
                </div>
            </div>
            <div class="col-md-6 menu-text">
                <h2 class="category-name bread-menu">GARLIC BREADS</h2>
                <p>Bánh mì tỏi thơm lừng, giòn rụm - món khai vị không thể bỏ qua.</p>
                <a href="{{route('galicbreads')}}" class="btn btn-custom">XEM THỰC ĐƠN</a>
            </div>
        </div>

        <div class="row menu-item align-items-center flex-md-row-reverse">
            <div class="col-md-6">
                <div class="menu-image-container">
                    <img src="sanwitches/1.jpg" alt="Sandwiches">
                </div>
            </div>
            <div class="col-md-6 menu-text text-md-right">
                <h2 class="category-name">PIZZA SANDWICHES</h2>
                <p>Sự kết hợp độc đáo giữa Pizza và Sandwich, tiện lợi và đầy năng lượng.</p>
                <a href="{{route('pizzasandwiches')}}" class="btn btn-custom">XEM THỰC ĐƠN</a>
            </div>
        </div>

        <div class="row menu-item align-items-center">
            <div class="col-md-6">
                <div class="menu-image-container">
                    <img src="img-douong/1.jpg" alt="Beverages">
                </div>
            </div>
            <div class="col-md-6 menu-text">
                <h2 class="category-name">REFRESHING DRINKS</h2>
                <p>Giải nhiệt tức thì với danh mục đồ uống phong phú và tươi mới.</p>
                <a href="{{route('beverages')}}" class="btn btn-custom">XEM THỰC ĐƠN</a>
            </div>
        </div>

    </div>
</div>
@stop