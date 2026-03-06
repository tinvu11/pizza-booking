@extends('masterTwo')

<script>
    function orderDetailSearch(colIndex, inputId) {
        var input = document.getElementById(inputId);
        var filter = input.value.toUpperCase();
        var table = document.getElementById("tbl_order_detail");
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

@section('title', 'ORDER DETAILS')
@section('main')
<div class="admin-page">
    @if($message = Session::get('success_order_details'))
        <div class="admin-alert alert-success">
            <i class="fas fa-check-circle"></i> {{$message}}
        </div>
    @endif

    <div class="page-header-bar">
        <span class="record-info">Showing <strong>{{count($index_order_details)}}</strong> order detail records</span>
        <a href="{{route('create_order_details')}}" class="btn-add">
            <i class="fas fa-plus"></i> Add Order Detail
        </a>
    </div>

    <div class="admin-card">
        <div class="admin-card-header">
            <i class="fas fa-file-alt"></i>
            <h4>Order Details Management</h4>
        </div>
        <div class="admin-card-body">
            <div class="table-responsive">
                <table class="admin-table" id="tbl_order_detail">
                    <thead>
                        <tr class="text-center">
                            <th>ID</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
                            <th width="140">Action</th>
                        </tr>
                        <tr class="search-row">
                            <th><input class="form-control form-control-sm" type="text" id="searchId" onkeyup="orderDetailSearch(0,'searchId')" placeholder="ID.."></th>
                            <th><input class="form-control form-control-sm" type="text" id="searchProductName" onkeyup="orderDetailSearch(1,'searchProductName')" placeholder="Product.."></th>
                            <th><input class="form-control form-control-sm" type="text" id="searchQuantity" onkeyup="orderDetailSearch(2,'searchQuantity')" placeholder="Qty.."></th>
                            <th><input class="form-control form-control-sm" type="text" id="searchPrice" onkeyup="orderDetailSearch(3,'searchPrice')" placeholder="Price.."></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach($index_order_details as $select_order_details)
                        <tr>
                            <td class="cell-id">#{{$select_order_details->id}}</td>
                            <td class="cell-bold text-left">{{$select_order_details->prd_name}}</td>
                            <td><span class="cell-badge cell-badge-light">{{$select_order_details->quantity}}</span></td>
                            <td class="cell-price">${{number_format($select_order_details->total_price, 2)}}</td>
                            <td>
                                <div class="action-cell">
                                    <a href="{{route('edit_order_details', $select_order_details->id)}}" class="btn-act btn-act-edit"><i class="fa fa-edit"></i> Edit</a>
                                    <a href="{{route('delete_order_details', $select_order_details->id)}}" class="btn-act btn-act-delete" onclick="return confirm('Delete this order detail?')"><i class="fa fa-trash"></i> Del</a>
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
