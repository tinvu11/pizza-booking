@extends('master')
@section('main')
<style>
/* Làm tối hình ảnh trong slider */
.carousel-item img {
    height: 320px !important; /* Bạn có thể điều chỉnh chiều cao tùy ý */
    object-fit: cover;
    filter: brightness(60%); /* Làm tối ảnh 40%, giúp chữ trắng nổi bật hơn */
    transition: 0.5s;
}

/* Container chứa tiêu đề căn giữa slider */
.carousel-overlay {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 10;
    width: 100%;
    text-align: center;
    pointer-events: none; /* Để không cản trở việc click vào các nút slide */
}

.carousel-overlay h2 {
    font-family: 'Oswald', sans-serif; /* Hoặc font bạn đang dùng */
    font-size: 2.5rem;
    font-weight: 800;
    color: white;
    text-transform: uppercase;
    letter-spacing: 3px;
    text-shadow: 2px 2px 10px rgba(0,0,0,0.5); /* Đổ bóng nhẹ cho chữ cực kỳ chuyên nghiệp */
    margin: 0;
}

/* Responsive cho điện thoại */
@media (max-width: 768px) {
    .carousel-overlay h2 {
        font-size: 1.8rem;
    }
    .carousel-item img {
        height: 300px;
    }
}
</style>
@include('Frontend.partials.menu_carousel', ['carouselTitle' => 'BEST PIZZA SANDWICHES 2020'])

@include('Frontend.partials.menu_nav', ['active' => 'pizzasandwiches'])<br>

             <div class="clearfix">
              <!-- <h2 style="text-align: center; color: white; font-weight: bold;margin-top: 25px">BEST PIZZA SANDWICHES 2020</h2> -->

              <div class="container" style="margin-top: 25px">
               <div class="row">
                 @foreach($menuSandwiches as $select_sandwiches)
                 <div class="col-sm-4 h-75">
                   <div class="panel text-center" id="item" style="color: white;">
                        <img class="img-round" style="width: 100%; height: 233px" src="{{asset('product/'.$select_sandwiches->prd_img)}}" >
                        <div class="panel-body_0">  
                        <div class="panel-body">
                            <h3 style="height: 65px">{{$select_sandwiches->dish_name}}</h3>
                            <p style="height: 65px">{{$select_sandwiches->customer_reviews}}</p>
                            <strong style="font-size: 25px">{{$select_sandwiches->price}}$</strong>
                          </div>
                       <div class="panel-footer">
                            <a href="{{route('cart.add', $select_sandwiches->id)}}" id="addcart" class="btn btn-primary"><img src="css/cart.png" style="width: 20px">&ensp;ADD TO CART</a>
                       </div>
                   </div></div>
                 </div>
                 @endforeach

                
              </div><br><br><br>
            </div>
            </div>
@stop
