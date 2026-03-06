@extends('master')
@section('main')

@include('Frontend.partials.menu_carousel', ['carouselTitle' => 'BEST PIZZA 2026'])

@include('Frontend.partials.menu_nav', ['active' => 'pizza'])<br>


  
  <br>

      <div class="clearfix">
          <!-- <h2 style="text-align: center; color: white; font-weight: bold;">BEST PIZZA 2020</h2> -->
              <div class="container" >
              <div class="row">
                  @foreach($menuPizza as $select_pizza)
                  <div class="col-md-4 col-sm-6">
                      <div class="panel text-center" id="item" >
                          <img class="img-round" src="{{asset('product/'.$select_pizza->prd_img)}}" alt="{{$select_pizza->dish_name}}">
                        <div class="panel-body_0">
                          <div class="panel-body">
                              <h3>{{$select_pizza->dish_name}}</h3>
                              <p>{{$select_pizza->customer_reviews}}</p>
                              <strong>${{number_format($select_pizza->price, 2)}}</strong>
                          </div>

                          <div class="panel-footer">
                              <a href="{{route('cart.add', $select_pizza->id)}}" id="addcart" class="btn btn-primary">
                                  ADD TO CART
                              </a>
                          </div>
                        </div>
                      </div>
                  </div>
                              @endforeach
                </div>



              <!-- <div class="container">
                <div class="row">
                  @foreach($menuPreminum as $select_Preminum)
                  <div class="col-sm-4 h-75" id = "picpizza">
                      <div class="panel text-center" id="item" style="color: white">
                          <img class="img-round" style="width: 100%; height: 233px" src="{{asset('product/'.$select_Preminum->prd_img)}}" >
                            <div class="panel-body">
                              <h3 style="height: 65px">{{$select_Preminum->dish_name}}</h3>
                              <p style="height: 60px">{{$select_Preminum->customer_reviews}}</p>
                              <strong style="font-size: 25px">{{$select_Preminum->price}}$</strong>
                          </div>
                          <div class="panel-footer">
                              <a href="{{route('cart.add', $select_Preminum->id)}}" id="addcart" class="btn btn-primary"><img src="css/cart.png" style="width: 18px">&ensp;ADD TO CART</a>
                          </div>
                      </div>
                  </div>
                  @endforeach
                </div>
              </div> -->

            </div><br><br><br>


            <div class="modal fade" id="myModal1" role="dialog" style="color: #04a2e4">
                <div class="modal-dialog modal-lg">
                  <!-- Modal content-->
                  <div class="modal-content" style="background: url(css/nen1.jpg);">
                  <!--   <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div> -->
                    <div class="modal-body">
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col-lg-4">

                                <h4 class="modal-title" >PIZZAMIN SEA</h4>
                                <img class="img-round" style="width: 100%;" src="img-menu/V1.png" >
                                <br>
                                <b><h2  style="color: white">{price}</h2></b>
                              </div>
                              <div class="col-lg-8">
                                <p>Mozzarella cheese, Onion, Shrimp, Squid, Crab Meat, Mayonnaise, Basil</p>
                                <hr>
                                <select style="width: 40%;height: 40px;margin-right: 10%;" id="ddlSkills1">
                                    <option selected>Quantity</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                                <select style="width: 40%;height: 40px;" id="ddlSkills2">
                                    <option selected>Size</option>
                                    <option value="1">Large</option>
                                    <option value="2">Medium</option>
                                    <option value="3">Small</option>
                                </select>
                                <hr>
                                <button type="button" id="startoder" class="btn btn-danger" style="width: 92%;height: 50px;margin-right: 10%;">START ORDER</button>

                              </div>
                          </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                       <div id="divResult"></div>
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Modal -->



            <div class="modal fade" id="myModal2" role="dialog" style="color: #04a2e4">
                <div class="modal-dialog modal-lg">

                  <!-- Modal content-->
                  <div class="modal-content" style="background: url(css/nen1.jpg);">
                  <!--   <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div> -->
                    <div class="modal-body">
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col-lg-4">

                                <h4 class="modal-title" align="center">PRIME BEEF</h4>
                                <img class="img-round" style="width: 100%;" src="img-menu/V2.png" >
                                <br>
                                <b><h2 align="center" style="color: white">{price}</h2></b>
                              </div>
                              <div class="col-lg-8">
                                <p>Pepper sauce, Mozzarella cheese, Cheddar cheese, Shrimp, Squid, Pineapple, Onion</p>
                                <hr>
                                <select style="width: 40%;height: 40px;margin-right: 10%;" id="ddlSkills3">
                                    <option selected>Quantity</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                                <select style="width: 40%;height: 40px;" id="ddlSkills4">
                                    <option selected>Size</option>
                                    <option value="1">Large</option>
                                    <option value="2">Medium</option>
                                    <option value="3">Small</option>
                                </select>
                                <hr>
                                <button type="button" id="startoder" class="btn btn-danger" style="width: 92%;height: 50px;margin-right: 10%;">START ORDER</button>

                              </div>
                          </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                       <div id="divResult"></div>
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Modal -->


            <div class="modal fade" id="myModal3" role="dialog" style="color: #04a2e4">
                <div class="modal-dialog modal-lg">

                  <!-- Modal content-->
                  <div class="modal-content" style="background: url(css/nen1.jpg);">
                  <!--   <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div> -->
                    <div class="modal-body">
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col-lg-4">

                                <h4 class="modal-title" align="center">SINGAPORE SEAFOOD</h4>
                                <img class="img-round" style="width: 100%;" src="img-menu/V3.png" >
                                <br>
                                <b><h2 align="center" style="color: white">{price}</h2></b>
                              </div>
                              <div class="col-lg-8">
                                <p>Singapore style hot sauce, Mozzarella cheese, Shrimp, Crab Meat, Onion</p>
                                <hr>
                                <select style="width: 40%;height: 40px;margin-right: 10%;" id="ddlSkills3">
                                    <option selected>Quantity</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                                <select style="width: 40%;height: 40px;" id="ddlSkills4">
                                    <option selected>Size</option>
                                    <option value="1">Large</option>
                                    <option value="2">Medium</option>
                                    <option value="3">Small</option>
                                </select>
                                <hr>
                                <button type="button" id="startoder" class="btn btn-danger" style="width: 92%;height: 50px;margin-right: 10%;">START ORDER</button>

                              </div>
                          </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                       <div id="divResult"></div>
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Modal -->


            <div class="modal fade" id="myModal4" role="dialog" style="color: #04a2e4">
                <div class="modal-dialog modal-lg">

                  <!-- Modal content-->
                  <div class="modal-content" style="background: url(css/nen1.jpg);">
                  <!--   <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div> -->
                    <div class="modal-body">
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col-lg-4">

                                <h4 class="modal-title" align="center">TERIYAKI CHICKEN</h4>
                                <img class="img-round" style="width: 100%;" src="img-menu/V3.png" >
                                <br>
                                <b><h2 align="center" style="color: white">15$</h2></b>
                              </div>
                              <div class="col-lg-8">
                                <p>Mozzarella cheese, Onion, Mushroom</p>
                                <hr>
                                <select style="width: 40%;height: 40px;margin-right: 10%;" id="ddlSkills3">
                                    <option selected>Quantity</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                                <select style="width: 40%;height: 40px;" id="ddlSkills4">
                                    <option selected>Size</option>
                                    <option value="1">Large</option>
                                    <option value="2">Medium</option>
                                    <option value="3">Small</option>
                                </select>
                                <hr>
                                <button type="button" id="startoder" class="btn btn-danger" style="width: 92%;height: 50px;margin-right: 10%;">START ORDER</button>

                              </div>
                          </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                       <div id="divResult"></div>
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Modal -->

            <div class="modal fade" id="myModal5" role="dialog" style="color: #04a2e4">
                <div class="modal-dialog modal-lg">

                  <!-- Modal content-->
                  <div class="modal-content" style="background: url(css/nen1.jpg);">
                  <!--   <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div> -->
                    <div class="modal-body">
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col-lg-4">

                                <h4 class="modal-title" align="center">PEPPERONI FEAST</h4>
                                <img class="img-round" style="width: 100%;" src="img-menu/V3.png" >
                                <br>
                                <b><h2 align="center" style="color: white">15$</h2></b>
                              </div>
                              <div class="col-lg-8">
                                <p>Mozzarella cheese, Pizza Sauce, Pepperoni</p>
                                <hr>
                                <select style="width: 40%;height: 40px;margin-right: 10%;" id="ddlSkills3">
                                    <option selected>Quantity</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                                <select style="width: 40%;height: 40px;" id="ddlSkills4">
                                    <option selected>Size</option>
                                    <option value="1">Large</option>
                                    <option value="2">Medium</option>
                                    <option value="3">Small</option>
                                </select>
                                <hr>
                                <button type="button" id="startoder" class="btn btn-danger" style="width: 92%;height: 50px;margin-right: 10%;">START ORDER</button>

                              </div>
                          </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                       <div id="divResult"></div>
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Modal -->

            <div class="modal fade" id="myModal6" role="dialog" style="color: #04a2e4">
                <div class="modal-dialog modal-lg">

                  <!-- Modal content-->
                  <div class="modal-content" style="background: url(css/nen1.jpg);">
                  <!--   <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div> -->
                    <div class="modal-body">
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col-lg-4">

                                <h4 class="modal-title" align="center">SEAFOOD DELIGHT</h4>
                                <img class="img-round" style="width: 100%;" src="img-menu/V3.png" >
                                <br>
                                <b><h2 align="center" style="color: white">15$</h2></b>
                              </div>
                              <div class="col-lg-8">
                                <p>Shrimp, Squid, Crab surimi, Pizza Sauce, Onion</p>
                                <hr>
                                <select style="width: 40%;height: 40px;margin-right: 10%;" id="ddlSkills3">
                                    <option selected>Quantity</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                                <select style="width: 40%;height: 40px;" id="ddlSkills4">
                                    <option selected>Size</option>
                                    <option value="1">Large</option>
                                    <option value="2">Medium</option>
                                    <option value="3">Small</option>
                                </select>
                                <hr>
                                <button type="button" id="startoder" class="btn btn-danger" style="width: 92%;height: 50px;margin-right: 10%;">START ORDER</button>

                              </div>
                          </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                       <div id="divResult"></div>
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Modal -->
 </div>

 </div>
@stop
