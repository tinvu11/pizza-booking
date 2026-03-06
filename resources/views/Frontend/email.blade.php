<h3>You selected method Delivery Order</h3>
<h4>Thông tin khách hàng</h4>
<h2>Khách Hàng: {{$info['txtFirstName']." ".$info['txtLastName']}}</h2>
<h2>Email: {{$info['txtEmail']}}</h2>
<h2>Phone Number: {{$info['nbrPhone']}}</h2>
<h2>District: {{$info['txtDistrict']}}</h2>
<h2>City: {{$info['txtCity']}}</h2>
<h2>Address: {{$info['txtAddress']}}</h2>
<h2>Order Note: {{$info['txtCmt']}}</h2>
<h2>ID Order: {{$order_code}}</h2>
<br>
<hr>
<table border=1 style='border-collapse:collapse'>
    <tr>
        <th>Product Name</th>
        <th>Quantity</th>
        <th>Price</th>
    </tr>
    @foreach($cart as $item)
    <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->quantity}}</td>
        <td>{{$item->price}}</td>
    </tr>
    @endforeach
    <tr>
        <th>Total Price</th>
        <th colspan=2>{{$total}}</th>
    </tr>
</table>