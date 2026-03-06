@extends('master')




<style>
    :root {
        --primary-color: #2ecc71;
        --secondary-color: #e74c3c;
        --dark-bg: #f8f9fa;
    }

    body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }

    /* Carousel mượt hơn */
    .carousel-item img {
        border-radius: 15px;
        object-fit: cover;
        height: 00px;
    }

    /* Tiêu đề Jumbotron */
    .jumbotron-cart {
        background: linear-gradient(135deg, #3498db, #8e44ad);
        color: white;
        padding: 2rem 1rem;
        border-radius: 15px;
        /* margin-top: 20px; */
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    /* Card Giỏ hàng */
    .cart-wrapper {
        background: white;
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    }

    .table thead th {
        border-top: none;
        color: #95a5a6;
        text-transform: uppercase;
        font-size: 0.85rem;
        letter-spacing: 1px;
    }

    .table td { vertical-align: middle !important; color: #2c3e50; }

    .product-img {
        border-radius: 10px;
        transition: transform 0.3s;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .product-img:hover { transform: scale(1.1); }

    /* Input số lượng */
    .qty-input {
        width: 80px;
        border-radius: 20px;
        text-align: center;
        border: 1px solid #ddd;
    }

    /* Nút bấm */
    .btn-action {
        border-radius: 50px;
        padding: 8px 20px;
        font-weight: 600;
        transition: all 0.3s;
    }

    .btn-update { background-color: #3498db; color: white; border: none; }
    .btn-update:hover { background-color: #2980b9; transform: translateY(-2px); }

    .total-section {
        background: #fdfdfd;
        border-top: 2px solid #eee;
        padding-top: 20px;
    }

    .total-price { color: #e74c3c; font-size: 1.5rem; font-weight: bold; }
</style>
@section('main')


<section class="jumbotron text-center" style="background-color: transparent; padding-top: 50px; padding-bottom: 0px;">
    <div class="container">
        <h1 class="jumbotron-heading" id="E_COMMERCE" style="color: white; font-weight: bold;">E-COMMERCE CART</h1>
     </div>
</section>

<div class="container mb-4" style="padding-top: 0px; padding-bottom: 130px;">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table-striped table" style="color: white">
                    <thead>
                        <tr>
                            <th scope="col">Product Image</th>
                            <th scope="col">Product Name</th>
                            <th scope="col" class="text-center">Quantity</th>
                            <th scope="col" class="text-right">Price</th>
                            <th scope="col" class="text-center">Delete</th>
                            <th scope="col" class="text-center">Reload</th>
                        </tr>
                    </thead>
                    <tbody>                        
                        @if($message = Session::get('quantityInvalid'))
                                    <div class='alert alert-danger'>
                                        <p>{{$message}}</p>
                                    </div>
                        @endif
                        @foreach($cartCollection as $item)                    
                      <form method="POST" action="{{route('cart.update', $item->id)}}">
                      @csrf
                            <tr>
                                <td><img src="{{asset('product/'.$item->attributes->img)}}" width="50px" height="50px"/></td>
                                <td>{{$item->name}}</td>
                                <td><input class="form-control" type="number" name="updateQuantityProduct" value="{{$item->quantity}}"/></td>
                                <td class="text-right">${{number_format($item->price*$item->quantity, 2)}}</td>
                                <td class="text-center"><a href="{{route('cart.delete', $item->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a> </td>
                                <td class="text-center"><button type='submit' class="btn btn-sm btn-primary"><i class="fa fa-refresh"></i></button></td>
                            </tr>   
                        </form> 
                      @endforeach
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><a>Delete All</a></td>
                            <td class="text-right"><a href="{{route('cart.delete', 'all')}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Total Quantity</td>
                            <td class="text-right"><strong>{{$cartTotalQuantity}}</strong></td>
                        </tr>
                        <!-- <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Shipping</td>
                            <td class="text-right">6,90 €</td>
                        </tr> -->
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Total Price</td>
                            <td class="text-right"><strong>{{$total}}</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <a href="{{route('menu')}}" id="continue_shopping" class="btn btn-lg btn-block btn-danger text-uppercase" style="color: white; list-style: none; text-decoration:none;">Continue Shopping</a>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                @if($cartTotalQuantity>0)
                    <a href="{{route('pay')}}" class="btn btn-lg btn-block btn-success text-uppercase">Checkout</a>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@stop
