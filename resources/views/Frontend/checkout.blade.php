@extends('master')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script type="text/javascript">
     $(document).ready(function(){
      $('#checkout_1').click(function(){
            let firstName = $('input[name="txtFirstName"]').val();
            let lastName = $('input[name="txtLastName"]').val();
            let phone = $('input[name="nbrPhone1"]').val();
            let city = $('input[name="txtCity"]').val();
            let district = $('input[name="txtDistrict"]').val();
            let address = $('input[name="txtAddress"]').val();
            let f1 = true;
            $('#errorFirstName').text('');
            $('#errorLastName').text('');
            $('#errorPhoneNumber').text('');
            $('#errorCity').text('');
            $('#errorDistrict').text('');
            $('#errorAddress').text('');
            if(firstName == ""){
              $('#errorFirstName').text('Họ tên không được để trống');
              f1 = false;
            }
            if(lastName == ""){
              $('#errorLastName').text('Tên không được để trống');
              f1 = false;
            }
            if(!isPhone(phone)){
              $('#errorPhoneNumber').text('Định dạng số điện thoại là 10 số');
              f1 = false;
            }
            if(city == ""){
              $('#errorCity').text('Thông tin thành phố không được để trống');
              f1 = false;
            }
            if(district == ""){
              $('#errorDistrict').text('Thông tin quận không được để trống');
              f1 = false;
            }
            if(address == ""){
              $('#errorAddress').text('Thông tin địa chỉ chi tiết không được để trống');
              f1 = false;
            }
            return f1;
            if(f1==true){
              document.getElementById('form_checkout_1').submit();
            }
          });

          
      $('#checkout_2').click(function(){
            let firstName = $('input[name="FirstName"]').val();
            let lastName = $('input[name="LastName"]').val();
            let phone = $('input[name="Phone"]').val();
            let f1 = true;
            $('#storeLocationError').text('');
            $('#firstNameError').text('');
            $('#lastNameError').text('');
            $('#phoneNumberError').text('');
            if(firstName == ""){
              $('#firstNameError').text('Họ tên không được để trống');
              f1 = false;
            }
            if(lastName == ""){
              $('#lastNameError').text('Tên không được để trống');
              f1 = false;
            }
            if(!isPhone(phone)){
              $('#phoneNumberError').text('Định dạng số điện thoại là 10 số');
              f1 = false;
            }
            return f1;
            if(f1==true){
              document.getElementById('form_checkout_2').submit();
            }
          });


          function isPhone(_phone){
            var reg = /^\d{10}$/;
            return reg.test(_phone);
          }
     });
</script>
@section('main')
 <!-- <h2 style="color: white; text-align: center;font-weight: bold; font-size: 35px">Shale-PIZZAAsss</h2>
          <br> -->

