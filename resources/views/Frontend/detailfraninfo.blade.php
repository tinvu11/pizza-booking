@extends('master')
@section('main')
              <button class=  "navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
                   <span class="navbar-toggler-icon"></span>
              </button>
          </nav>
         </div>
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
        <div class="container-fluid padding" style="color: white">
            <div class="row text-center">
                <div class="col-12">
                    <h1 class="display-4" style="font-size: 350%;">Our business principles</h1>
                </div>
                <div class="col-12">
                    <p style="font-size: 200%;">Welcome to ts3pizza. Your satisfaction is the most important here!!!!</p>
                </div>
            </div>
        </div>
        <!-- Horizontal Rule -->
        <hr>
        <div class="container-fluid padding"style="color: white">
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
            <hr class="my-4">
        </div>
        <div class="text-center" id='menuthucdon'style="color: white">
        <ul>
                <li class="nav-item" id= "pizzaitem"><a class="nav-link active1" href="{{route('detailfraninfo')}}" target="_self" style="color: white">In detail</a></li>
                <li class="nav-item" id= "pizzaitem"><a class="nav-link" href="{{route('picfraninfo')}}" target="_self" style="color: white">Our picture</a></li>
                <li class="nav-item" id= "pizzaitem"><a class="nav-link" href="{{route('franinfo')}}" target="_self" style="color: white">Franchise info</a></li>
            </ul>
        </div><br>
        <div class="container"style="color: white">
            <h3 class="text-center">Building global, iconic brands people trust and champion</h3>
            <div class="row">
                <img src="./image/p16.png" width="100%">
                <h4>Yum! Brands, Inc., based in Louisville, Kentucky, has over 50,000 restaurants in more than 150 countries and territories primarily operating the company’s restaurant brands – KFC, Pizza Hut and Taco Bell – global leaders of the chicken, pizza and Mexican-style food categories. The Company’s family of brands also includes The Habit Burger Grill, a fast-casual restaurant concept specializing in made-to-order chargrilled burgers, sandwiches and more. Worldwide, the Yum! Brands system opens over nine new restaurants per day on average, making it a leader in global retail development. In 2019, Yum! Brands was named to the Dow Jones Sustainability North America Index and ranked among the top 100 Best Corporate Citizens by Corporate Responsibility Magazine.</h4>
                <h4>Since our spin-off from PepsiCo in 1997, we’ve become a truly global company led by over 2,000 world-class franchisees. In 2016, we successfully spun off our China business as an independent, publicly traded company and announced our Recipe for Growth, our multi-year growth strategy to become more focused, more franchised and more efficient.</h4>
                <h4>Our Recipe for Growth strategy includes four growth drivers and is the foundation on which our sustainable, long-term results are built. These drivers will allow us to keep our promises to serve delicious food, make our food accessible to customers, give employees a place to grow and make a difference, offer opportunities for franchisees and deliver strong returns and long-term value. These growth capabilities are the key drivers of same-store sales and net-new unit growth and serve as our guiding principles in all business decisions.</h4>
                <img src="./image/p17.png" width="100%">
                <h4>As we build a world with more Yum!, we’re also sharpening our set of shared values and elevating our brands and business practices through our Recipe for Good, our global citizenship and sustainability strategy. This means listening to and engaging with stakeholders around our three priority areas of Food, Planet and People. We’re on a journey when it comes to our sustainability work and are proud of the progress we’re making on the priority issues that are most material to our business. See how our efforts are being recognized.</h4>
                <h4>We’re also extremely proud of the 1.5 million employees and franchise associates in our system around the globe and the unique culture we’ve built grounded on innovation, inclusion and growth. We believe in our people, trust in their positive intentions, encourage ideas from everyone and have actively developed a workforce that is diverse in style and background.</h4>
                <h4>There’s a world of opportunities for Yum!, and we’re confident in our brands’ continued journey ahead.</h4><br><br><br><br>
            </div>
        </div>
      </div>
@stop
