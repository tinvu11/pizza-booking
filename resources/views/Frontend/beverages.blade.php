@extends('master')
@section('main')
@include('Frontend.partials.menu_carousel', ['carouselTitle' => 'BEST BEVERAGES 2026'])

@include('Frontend.partials.menu_nav', ['active' => 'beverages'])
  <br>
            <div class="clearfix">

              <div class="container">
               <div class="row">
                 @foreach($menuBeverage as $select_beverages)
                 <div class="col-sm-4 h-75">
                   <div class="panel text-center" id="item" style="color: white;">
                        <img class="img-round" style="width: 100%; height: 233px" src="{{asset('product/'.$select_beverages->prd_img)}}" >
                          
                        <div class="panel-body_0">  
                        <div class="panel-body">
                          <h3 style="height: 65px">{{$select_beverages->dish_name}}</h3>
                          <p style="height: 65px">{{$select_beverages->customer_reviews}}</p>
                          <strong style="font-size: 25px">{{$select_beverages->price}}$</strong>
                          </div>
                       <div class="panel-footer">
                       <a href="{{route('cart.add', $select_beverages->id)}}" id="addcart" class="btn btn-primary"><img src="css/cart.png" style="width: 20px">&ensp;ADD TO CART</a>
                       </div>
                       </div>
                   </div>
                 </div>
                 @endforeach

             
              </div><br><br><br>

            </div>
            </div><br><br><br>
            
@stop