<h2 style="color: white; text-align: center;font-weight: bold; font-size: 35px; padding-top: 50px">CHECK OUT</h2>
          <br>

    <div class="container">
      <div class="content">
          <div class="row">
            <div class="col-md-6" >
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Thông Tin Thanh Toán</h4>
                </div>
                <div class="card-body">


                  <p>Vui lòng chọn phương thức nhận hàng</p>

                  <label><input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">Giao hàng tận nơi</label><br>

                <label><input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">Nhận tại cửa hàng</label><br>

                @if($message = Session::get('falseOne'))
                  <div class='alert alert-danger'>
                    <p>{{$message}}</p>
                  </div>
                @endif
                @if(Auth::check())
                <form method="POST" action="{{route('cart.pay', Auth::User()->id)}}" id="form_checkout_1">
                @csrf
                <div class="panel-group" id="accordion">
                  <div class="panel panel-default">
                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Họ</label>
                                      <input type="text" class="form-control" name="txtFirstName">
                                      <span id="errorFirstName" style="color: red"></span>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Tên</label>
                                      <input type="text" class="form-control" name="txtLastName">
                                      <span id="errorLastName" style="color: red"></span>
                                    </div>
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Email</label>
                                      <input type="text" class="form-control" name="txtEmail">
                                      <span id="errorEmail" style="color: red"></span>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Số điện thoại</label>
                                      <input type="number" class="form-control" name="nbrPhone1">
                                      <span id="errorPhoneNumber" style="color: red"></span>
                                    </div>
                                  </div>
                                </div>


                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Thành phố</label>
                                      <input type="text" class="form-control" name="txtCity">
                                      <span id="errorCity" style="color: red"></span>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Quận</label>
                                      <input type="text" class="form-control" name="txtDistrict">
                                      <span id="errorDistrict" style="color: red"></span>
                                    </div>
                                  </div>
                                </div>


                               <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Địa chỉ chi tiết</label>
                                      <input type="text" class="form-control" name="txtAddress">
                                      <span id="errorAddress" style="color: red"></span>
                                    </div>
                                  </div>
                                </div>



                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label>Ghi chú</label>
                                      <div class="form-group">

                                        <textarea class="form-control" rows="5" name='txtCmt'></textarea>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <h5><button type='submit' class="btn btn-primary" id="checkout_1">THANH TOÁN</button></h5>
                                </form>
                                @else
                                <form method="POST" action="{{route('cart.pays')}}" id="form_checkout_1">
                                  @csrf
                                  <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                      <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                          <div class="panel-body">
                                                  <div class="row">
                                                    <div class="col-md-6">
                                                      <div class="form-group">
                                                        <label class="bmd-label-floating">Họ</label>
                                                        <input type="text" class="form-control" name="txtFirstName">
                                                        <span id="errorFirstName" style="color: red"></span>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <div class="form-group">
                                                        <label class="bmd-label-floating">Tên</label>
                                                        <input type="text" class="form-control" name="txtLastName">
                                                        <span id="errorLastName" style="color: red"></span>
                                                      </div>
                                                    </div>
                                                  </div>

                                                  <div class="row">
                                                    <div class="col-md-6">
                                                      <div class="form-group">
                                                        <label class="bmd-label-floating">Email</label>
                                                        <input type="text" class="form-control" name="txtEmail">
                                                      </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <div class="form-group">
                                                        <label class="bmd-label-floating">Số điện thoại</label>
                                                        <input type="text" class="form-control" name="nbrPhone1">
                                                        <span id="errorPhoneNumber" style="color: red"></span>
                                                      </div>
                                                    </div>
                                                  </div>


                                                  <div class="row">
                                                    <div class="col-md-6">
                                                      <div class="form-group">
                                                        <label class="bmd-label-floating">Thành phố</label>
                                                        <input type="text" class="form-control" name="txtCity">
                                                        <span id="errorCity" style="color: red"></span>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <div class="form-group">
                                                        <label class="bmd-label-floating">Quận</label>
                                                        <input type="text" class="form-control" name="txtDistrict">
                                                        <span id="errorDistrict" style="color: red"></span>
                                                      </div>
                                                    </div>
                                                  </div>


                                                <div class="row">
                                                    <div class="col-md-12">
                                                      <div class="form-group">
                                                        <label class="bmd-label-floating">Địa chỉ chi tiết</label>
                                                        <input type="text" class="form-control" name="txtAddress">
                                                        <span id="errorAddress" style="color: red"></span>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="row">
                                                    <div class="col-md-12">
                                                      <div class="form-group">
                                                        <label>Ghi chú</label>
                                                        <div class="form-group">

                                                          <textarea class="form-control" rows="5" name='txtCmt'></textarea>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <h5><button type='submit' class="btn btn-primary" id="checkout_1">THANH TOÁN</button></h5>
                                                  </form>
                                @endif
                                <div class="clearfix">


                                </div>
                        </div>
                    </div>
                  </div>
                      @if($message = Session::get('falseTwo'))
                      <div class='alert alert-danger'>
                        <p>{{$message}}</p>
                      </div>
                      @endif
                      @if(Auth::check())
                      <form method="POST" action="{{route('cart.payTwo', Auth::User()->id)}}" id="form_checkout_2">
                      @csrf
                      <div class="panel panel-default">
                          <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                              <div class="panel-body">
                                  <p>Chọn địa chỉ cửa hàng</p>
                                  <select class="form-control" name='CarryOrder'>
                                    <option selected>Chọn địa chỉ cửa hàng bạn đến nhận</option>
                                    <option value="Pizza Online Ngoc Khanh 107 D3 Ngoc Khanh, Ba Đinh">1. Pizza Online Ngoc Khanh 107 D3 Ngoc Khanh, Ba Đinh</option>
                                    <option value="Pizza Online Nguyen Trai 4 Ngo 332 Nguyen Trai, Thanh Xuan">2. Pizza Online Nguyen Trai 4 Ngo 332 Nguyen Trai, Thanh Xuan</option>
                                    <option value="Pizza Online My Đinh 6 Đong Bat, Cau Giay">3. Pizza Online My Đinh 6 Đong Bat, Cau Giay</option>
                                    <option value="Pizza Express Hoang Mai 52 Kim Đong, Hoang Mai">4. Pizza Express Hoang Mai 52 Kim Đong, Hoang Mai</option>
                                  </select><br><br>
                                  <span id="storeLocationError" style="color: red"></span>
                                  <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Họ</label>
                                      <input type="text" class="form-control" name="FirstName">
                                      <span id="firstNameError" style="color: red"></span>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Tên</label>
                                      <input type="text" class="form-control" name="LastName">
                                      <span id="lastNameError" style="color: red"></span>
                                    </div>
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Email</label>
                                      <input type="text" class="form-control" name="Email">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Số điện thoại</label>
                                      <input type="number" class="form-control" name="Phone">
                                      <span id="phoneNumberError" style="color: red"></span>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label>Ghi chú</label>
                                      <div class="form-group">

                                        <textarea class="form-control" rows="5" name='Cmt'></textarea>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <br><br>
                                  <h5><button type='submit' class="btn btn-primary" id="checkout_2">THANH TOÁN</button></h5>
                              </div>
                          </div>
                      </div>
                      </form>
                    @else
                    <form method="POST" action="{{route('cart.payTwos')}}">
                      @csrf
                      <div class="panel panel-default">
                          <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" id="form_checkout_2">
                              <div class="panel-body">
                                  <p>Chọn địa chỉ cửa hàng</p>
                                  <select class="form-control" name='CarryOrder'>
                                    <option selected>Chọn địa chỉ cửa hàng bạn đến nhận</option>
                                    <option value="Pizza Online Ngoc Khanh 107 D3 Ngoc Khanh, Ba Đinh">1. Pizza Online Ngoc Khanh 107 D3 Ngoc Khanh, Ba Đinh</option>
                                    <option value="Pizza Online Nguyen Trai 4 Ngo 332 Nguyen Trai, Thanh Xuan">2. Pizza Online Nguyen Trai 4 Ngo 332 Nguyen Trai, Thanh Xuan</option>
                                    <option value="Pizza Online My Đinh 6 Đong Bat, Cau Giay">3. Pizza Online My Đinh 6 Đong Bat, Cau Giay</option>
                                    <option value="Pizza Express Hoang Mai 52 Kim Đong, Hoang Mai">4. Pizza Express Hoang Mai 52 Kim Đong, Hoang Mai</option>
                                  </select><br><br>
                                  <span id="storeLocationError" style="color: red"></span>
                                  <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Họ</label>
                                      <input type="text" class="form-control" name="FirstName">
                                      <span id="firstNameError" style="color: red"></span>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Tên</label>
                                      <input type="text" class="form-control" name="LastName">
                                      <span id="lastNameError" style="color: red"></span>
                                    </div>
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Email</label>
                                      <input type="text" class="form-control" name="Email">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Số điện thoại</label>
                                      <input type="number" class="form-control" name="Phone">
                                      <span id="phoneNumberError" style="color: red"></span>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label>Ghi chú</label>
                                      <div class="form-group">

                                        <textarea class="form-control" rows="5" name='Cmt'></textarea>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <br><br>
                                  <h5><button type='submit' class="btn btn-primary" id="checkout_2">THANH TOÁN</button></h5>
                              </div>
                          </div>
                      </div>
                      </form>
                      @endif
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="card card-profile">
                <div class="card-header card-header-primary" >
                  <h4 class="card-title">CHI TIẾT ĐƠN HÀNG</h4>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray"></h6>
                  <div class="side-cart">
                    <div class="side-cart-title">
                    <a href="#cart" style="text-decoration: none"><h3>Giỏ hàng</h3></a>
                      @foreach($cartContent as $select_cart)
                      <p><img src="{{asset('product/'.$select_cart->attributes->img)}}" alt="pizza" width="90px" height="90px"></p>
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
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div><br><br>
@stop
