<!DOCTYPE html>
<html>
<head>
      <title>Pizza-Online</title>
      <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
      <link rel="icon" type="image/png" sizes="16x16" href="css/favicon-16x16.png">
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="css/style2.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script>
        $(document).ready(function(){
          $('#modalLogin').click(function(){
            $('#login').modal().css('margin-top','150px');
          });
          $('#modalSignup').click(function(){
            $('#signup').modal().css('margin-top','20px');
          });
          $('#swapLogin').click(function(){
            $('#login').modal().css('margin-top','150px');
          });
          $('#swapSignup').click(function(){
            $('#signup').modal().css('margin-top','20px');
          });
          $('#btnLogin').click(function(){
            let user = $('input[name="txtUser"]').val();
            let pass = $('input[name="txtPass"]').val();
            let f1 = true;
            $('#mesUser').text('');
            $('#mesPass').text('');
            if(!isString(user)){
              $('#mesUser').text('Tên đăng nhập phải có ít nhất 5 kí tự');
              f1 = false;
            }
            if(!isPass(pass)){
              $('#mesPass').text('Mật khẩu phải có ít nhất 5 kí tự');
              f1 = false;
            }
            return f1;
            if(f1==true){
              document.getElementById('requestLogin').submit();
            }
          });
          $('#btnSignup').click(function(){
            let email = $('input[name="txtEmail"]').val();
            let user2 = $('input[name="txtName"]').val();
            let pass2 = $('input[name="txtPwd_user"]').val();
            let rePass = $('input[name="txtRepass"]').val();
            let phone = $('input[name="nbrPhone"]').val();
            let f2 = true;
            $('#mesUser2').text('');
            $('#mesPass2').text('');
            $('#mesEmail').text('');
            $('#mesRepass').text('');
            $('#mesPhone').text('');
            if(!isEmail(email)){
              $('#mesEmail').text('Lỗi cú pháp, Ví dụ: orionazo9@gmail.com(.vn)');
              f2 = false;
            }
            if(!isPhone(phone)){
              $('#mesPhone').text('Số điện thoại phải có 10 số');
              f2 = false;
            }
            if(!isString(user2)){
              $('#mesUser2').text('Tên đăng nhập phải có ít nhất 5 kí tự');
              f2 = false;
            }
            if(!isPass(pass2)){
              $('#mesPass2').text('Mật khẩu phải có ít nhất 5 kí tự');
              f2 = false;
            }
            if(confirmPass(pass2,rePass)==false){
              $('#mesRepass').text('Mật khẩu không trùng lặp');
              f2 = false;
            }
            return f2;
            if(f2==true){
              document.getElementById('requestSignup').submit();
            }
          });
          function isEmail(_email){
            var reg = /^[A-Za-z0-9\_]+\@[A-Za-z0-9]{2,5}\.[A-Za-z0-9]{2,5}(\.[A-Za-z0-9]{2,5})?$/;
            return reg.test(_email);
          }
          function isString(_user){
            var reg = /^[A-Za-z0-9\_ ]{5,50}$/;
            return reg.test(_user);
          }
          function isPass(_pass){
            var reg = /^[A-Za-z0-9\_ ]{5,20}$/;
            return reg.test(_pass);
          }
          function confirmPass(_pass,_rePass){
            var f = false;
            if(_pass==_rePass){
              f = true;
            }
            return f;
          }
          function isPhone(_phone){
            var reg = /^\d{10}$/;
            return reg.test(_phone);
          }
        });
      </script>

<script>
    $(document).ready(function () {
    $("input[name='inlineRadioOptions']").click(function () {
        var checkedValue = $("input[name='inlineRadioOptions']:checked").val();
        console.log(checkedValue);
        if (checkedValue == "option1") {
            $("#collapseOne").collapse('show');
            $("#collapseTwo").collapse('hide');
            $("#collapseThree").collapse('hide');
        } else if (checkedValue == "option2") {
            $("#collapseOne").collapse('hide');
            $("#collapseTwo").collapse('show');
            $("#collapseThree").collapse('hide');

        } else if (checkedValue == "option3") {
            $("#collapseOne").collapse('hide');
            $("#collapseTwo").collapse('hide');
            $("#collapseThree").collapse('show');

        }else {
            console.log("Oops.");
        }
      });
    });
