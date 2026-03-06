@extends('master')
@section('main')
@include('Frontend.partials.menu_carousel', ['carouselTitle' => 'BEST GARLIC BREADS 2020'])

@include('Frontend.partials.menu_nav', ['active' => 'galicbreads'])<br>

            <div class="clearfix">


              <div class="container">
              
               <div class="row">
    @foreach($menuBread as $select_bread)
    <div class="col-md-4 col-sm-6"> <div class="panel text-center" id="item">
            <img class="img-round" src="{{asset('product/'.$select_bread->prd_img)}}" alt="{{$select_bread->dish_name}}">
            
            <div class="panel-body_0">
                <div class="panel-body">
                    <h3>{{$select_bread->dish_name}}</h3>
                    <p>{{$select_bread->customer_reviews}}</p>
                    <strong>${{number_format($select_bread->price, 2)}}</strong>
                </div>

                <div class="panel-footer">
                    <a href="{{route('cart.add', $select_bread->id)}}" id="addcart" class="btn btn-primary">
                        ADD TO CART
                    </a>
                </div>
            </div> </div>
    </div>
    @endforeach
</div>


              </div>
            </div>
          </div><br><br><br><br>
          </div>
@stop
