@extends('master')
@section('main')
<style>
    /* Reset Banner về 100% */
    #box1 {
        width: 100% !important;
        max-width: 100% !important;
        flex: 0 0 100% !important;
        float: none !important;
    }

    /* Container cho thẻ ngang */
    .service-horizontal-card {
        display: flex; /* Chia trái phải */
        background-color: #262626;
        border-radius: 8px;
        overflow: hidden;
        border: 1px solid #333;
        height: 140px; /* Độ cao cố định để 3 mục bằng nhau */
        transition: transform 0.3s ease;
    }



    /* Bên trái: Ảnh */
    .card-left-img {
        width: 40%;
        overflow: hidden;
    }

    .card-left-img img {
        width: 100%;
        height: 100%;
        object-fit: cover; /* Ảnh không bị méo */
    }

    /* Bên phải: Nội dung */
    .card-right-content {
        width: 60%;
        padding: 15px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
    }

    .card-right-content h5 {
        color: #e0c28a;
        font-size: 14px;
        font-weight: bold;
        margin-bottom: 5px;
        text-transform: uppercase;
    }

    .card-right-content p {
        color: #aaa;
        font-size: 11px;
        margin-bottom: 12px;
        line-height: 1.4;
    }

    /* Nút bấm tùy chỉnh */
    .btn-custom-order {
        background-color: #e0c28a;
        color: #111 !important;
        font-size: 10px;
        font-weight: bold;
        padding: 5px 12px;
        border-radius: 4px;
        text-decoration: none !important;
    }

    .btn-custom-order:hover {
        background-color: #fff;
    }
</style>
 <div class="clearfix" >
	    <div class="clearfix w-100 " id = "box1">
		   <div class=''>
			<div id="demo" class="carousel slide" data-ride="carousel">
			  <ul class="carousel-indicators">
				<li data-target="#demo" data-slide-to="0" class="active"></li>
				<li data-target="#demo" data-slide-to="1"></li>
				<li data-target="#demo" data-slide-to="2"></li>
			  </ul>

			  <div class="carousel-inner" style="height: 380px;" >
				<div class="carousel-item active">
				  <img src="img-trangchu/P2.png" alt="P3" width="100%" style="height:100%, object-fit: contain;">
				</div>
				<div class="carousel-item">
				  <img src="img-trangchu/P1.png" alt="P2" width="100%" style="height:100%, object-fit: contain;">
				</div>
				<div class="carousel-item">
				  <img src="img-trangchu/P3.png" alt="P1" width="100%" style="object-fit: cover; ">
				</div>
			  </div>
			  <!-- Left and right controls -->
			  <a class="carousel-control-prev" href="#demo" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			  </a>
			  <a class="carousel-control-next" href="#demo" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			  </a>
			 </div>
		  </div>
		</div>
		

 </div>

<div class="container-fluid mt-4" style="padding:20px 90px; ">
    <div class="row">
        <div class="col-lg-4 col-md-12 mb-4">
            <div class="service-horizontal-card">
                <div class="card-left-img">
                    <img src="weekendspecial/2.jpg" alt="Weekend Special">
                </div>
                <div class="card-right-content">
                    <h5>WEEKEND SPECIAL</h5>
                    <p>Giảm giá cực sốc vào mỗi cuối tuần.</p>
                    <a href="{{route('weekendspecial')}}" class="btn-custom-order">XEM NGAY</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-12 mb-4">
            <div class="service-horizontal-card">
                <div class="card-left-img">
                    <img src="img-trangchu/P7.jpg" alt="Combo Offers">
                </div>
                <div class="card-right-content">
                    <h5>COMBO OFFERS</h5>
                    <p>Tiết kiệm tối đa cho nhóm bạn và gia đình.</p>
                    <a href="{{route('combooffers')}}" class="btn-combo-offer btn-custom-order">XEM NGAY</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-12 mb-4">
            <div class="service-horizontal-card">
                <div class="card-left-img">
                    <img src="img-trangchu/P6.jpg" alt="Gallery">
                </div>
                <div class="card-right-content">
                    <h5>OUR GALLERY</h5>
                    <p>Khám phá không gian và món ăn của chúng tôi.</p>
                    <a href="{{route('f.gallery')}}" class="btn-custom-order">XEM NGAY</a>
                </div>
            </div>
        </div>
    </div>