</script>



</head>
<body>

<div class="container bigbox mw-100">

<div class="mw-100 h-25" id='header' align='center'>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark mx-auto bg-warning">
    <a class="navbar-brand" href="{{url('home')}}">
        <img src="css/logo.png" style="width: 60px">
    </a>
   <div class="collapse navbar-collapse" id="navb" align='center'>
      <ul class="navbar-nav mr-auto">
         <li class="nav-item">
           <a class="nav-link" href="{{url('home')}}" style="color: white" align='center'>HOME</a>
        </li>

         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="{{route('menu')}}"  style="color: white; font-weight: bold;">MENU</a>
            <ul class="dropdown-content" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{route('pizza')}}">PIZZA</a></li>
                <li><a class="dropdown-item" href="{{route('galicbreads')}}">GARLIC BREADS</a></li>
                <li><a class="dropdown-item" href="{{route('pizzasandwiches')}}">PIZZA SANDWICHES</a></li>
                <li><a class="dropdown-item" href="{{route('dessert')}}">DESSERTS</a></li>
                <li><a class="dropdown-item" href="{{route('beverages')}}">BEVERAGES</a></li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="menudownload/3.jpg" download="menudownload/3.jpg" style="color: white">MENU DOWNLOAD</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('storelocation')}}" style="color: white">STORE LOCATION</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="{{route('f.location')}}" style="color: white">LOCATIONS</a>
        </li> -->
         <li class="nav-item">
            <a class="nav-link" href="{{route('f.feedback')}}" style="color: white">FEEDBACK</a>
        </li>
         <!-- <li class="nav-item">
            <a class="nav-link" href="{{route('detailfraninfo')}}" style="color: white">FRANCHISE INFO</a>
        </li> -->

      </ul>
    </div>



       <div>
        <div id= "signin-signup">
          <ul class="nav navbar-nav navbar-toggler-right">
          @if(Auth::check())
                <li>
                  <!-- <img src="css/user.png"> -->
                  <a href="#">Hello {{Auth::User()->name}} / </a>
                  <a href="{{route('login.logout')}}"> Logout</a>
                  <a class="btn btn-success btn-sm ml-3" href="{{url('CartShow')}}">
                      <i class="fa fa-shopping-cart"></i> Cart
                      <span class="badge badge-light"></span>
                  </a>
              </li>
            @else
                <li>
                <!-- <img src="css/user.png"> -->
                <a href="#" data-toggle='modal' id='modalLogin' style='color: white'>SIGN IN /</a>
                <a href="#" data-toggle='modal' id='modalSignup' style='color: white'>SIGN UP</a>
                <a class="btn btn-success btn-sm ml-3" href="{{url('CartShow')}}">
                    <i class="fa fa-shopping-cart"></i> Cart
                    <span class="badge badge-light"></span>
                </a>
                </li>
            @endif
          </ul>
        </div>
      </div>

 <!--MODAL-LOGIN-->
    <div class="modal" id='login' style="z-index: 92999;" >
      <div class="modal-dialog modal-lg" style="z-index: 92999;">
        <div class="modal-content" style="z-index: 92999;">
          <div class="modal-header">
            <h4 class="modal-title">Login Here</h4>
            <button class="close" data-dismiss='modal'>&times;</button>
          </div>
          <div class="modal-body">
              @if($message = Session::get('false'))
                  <div class="alert alert-danger">
                    <p>{{$message}}</p>
                  </div>
              @endif
              <form method="POST" id='requestLogin' action="{{route('login.signin')}}">
                @csrf
                <table class="w-75">
                  <tr>
                    <td><span class="fas fa-user" style='color: grey'></span></td>
                    <td><input type="text" placeholder="Username or E-mail"  name='txtUser' class="form-control"></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><span id='mesUser' class="mesError"></span></td>
                  </tr>
                  <tr>
                    <td><div style='margin-top: 10px'><span class="fas fa-unlock-alt" style='color: grey'></span></div></td>
                    <td><input type="password" placeholder="Password"  name='txtPass' class="form-control" style='margin-top: 10px'></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><span id='mesPass' class="mesError"></span></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>
                      <!-- <input type="hidden" name='_token' value="{{csrf_token()}}"> -->
                      <input type="checkbox" name='remember' value='remember_me'> Remember me
                      <div class="float-right">New User? <a href="#" data-toggle='modal' id='swapSignup' data-dismiss='modal'>Register here</a></div>
                    </td>
                  </tr>
                </table>
                <button class="btn btn-success" style='margin-top: 10px' id='btnLogin' type='submit'>LOGIN</button>
              </form>


          </div>
          <div class="modal-footer">
            <button data-dismiss='modal' class="btn-danger">Close</button>
          </div>
        </div>
      </div>
    </div>

  <!--MODAL-SIGNUP-->
    <div class="modal" id='signup'>
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Create Account</h4>
            <button class="close" data-dismiss='modal'>&times;</button>
          </div>
          <form action="{{route('login.signup')}}" method='POST' id='requestSignup'>
          <div class="modal-body">
            <p style='color: grey'>Get started with your free account</p>
            @if($message = Session::get('success'))
                <div class="alert alert-success">
                  <p>{{$message}}</p>
                </div>
            @endif
            @if($errors->any())
              <div class="alert alert-danger">
                <ul>
                   @foreach($errors->all() as $erorr)
                     <li>{{$erorr}}</li>
                   @endforeach
                </ul>
              </div>
            @endif
              <table class="w-75">
                @csrf
                <tr>
                  <td>Username</td>
                  <td><input type="text" placeholder="Username" class="form-control" name='txtName'></td>
                </tr>
                <tr>
                  <td></td>
                  <td><span id='mesUser2' class="mesError"></span></td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td><input type="email" placeholder="Email" name='txtEmail' class="form-control" placeholder="Email" style='margin-top: 10px'></td>
                </tr>
                <tr>
                  <td></td>
                  <td><span id='mesEmail' class="mesError"></span></td>
                </tr>
                <tr>
                  <td>Phone Number</td>
                  <td><input type="number" placeholder="Phone Number" name='nbrPhone' class="form-control" placeholder="Email" style='margin-top: 10px'></td>
                </tr>
                <tr>
                  <td></td>
                  <td><span id='mesPhone' class="mesError"></span></td>
                </tr>
                <tr>
                  <td>Password</td>
                  <td><input type="password" name='txtPwd_user' placeholder="Password" class="form-control" style='margin-top: 10px' placeholder="Password"></td>
                </tr>
                <tr>
                  <td></td>
                  <td><span id='mesPass2' class="mesError"></span></td>
                </tr>
                <tr>
                  <td>Password (Confirm)</td>
                  <td><input type="password" placeholder="Confirm Password" class="form-control" style='margin-top: 10px' name='txtRepass'></td>
                </tr>
                <tr>
                  <td></td>
                  <td><span id='mesRepass' class="mesError"></span></td>
                </tr>
                <tr>
                  <td></td>
                  <td><div class="float-right">Have an account? <a href="#" data-toggle='modal' id='swapLogin' data-dismiss='modal'>Log in</a></div></td>
                </tr>
              </table>
              <button class="btn btn-success" id='btnSignup'>REGISTRATION</button>
          </div>
          </form>
          <div class="modal-footer">
            <button data-dismiss='modal' class="btn-danger">Close</button>
          </div>
        </div>
      </div>
    </div>
