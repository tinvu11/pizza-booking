@extends('master')
@section('main')
<!-- <h2 style="color: white; text-align: center;font-weight: bold; font-size: 35px">Shale-PIZZAAsss</h2>
<br> -->

<h2 style="color: white; text-align: center;font-weight: bold; font-size: 35px; padding-top: 0px">CHECK OUT</h2>





@if(Auth::check())
<div class="container">
    <div class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-profile">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">ORDER DETAIL</h4>
                    </div>
                    <div class="card-body">
                        <h6 class="card-category text-gray"></h6>
                        <div class="side-cart">
                            <div class="side-cart-title">
                                <a href="#cart" style="text-decoration: none">
                                    <h3>Cart</h3>
                                </a>
                                @foreach($cartContent as $select_cart)
                                <p><img src="{{asset('product/'.$select_cart->attributes->img)}}" alt="pizza"
                                        width="90px" height="90px"></p>
                                <p>{{$select_cart->name}}</p>
                                @endforeach
                            </div>
                            <strong>ID ORDER: {{$IDORDER}}</strong>
                            <div class="cart-checkout-mobile">
                                <div class="cart_icon">
                                    <span class="fas fa-shopping-bag"></span>
                                    <span class="amount">{{$cartTotalQuantity}}</span>
                                </div>
                                <div class="total-container">
                                    <div class="total-wrap">
                                        <div class="total-text">
                                            <p>Total:</p>
                                            <strong>{{$totalPrice}} $</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Thông Tin Thanh Toán</h4>
                    </div>
                    <div class="card-body">

                        <p>Please select your check out:</p>

                        <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <img src="images/momo.png" height="40px">
                        <i> Thanh toán qua Momo</i><br><br>

                        <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option2">
                        <img src="images/Vtcpay.png" height="40px">
                        <i> Thanh toán qua VtcPay</i><br><br>

                        <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option3">
                        <img src="images/Atm.png" height="40px">
                        <i> Thanh toán qua thẻ nội địa</i><br><br>
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <form action="{{route('cart.checkPay', Auth::User()->id)}}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Nhập số tiền bạn muốn thanh
                                                            toán</label>
                                                        <input type="number" class="form-control" name='txtCheck1'
                                                            value="{{$totalPrice}}">
                                                    </div>
                                                </div>
                                            </div>

                                            <h5><button type='submit' class="btn btn-primary">CHECK OUT</button></h5>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <form action="{{route('cart.checkPay', Auth::User()->id)}}" method="POST">
                                @csrf
                                <div class="panel panel-default">
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                        aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Nhập số tiền bạn muốn thanh
                                                            toán</label>
                                                        <input type="number" class="form-control" name='txtCheck2'
                                                            value="{{$totalPrice}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <h5><button type='submit' class="btn btn-primary">CHECK OUT</button></h5>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="panel panel-default">
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <form method='POST'
                                                        action="{{route('cart.checkPay', Auth::User()->id)}}">
                                                        @csrf
                                                        <label class="bmd-label-floating">Chọn ngân hàng bạn muốn thanh
                                                            toán</label><br>
                                                        <input type="radio" value="acbbank"><img
                                                            src="images/acbbank.png"> Ngân hàng ACB <br>
                                                        <input type="radio" value="mbbank"><img src="images/mbbank.png">
                                                        Ngân hàng quân đội<br>
                                                        <input type="radio" value="techcombank"><img
                                                            src="images/techcombank.png"> Ngân hàng TMCP Kỹ thương Việt
                                                        Nam<br>
                                                        <input type="radio" value="tienphongbank"><img
                                                            src="images/tienphongbank.png"> Ngân hàng Thương mại Cổ phần
                                                        Tiên Phong<br>
                                                        <input type="radio" value="vibbank"><img
                                                            src="images/vibbank.png"> Ngân hàng Quốc Tế <br>
                                                        <input type="radio" value="vietcombank"><img
                                                            src="images/vietcombank.png"> Ngân hàng thương mại cổ phần
                                                        Ngoại thương Việt Nam<br>
                                                        <input type="radio" value="vpbank"><img src="images/vpbank.png">
                                                        Ngân hàng TMCP Việt Nam Thịnh Vượng<br>

                                                        <label class="bmd-label-floating">Nhập số tiền bạn muốn thanh
                                                            toán</label>
                                                        <input type="number" class="form-control" name='txtCheck3'
                                                            value="{{$totalPrice}}">
                                                </div>
                                            </div>
                                        </div>
                                        <h5><button type='submit' class="btn btn-primary">CHECK OUT</button></h5>
                                    </div>
                                    </form>
                                </div>
                            </div>
                            @if($message = Session::get('fail'))
                            <div class="alert alert-danger">{{$message}}</div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div><br><br>
    @else
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-danger" role="alert">You must Login to use this function</div>
            </div>
        </div>
    </div>
    @endif
    @stop