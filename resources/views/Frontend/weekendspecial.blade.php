@extends('master')

@section('main')
<style>
    /* PHÔNG CHỮ & MÀU SẮC CHUẨN PIZZERIA */
    @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@500;700&family=Montserrat:wght@400;700&display=swap');

    :root {
        --pizza-gold: #ffc107;
        --dark-surface: #1a1a1a;
        --card-bg: #242424;
    }

    body {
        background-color: #121212;
        color: #eee;
        font-family: 'Montserrat', sans-serif;
    }

    /* FIX CHIỀU CAO SLIDER */
    .carousel-item img {
        height: 480px;
        object-fit: cover;
    }

    /* TIÊU ĐỀ SECTION */
    .weekend-title {
        font-family: 'Oswald', sans-serif;
        font-size: 3rem;
        color: var(--pizza-gold);
        text-transform: uppercase;
        letter-spacing: 2px;
        margin: 50px 0;
        text-align: center;
    }

    /* CARD KHUYẾN MÃI - PHONG CÁCH FLAT HIỆN ĐẠI */
    .promo-card {
        background-color: var(--card-bg);
        border: 1px solid #333;
        border-radius: 12px;
        overflow: hidden;
        height: 100%;
        transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        display: flex;
        flex-direction: column;
    }

    .promo-card:hover {
        transform: translateY(-8px);
        /* border-color: var(--pizza-gold); */
        box-shadow: 0 14px 28px rgba(0,0,0,0.4);
    }

    .promo-img-box {
        position: relative;
        overflow: hidden;
        height: 200px;
    }

    .promo-img-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }

    .promo-card:hover .promo-img-box img {
        transform: scale(1.1);
    }

    .promo-content {
        padding: 25px;
        flex-grow: 1;
    }

    .promo-content h5 {
        font-family: 'Oswald', sans-serif;
        font-size: 1.3rem;
        color: white;
        margin-bottom: 15px;
        line-height: 1.4;
        min-height: 3.6rem; /* Giữ các tiêu đề bằng nhau */
    }

    .promo-details {
        font-size: 0.9rem;
        color: #aaa;
        line-height: 1.6;
        margin-bottom: 20px;
        /* border-left: 2px solid var(--pizza-gold); */
        padding-left: 15px;
    }

    .btn-promo {
        background-color: var(--pizza-gold);
        color: #000;
        font-weight: 700;
        text-transform: uppercase;
        border: none;
        padding: 12px;
        width: 100%;
        border-radius: 6px;
        transition: 0.2s;
    }

    .btn-promo:hover {
        background-color: #e0a800;
        color: #000;
        text-decoration: none;
    }
</style>

<div class="container-fluid px-0">
    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-1z" data-slide-to="1"></li>
            <li data-target="#carousel-example-1z" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img-menu1/C1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img-menu1/C2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img-menu1/C3.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="container">
    <h2 class="weekend-title">Weekend Special</h2>

    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="promo-card">
                <div class="promo-img-box"><img src="weekendspecial/1.jpg"></div>
                <div class="promo-content">
                    <h5>SAME PRICE FOR FAVORITE & PREMIUM</h5>
                    <div class="promo-details">
                        • Price: 8$ / pizza 9" (Favorite)<br>
                        • Price: 10$ / pizza 12" (Favorite)<br>
                        • Apply for simultaneous purchase of 02 pizzas
                    </div>
                    <!-- <a href="#" class="btn-promo text-center d-block">Claim Offer</a> -->
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="promo-card">
                <div class="promo-img-box"><img src="weekendspecial/2.jpg"></div>
                <div class="promo-content">
                    <h5>BUY 1 GET 1 - SAT & SUN</h5>
                    <div class="promo-details">
                        • Get 1 free same-size Pizza with Drink purchase<br>
                        • Valid every Saturday & Sunday<br>
                        • Web & Call Center only
                    </div>
                    <!-- <a href="#" class="btn-promo text-center d-block">Claim Offer</a> -->
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="promo-card">
                <div class="promo-img-box"><img src="weekendspecial/3.jpg"></div>
                <div class="promo-content">
                    <h5>50% OFF FOR 2ND PIZZA</h5>
                    <div class="promo-details">
                        • Apply for 9" / 12" pizzas all week<br>
                        • Discount on lower price pizza<br>
                        • Free shipping for orders from 8$
                    </div>
                    <!-- <a href="#" class="btn-promo text-center d-block">Claim Offer</a> -->
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="promo-card">
                <div class="promo-img-box"><img src="weekendspecial/4.jpg"></div>
                <div class="promo-content">
                    <h5>HOME MEAL DEALS</h5>
                    <div class="promo-details">
                        • Combo 10$: 1 Pizza 9" + 1 Side<br>
                        • Combo 12$: 1 Pizza 9" Premium + 1 Side<br>
                        • Combo 15$: 1 Pizza 12" + 2 Sides
                    </div>
                    <!-- <a href="#" class="btn-promo text-center d-block">Claim Offer</a> -->
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="promo-card">
                <div class="promo-img-box"><img src="weekendspecial/5.jpg"></div>
                <div class="promo-content">
                    <h5>50% OFF EVERY MONDAY</h5>
                    <div class="promo-details">
                        • Buy 1 Get 1 Free (9" or 12") + Drink<br>
                        • Free delivery from 15$<br>
                        • Special Monday treat
                    </div>
                    <!-- <a href="#" class="btn-promo text-center d-block">Claim Offer</a> -->
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="promo-card">
                <div class="promo-img-box"><img src="weekendspecial/6.jpg"></div>
                <div class="promo-content">
                    <h5>KIDDY YUMMY MEALS</h5>
                    <div class="promo-details">
                        • Combo 6$: 7" Pizza + Drink + Pencil<br>
                        • Combo 7$: Sausage + Potato + Drink + Pencil<br>
                        • Perfect for the little ones
                    </div>
                    <!-- <a href="#" class="btn-promo text-center d-block">Claim Offer</a> -->
                </div>
            </div>
        </div>
    </div>
</div>

<br><br>
@stop