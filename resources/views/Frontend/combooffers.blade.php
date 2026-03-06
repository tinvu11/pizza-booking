@extends('master')
@section('main')
@include('Frontend.partials.menu_carousel', ['carouselTitle' => 'COMBO OFFERS'])
<style>
    /* 1. Typography & Colors */
    @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@600;700&family=Montserrat:wght@400;500;700&display=swap');

    :root {
        --primary-gold: #ffc107;
        --accent-red: #dc3545;
        --dark-card: #1e1e1e;
        --text-light: #f8f9fa;
    }

    body {
        background-color: #121212;
        color: var(--text-light);
        font-family: 'Montserrat', sans-serif;
    }

    /* 2. Page Header */
    .page-title {
        font-family: 'Oswald', sans-serif;
        font-size: 3.5rem;
        color: var(--primary-gold);
        letter-spacing: 3px;
        margin: 50px 0;
        text-transform: uppercase;
    }

    /* 3. Horizontal Combo Cards */
    .combo-row {
        background-color: var(--dark-card);
        border-radius: 15px;
        margin-bottom: 40px;
        overflow: hidden;
        border: 1px solid #333;
        transition: transform 0.3s, box-shadow 0.3s;
        box-shadow: 0 10px 20px rgba(0,0,0,0.3);
    }

    .combo-row:hover {
        /* transform: translateY(-5px); */
        /* box-shadow: 0 15px 30px rgba(0,0,0,0.5); */
        /* border-color: var(--primary-gold); */
    }

    .combo-img-container {
        padding: 0;
        overflow: hidden;
        background: #000;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .combo-img-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s;
    }

    .combo-row:hover .combo-img-container img {
        /* transform: scale(1.05); */
    }

    /* 4. Combo Content */
    .combo-body {
        padding: 40px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .combo-body h4 {
        font-family: 'Oswald', sans-serif;
        font-size: 1.8rem;
        color: var(--primary-gold);
        text-transform: uppercase;
        margin-bottom: 20px;
    }

    .combo-details {
        font-size: 0.95rem;
        line-height: 1.8;
        color: #ccc;
        margin-bottom: 25px;
        list-style: none;
        padding: 0;
    }

    .combo-details li {
        margin-bottom: 8px;
        position: relative;
        padding-left: 20px;
    }

    .combo-details li::before {
        content: "✔";
        position: absolute;
        left: 0;
        color: var(--primary-gold);
    }

    /* 5. Buttons */
    .btn-group-custom {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .btn-pizza-order {
        background-color: var(--accent-red);
        border: none;
        color: white;
        font-weight: 700;
        padding: 12px 25px;
        border-radius: 5px;
        text-transform: uppercase;
        transition: 0.3s;
        font-size: 0.85rem;
    }

    .btn-pizza-order:hover {
        background-color: #b02a37;
        transform: scale(1.05);
        color: white;
    }

    /* Slider Fix */
    .carousel-item img {
        height: 480px;
        object-fit: cover;
    }
</style>

<!--  -->

<div class="container pb-5" style="margin-top: 50px;">
    <!-- <h1 class="text-center page-title">Combo Offers</h1> -->

    <div class="row combo-row">
        <div class="col-lg-5 combo-img-container">
            <img src="img-combo/1.jpg" alt="Combo 1">
        </div>
        <div class="col-lg-7 combo-body">
            <h4>Buy 1 Get 1 - Saturday & Sunday</h4>
            <ul class="combo-details">
                <li>Buy 1 Pizza (Medium/Large) + Drink, get 1 free same-size Pizza.</li>
                <li>Free delivery for bills from $10.</li>
                <li>Applied for Website and Call Center orders only.</li>
            </ul>
            <div class="btn-group-custom">
                <button type="button" class="btn-pizza-order">Order Medium Size</button>
                <button type="button" class="btn-pizza-order">Order Large Size</button>
            </div>
        </div>
    </div>

    <div class="row combo-row">
        <div class="col-lg-5 combo-img-container">
            <img src="img-combo/2.jpg" alt="Combo 2">
        </div>
        <div class="col-lg-7 combo-body">
            <h4>Same Price for Favorite & Premium</h4>
            <ul class="combo-details">
                <li>9" Pizza: $7 (Favorite) | Add $1 for Premium.</li>
                <li>12" Pizza: $9 (Favorite) | Add $1 for Premium.</li>
                <li>Applies when buying 02 pizzas simultaneously.</li>
                <li>Free shipping within 30 minutes.</li>
            </ul>
            <div class="btn-group-custom">
                <button type="button" class="btn-pizza-order 9 Pizza">Order 9" Size</button>
                <button type="button" class="btn-pizza-order">Order 12" Size</button>
            </div>
        </div>
    </div>

    <div class="row combo-row">
        <div class="col-lg-5 combo-img-container">
            <img src="img-combo/3.jpg" alt="Combo 3">
        </div>
        <div class="col-lg-7 combo-body">
            <h4>50% Off Menu-Priced Pizzas</h4>
            <ul class="combo-details">
                <li>Promo code: <strong class="text-white">MARCHLOCALFLASHSALE</strong></li>
                <li>Order Online Only for Carry Out or Delivery.</li>
                <li>Valid for a limited time or while supplies last.</li>
            </ul>
            <div class="btn-group-custom">
                <button type="button" class="btn-pizza-order">Combo $8</button>
                <button type="button" class="btn-pizza-order">Combo $10</button>
                <button type="button" class="btn-pizza-order">Combo $12</button>
                <button type="button" class="btn-pizza-order">Combo $15</button>
            </div>
        </div>
    </div>

    <div class="row combo-row">
        <div class="col-lg-5 combo-img-container">
            <img src="img-combo/4.jpg" alt="Combo 4">
        </div>
        <div class="col-lg-7 combo-body">
            <h4>Free Pizzas Monthly</h4>
            <ul class="combo-details">
                <li>Join the Shale-PIZZAAsss Pizza Book It Program.</li>
                <li>Register on our site to receive monthly rewards.</li>
                <li>Exclusive offer for online members.</li>
            </ul>
            <div class="btn-group-custom">
                <button type="button" class="btn-pizza-order">Register & Order</button>
            </div>
        </div>
    </div>

</div>
@stop

