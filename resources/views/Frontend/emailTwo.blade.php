<h3>You selected method Carry Out Order</h3>
<h4>Thông tin khách hàng</h4>
<h2>Khách Hàng: {{$infoTwo['FirstName']." ".$infoTwo['LastName']}}</h2>
<h2>Email: {{$infoTwo['Email']}}</h2>
<h2>Phone Number: {{$infoTwo['Phone']}}</h2>
<h2>Store Location: {{$infoTwo['CarryOrder']}}</h2>
<h2>Order Note: {{$infoTwo['Cmt']}}</h2>
<h2>ID Order: {{$order_code}}</h2>
<table border=1 style="border-collapse: collapse">
    <tr>
        <th>Product Name</th>
        <th>Quantity</th>
        <th>Price</th>
    </tr>
    @foreach($cartTwo as $itemTwo)
    <tr>
        <td>{{$itemTwo->name}}</td>
        <td>{{$itemTwo->quantity}}</td>
        <td>{{$itemTwo->price}}</td>
    </tr>
    @endforeach
    <tr>
        <th>Total Price</th>
        <th colspan=2>{{$totalTwo}}</th>
    </tr>
</table>