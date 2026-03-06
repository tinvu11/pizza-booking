<div class="text-center" id='menuthucdon'>
<ul>
          <li class="nav-item" id= "pizzaitem"><a class="nav-link {{ $active == 'pizza' ? 'active1' : '' }}" href="{{route('pizza')}}" target="_self" style="color: white">PIZZA</a></li>
          <li class="nav-item" id= "pizzaitem"><a class="nav-link {{ $active == 'galicbreads' ? 'active1' : '' }}" href="{{route('galicbreads')}}" target="_self" style="color: white">GARLIC BREADS</a></li>
          <li class="nav-item" id= "pizzaitem"><a class="nav-link {{ $active == 'pizzasandwiches' ? 'active1' : '' }}" href="{{route('pizzasandwiches')}}" target="_self" style="color: white">PIZZA SANDWICHES</a></li>
          <li class="nav-item" id= "pizzaitem"><a class="nav-link {{ $active == 'dessert' ? 'active1' : '' }}" href="{{route('dessert')}}" target="_self" style="color: white">DESSERTS</a></li>
          <li class="nav-item" id= "pizzaitem"><a class="nav-link {{ $active == 'beverages' ? 'active1' : '' }}" href="{{route('beverages')}}" target="_self" style="color: white">BEVERAGES</a></li>
      </ul>
  </div>
