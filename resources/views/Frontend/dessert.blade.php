@extends('master')
@section('main')
@include('Frontend.partials.menu_carousel', ['carouselTitle' => 'BEST DESSERT 2026'])

@include('Frontend.partials.menu_nav', ['active' => 'dessert'])<br>

            <div class="clearfix">


              <div class="container">
               
              <div class="row">
                 @foreach($menuDessert as $select_dessert)
                 <div class="col-sm-4 h-75">
                   <div class="panel text-center" id="item" style="color: white">
                        <img class="img-round" style="width: 100%; height: 233px" src="{{asset('product/'.$select_dessert->prd_img)}}" >
                        <div class="panel-body_0">  
                        <div class="panel-body">
                          <h3 style="height: 65px">{{$select_dessert->dish_name}}</h3>
                          <p style="height: 65px">{{$select_dessert->customer_reviews}}</p>
                          <strong style="font-size: 25px">{{$select_dessert->price}}$</strong>
                          </div>
                       <div class="panel-footer">
                       <a href="{{route('cart.add', $select_dessert->id)}}" id="addcart" class="btn btn-primary"><img src="css/cart.png" style="width: 20px">&ensp;ADD TO CART</a>
                       </div>
                   </div>
                   </div>
                 </div>
                 @endforeach

              </div>
            </div>
            </div><br><br><br>
          </div>
@stop