<button class=  "navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
        <span class="navbar-toggler-icon"></span>
     </button>
   </nav>
  </div>

        <!-- Main -->
        @yield('main')

  <div class="mw-100" id='footer'>
	<footer class="modern-footer bg-dark text-light pt-5 pb-3">
        <div class="container-fluid px-4 px-lg-5">
            <div class="row">
                <!-- Column 1: About Us -->
                <div class="col-lg-4 col-md-6 mb-4 text-center text-md-left">
                    <img src="css/logo.png" alt="Pizza-Online" style="max-height: 80px; margin-bottom: 20px;">
                    <p class="text-muted" style="font-size: 14px; line-height: 1.6;">
                        Pizza-Online is dedicated to providing the most authentic recipes built from the freshest ingredients. Experience a slice of perfection, delivered hot and fresh to your door.
                    </p>
                    <div class="social-icons mt-4">
                        <a href="#" class="btn btn-outline-light btn-floating m-1" role="button"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="btn btn-outline-light btn-floating m-1" role="button"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="btn btn-outline-light btn-floating m-1" role="button"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="btn btn-outline-light btn-floating m-1" role="button"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <!-- Column 2: Quick Links -->
                <div class="col-lg-2 col-md-6 mb-4 text-center text-md-left">
                    <h5 class="text-uppercase font-weight-bold mb-4" style="color: #f5a623; letter-spacing: 1px;">Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="{{url('home')}}" class="text-light footer-link">Home</a></li>
                        <li class="mb-2"><a href="{{route('menu')}}" class="text-light footer-link">Menu Pizza</a></li>
                        <li class="mb-2"><a href="{{route('f.location')}}" class="text-light footer-link">Our Locations</a></li>
                        <li class="mb-2"><a href="{{route('f.feedback')}}" class="text-light footer-link">Customer Feedback</a></li>
                    </ul>
                </div>

                <!-- Column 3: Legal & Support -->
                <div class="col-lg-2 col-md-6 mb-4 text-center text-md-left">
                    <h5 class="text-uppercase font-weight-bold mb-4" style="color: #f5a623; letter-spacing: 1px;">Support</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-light footer-link">Privacy Policy</a></li>
                        <li class="mb-2"><a href="#" class="text-light footer-link">Terms of Service</a></li>
                        <li class="mb-2"><a href="{{route('detailfraninfo')}}" class="text-light footer-link">Franchise Info</a></li>
                        <li class="mb-2"><a href="#" class="text-light footer-link">FAQ & Help</a></li>
                    </ul>
                </div>

                <!-- Column 4: Contact -->
                <div class="col-lg-4 col-md-6 mb-4 text-center text-md-left">
                    <h5 class="text-uppercase font-weight-bold mb-4" style="color: #f5a623; letter-spacing: 1px;">Contact Us</h5>
                    <p class="text-light mb-2"><i class="fas fa-map-marker-alt mr-3 text-muted"></i> 123 Truong Sa, Binh Thanh, HCMC</p>
                    <p class="text-light mb-2"><i class="fas fa-envelope mr-3 text-muted"></i> contact@shalepizza.com</p>
                    <p class="text-light mb-2"><i class="fas fa-phone mr-3 text-muted"></i> (+84) 1900 6099</p>
                    <p class="text-light mb-2"><i class="fas fa-clock mr-3 text-muted"></i> Daily: 09:00 AM - 10:00 PM</p>
                </div>
            </div>
            
            <hr class="mt-4 mb-4" style="background-color: #555;">
            
            <!-- Bottom Copyright -->
            <div class="row align-items-center">
                <div class="col-md-7 col-lg-8">
                    <p class="text-center text-md-left text-muted mb-0" style="font-size: 14px;">
                        © 2026 <strong>Pizza-Online</strong>. All rights reserved.
                    </p>
                </div>
                <div class="col-md-5 col-lg-4 text-center text-md-right mt-3 mt-md-0">
                    <img src="{{asset('images/Atm.png')}}" alt="Bank" style="height: 30px; margin-right: 10px; border-radius: 4px; border: 1px solid #4a4a4a;">
                    <img src="{{asset('images/momo.png')}}" alt="Momo" style="height: 30px; border-radius: 4px; border: 1px solid #4a4a4a;">
                </div>
            </div>
        </div>
        
        <!-- Floating Hotline Button -->
        <a class="hotline-fixed" href="tel:19006099"><i class="fas fa-phone-alt"></i></a>
    </footer>

</div>



</div>

</body>
</html>
