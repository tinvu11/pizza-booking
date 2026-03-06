@extends('master')
@section('main')
        <!-- Carousel -->
        <div id="slides" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#slides" data-slide-to="0" class="active"></li>
                <li data-target="#slides" data-slide-to="1"></li>
                <li data-target="#slides" data-slide-to="2"></li>
                <li data-target="#slides" data-slide-to="3"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <iframe height="700" width="100%" src="https://www.youtube.com/embed/YQAkMgAFWWg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="carousel-caption">
                        <h1 class="display-2">You enjoy. We care!</h1>
                        <h3>One of the best pizza 2020!!!</h3>
                        <button type="button" class="btn btn-outline-light btn-lg"><a href="menudownload/3.jpg">Our menu</a></button>
                        <button type="button" class="btn btn-primary btn-lg">Order now</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="image/p11.png" height="700">
                    <div class="carousel-caption">
                        <h1 class="display-2">You enjoy. We care!</h1>
                        <h3>One of the best pizza 2020!!!</h3>
                        <button type="button" class="btn btn-outline-light btn-lg"><a href="menudownload/3.jpg">Our menu</a></button>
                        <button type="button" class="btn btn-primary btn-lg">Order now</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="image/p12.png" height="700">
                    <div class="carousel-caption">
                        <h1 class="display-2">You enjoy. We care!</h1>
                        <h3>One of the best pizza 2020!!!</h3>
                        <button type="button" class="btn btn-outline-light btn-lg"><a href="menudownload/3.jpg">Our menu</a></button>
                        <button type="button" class="btn btn-primary btn-lg">Order now</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="image/p15.png" height="700">
                    <div class="carousel-caption">
                        <h1 class="display-2">You enjoy. We care!</h1>
                        <h3>One of the best pizza 2020!!!</h3>
                        <button type="button" class="btn btn-outline-light btn-lg"><a href="menudownload/3.jpg">Our menu</a></button>
                        <button type="button" class="btn btn-primary btn-lg">Order now</button>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="container-fluid padding"style="color: white">
            <div class="row text-center">
                <div class="col-12">
                    <h1 class="display-4" style="font-size: 350%;">Our business principles</h1>
                </div>
                <div class="col-12" style="color: white">
                    <p style="font-size: 200%;">Welcome to ts3pizza. Your satisfaction is the most important here!!!!</p>
                </div>
            </div>
        </div>
        <!-- Horizontal Rule -->
        <hr>
        <div class="container-fluid padding" style="color: white">
            <div class="row text-center padding">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <i class="fas fa-handshake"></i>
                    <h3>Reputation</h3>
                    <p>Since 1995!!! We builded the first restaurant</p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <i class="fas fa-thumbs-up"></i>
                    <h3>Quality</h3>
                    <p>The best pizza 2017 from The Time magazine!</p>
                    <p>The best place for selfie from facebook vote at 2019!</p>
                    <p>And more and more prize!</p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <i class="fas fa-shield-alt"></i>
                    <h3>Healthy</h3>
                    <p> Our food made from the best materials at Ba Vì farm!!</p>
                </div>
            </div>
            <hr class=my-4"">
        </div>
        <div class="text-center" id='menuthucdon'>
        <ul>
                <li class="nav-item" id= "pizzaitem"><a class="nav-link active1" href="{{url('detailfraninfo')}}" target="_self" style="color: white">In detail</a></li>
                <li class="nav-item" id= "pizzaitem"><a class="nav-link" href="{{url('picfraninfo')}}" target="_self" style="color: white">Our picture</a></li>
                <li class="nav-item" id= "pizzaitem"><a class="nav-link" href="{{url('franinfo')}}" target="_self" style="color: white">Franchise info</a></li>
            </ul>
        </div><br>
        <div class="container"style="color: white">
            <h3 class="text-center">Building global, iconic brands people trust and champion</h3>
            <div class="row">
                <img src="./image/picturefranchies/a5.jpg" width="100%">
                <img src="./image/picturefranchies/a1.jpg" width="100%">
                <img src="./image/picturefranchies/a2.jpg" width="100%">
                <img src="./image/picturefranchies/a3.jpg" width="100%">
                <img src="./image/picturefranchies/a4.jpg" width="100%">
                <img src="./image/picturefranchies/a6.jpg" width="100%">
                <img src="./image/picturefranchies/a7.jpg" width="100%">
            </div>
        </div>
@stop