</div>
 
 <div>

 	<div class="container" >
			<h2 style="margin: 35px 0px; text-align: center; font-size: 35px; font-weight: bold; color: #e3893fff;">SANDWICHES</h2>
			<div class="row">
				@foreach ($menuSandwiches as $select_sandwiches)
					<div class="col-sm-4 h-75">
						<div class="panel text-center" id="item" style="color: white;">

							<img 
								class="img-round"
								style="width: 100%; height: 233px;"
								src="{{ asset('product/' . $select_sandwiches->prd_img) }}"
								alt="{{ $select_sandwiches->dish_name }}"
							>

							<div class="panel-body_0">
								<div class="panel-body">
									<h3 style="height: 65px;">
										{{ $select_sandwiches->dish_name }}
									</h3>

									<p style="height: 65px;">
										{{ $select_sandwiches->customer_reviews }}
									</p>

									<strong style="font-size: 25px;">
										${{ number_format($select_sandwiches->price, 2) }}
									</strong>
								</div>

								<div class="panel-footer">
									<a 
										href="{{ route('cart.add', $select_sandwiches->id) }}" 
										id="addcart" 
										class="btn btn-primary"
									>
										<img src="{{ asset('css/cart.png') }}" style="width: 20px;">
										&ensp;ADD TO CART
									</a>
								</div>
							</div>

						</div>
					</div>
				@endforeach
			</div>

			<!-- Pagination -->
			<!-- <div class="row mt-4">
				<div class="col-sm-4">
					{{ $menuSandwiches->links() }}
				</div>
			</div> -->
			<div class="see-more-wrapper">
				<a href="{{ route('pizzasandwiches') }}" class="see-more-btn" style="color: white; text-decoration: none;">
					Xem thêm
				</a>
			</div>
		</div>
	
		<div class="container">
			<div class="row">
				@foreach ($menuBeverage as $select_beverages)
					<div class="col-sm-4 h-75">
						<div class="panel text-center" id="item" style="color: white;">

							<img 
								class="img-round"
								style="width: 100%; height: 233px;"
								src="{{ asset('product/' . $select_beverages->prd_img) }}"
								alt="{{ $select_beverages->dish_name }}"
							>

							<div class="panel-body_0">

								<div class="panel-body">
									<h3 style="height: 65px;">
										{{ $select_beverages->dish_name }}
									</h3>

									<p style="height: 65px;">
										{{ $select_beverages->customer_reviews }}
									</p>

									<strong style="font-size: 25px;">
										${{ number_format($select_beverages->price, 2) }}
									</strong>
								</div>

								<div class="panel-footer">
									<a 
										href="{{ route('cart.add', $select_beverages->id) }}" 
										id="addcart" 
										class="btn btn-primary"
									>
										<img src="{{ asset('css/cart.png') }}" style="width: 20px;">
										&ensp;ADD TO CART
									</a>
								</div>

							</div>
						</div>
					</div>
				@endforeach
			</div>

			<!-- Pagination -->
			<div class="see-more-wrapper">
				<a href="{{ route('beverages') }}" class="see-more-btn" style="color: white; text-decoration: none;">
					Xem thêm
				</a>
			</div>
		</div>
	
			
		<div class="container">
			<div class="row">
				@foreach ($menuDessert as $select_dessert)
					<div class="col-sm-4 h-75">
						<div class="panel text-center" id="item" style="color: white;">

							<img 
								class="img-round"
								style="width: 100%; height: 233px;"
								src="{{ asset('product/' . $select_dessert->prd_img) }}"
								alt="{{ $select_dessert->dish_name }}"
							>

							<div class="panel-body_0">
								<div class="panel-body">
									<h3 style="height: 65px;">
										{{ $select_dessert->dish_name }}
									</h3>

									<p style="height: 65px;">
										{{ $select_dessert->customer_reviews }}
									</p>

									<strong style="font-size: 25px;">
										${{ number_format($select_dessert->price, 2) }}
									</strong>
								</div>

								<div class="panel-footer">
									<a 
										href="{{ route('cart.add', $select_dessert->id) }}" 
										id="addcart" 
										class="btn btn-primary"
									>
										<img src="{{ asset('css/cart.png') }}" style="width: 20px;">
										&ensp;ADD TO CART
									</a>
								</div>
							</div>

						</div>
					</div>
				@endforeach
			</div>

			<!-- Pagination -->
			<div class="see-more-wrapper">
				<a href="{{ route('dessert') }}" class="see-more-btn" style="color: white; text-decoration: none;">
					Xem thêm
				</a>
			</div>
		</div>

	<section id="home-order">
		<div class="wrapper">
			<div class="inner">
				<div class="grid mg-left-0">
					<div class="grid__item large--six-twelfths medium--one-whole small--one-whole order-background pd-left0">
						<div class="order-form">
							
							<div class="order-title text-center title-text">
								<h3>Đặt online ngay!</h3>
								<h2>Không còn phải chờ đợi nữa</h2>
								<img src="" alt="">
							</div>

							<div class="order-content clearfix">
								<form accept-charset="UTF-8" action="/contact" class="contact-form" method="post">

									<input name="form_type" type="hidden" value="contact">
									<input name="utf8" type="hidden" value="✓">
									<input name="__RequestVerificationToken" type="hidden" value="CfDJ8FyFPV59mBtNhmQGz0fYZt-D4E8qYZcQxvIPA2joPG3uMlzc2_yw7zMi3evbicf0O-N75K5PV2JyI-7rb8xhOebkf_Wy910tIO5W8k0U3-sThk2HyIvI8DVBck1R7DAK2CYbIbesOHUIUiX1eyQ6yZY">

									<label for="ContactFormName">Họ tên của bạn</label>
									<input type="text" required id="ContactFormName" class="input-full"
										name="contact[name]" placeholder="Họ tên của bạn">

									<label for="ContactFormEmail">Địa chỉ email của bạn</label>
									<input type="email" required id="ContactFormEmail" class="input-full"
										name="contact[email]" placeholder="Địa chỉ email của bạn">

									<label for="ContactFormPhone">Số điện thoại của bạn</label>
									<input type="tel" required id="ContactFormPhone" class="input-full"
										name="contact[phone]" placeholder="Số điện thoại của bạn"
										pattern="[0-9\-]*">

									<label for="ContactFormMessage">Nội dung</label>
									<textarea rows="5" required id="ContactFormMessage"
											class="input-full"
											name="contact[body]"
											placeholder="Nội dung"></textarea>

									<div class="text-center">
										<button type="submit" class="btnType1">
											Đặt ngay
										</button>
									</div>

								</form>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
 @stop
