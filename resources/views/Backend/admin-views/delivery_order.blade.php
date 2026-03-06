@extends('masterTwo')

<script>
    function deliverySearch(colIndex, inputId) {
        var input = document.getElementById(inputId);
        var filter = input.value.toUpperCase();
        var table = document.getElementById("delivery_table");
        var tr = table.getElementsByTagName("tr");
        for (var i = 0; i < tr.length; i++) {
            var td = tr[i].getElementsByTagName("td")[colIndex];
            if (td) {
                var txtValue = td.textContent || td.innerText;
                tr[i].style.display = txtValue.toUpperCase().indexOf(filter) > -1 ? "" : "none";
            }
        }
    }
</script>

@section('title', 'DELIVERY')
@section('main')
<div class="admin-page">
    @if($message = Session::get('success_delivery'))
        <div class="admin-alert alert-success">
            <i class="fas fa-check-circle"></i> {{$message}}
        </div>
    @endif

    <div class="page-header-bar">
        <span class="record-info">Showing <strong>{{count($index_delivery)}}</strong> delivery records</span>
        <a href="{{route('create_delivery')}}" class="btn-add">
            <i class="fas fa-plus"></i> Add Delivery
        </a>
    </div>

    <div class="admin-card">
        <div class="admin-card-header">
            <i class="fas fa-shipping-fast"></i>
            <h4>Delivery Management</h4>
        </div>
        <div class="admin-card-body">
            <div class="table-responsive">
                <table class="admin-table" id="delivery_table">
                    <thead>
                        <tr class="text-center">
                            <th>ID</th>
                            <th>User ID</th>
                            <th>Phone</th>
                            <th>Store</th>
                            <th>Address</th>
                            <th>Order Code</th>
                            <th width="140">Action</th>
                        </tr>
                        <tr class="search-row">
                            <th><input class="form-control form-control-sm" type="text" id="searchId" onkeyup="deliverySearch(0,'searchId')" placeholder="ID.."></th>
                            <th><input class="form-control form-control-sm" type="text" id="searchUserId" onkeyup="deliverySearch(1,'searchUserId')" placeholder="User.."></th>
                            <th><input class="form-control form-control-sm" type="text" id="searchPhoneNumber" onkeyup="deliverySearch(2,'searchPhoneNumber')" placeholder="Phone.."></th>
                            <th><input class="form-control form-control-sm" type="text" id="searchStoreLocation" onkeyup="deliverySearch(3,'searchStoreLocation')" placeholder="Store.."></th>
                            <th><input class="form-control form-control-sm" type="text" id="searchCustomerAddress" onkeyup="deliverySearch(4,'searchCustomerAddress')" placeholder="Address.."></th>
                            <th><input class="form-control form-control-sm" type="text" id="searchOrderCode" onkeyup="deliverySearch(5,'searchOrderCode')" placeholder="Code.."></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach($index_delivery as $select_delivery)
                        <tr>
                            <td class="cell-id">#{{$select_delivery->id}}</td>
                            <td><span class="cell-badge cell-badge-primary">{{$select_delivery->id_user}}</span></td>
                            <td class="cell-muted">{{$select_delivery->phone_numbers}}</td>
                            <td class="cell-bold">{{$select_delivery->store_name}}</td>
                            <td class="cell-muted text-left">{{$select_delivery->customer_address}}</td>
                            <td><span class="cell-badge cell-badge-light">{{$select_delivery->order_code}}</span></td>
                            <td>
                                <div class="action-cell">
                                    <a href="{{route('edit_delivery', $select_delivery->id)}}" class="btn-act btn-act-edit"><i class="fa fa-edit"></i> Edit</a>
                                    <a href="{{route('delete_delivery', $select_delivery->id)}}" class="btn-act btn-act-delete" onclick="return confirm('Delete this delivery?')"><i class="fa fa-trash"></i> Del</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop
