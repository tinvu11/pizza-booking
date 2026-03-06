@extends('masterTwo')
<script>
        function searchId() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchId");
            filter = input.value.toUpperCase();
            table = document.getElementById("tbl_order");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }

        function searchUserId() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchUserId");
            filter = input.value.toUpperCase();
            table = document.getElementById("tbl_order");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }

        function searchOrderDetail() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchOrderDetail");
            filter = input.value.toUpperCase();
            table = document.getElementById("tbl_order");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[2];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }

        function searchStatus() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchStatus");
            filter = input.value.toUpperCase();
            table = document.getElementById("tbl_order");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[3];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
</script>

@section('title', 'ORDERS')
@section('main')
<div class="admin-page">
    @if($message = Session::get('success_order'))
        <div class="admin-alert alert-success">
            <i class="fas fa-check-circle"></i> {{$message}}
        </div>
    @endif

    <div class="page-header-bar">
        <span class="record-info">Found <strong>{{count($index_order)}}</strong> orders</span>
        <a href="{{route('create_order')}}" class="btn-add">
            <i class="fas fa-plus"></i> New Order
        </a>
    </div>

    <div class="admin-card">
        <div class="admin-card-header">
            <i class="fas fa-shopping-cart"></i>
            <h4>Order Management</h4>
        </div>
        <div class="admin-card-body">
            <div class="table-responsive">
                <table class="admin-table" id="tbl_order">
                    <thead class="text-center">
                        <tr>
                            <th>ID</th>
                            <th>User ID</th>
                            <th>Detail ID</th>
                            <th>Status</th>
                            <th width="140">Action</th>
                        </tr>
                        <tr class="search-row">
                            <th><input class="form-control form-control-sm" type="text" id="searchId" onkeyup="searchId()" placeholder="ID.."></th>
                            <th><input class="form-control form-control-sm" type="text" id="searchUserId" onkeyup="searchUserId()" placeholder="User.."></th>
                            <th><input class="form-control form-control-sm" type="text" id="searchOrderDetail" onkeyup="searchOrderDetail()" placeholder="Detail.."></th>
                            <th><input class="form-control form-control-sm" type="text" id="searchStatus" onkeyup="searchStatus()" placeholder="Status.."></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach($index_order as $select_order)
                        <tr>
                            <td class="cell-id">#{{$select_order->id}}</td>
                            <td><span class="cell-badge cell-badge-primary">{{$select_order->id_user}}</span></td>
                            <td class="cell-muted">{{$select_order->id_details}}</td>
                            <td>
                                @php
                                    $statusClass = 'cell-badge-warning';
                                    if(strtolower($select_order->status) == 'completed') $statusClass = 'cell-badge-success';
                                    if(strtolower($select_order->status) == 'cancelled') $statusClass = 'cell-badge-danger';
                                @endphp
                                <span class="cell-badge {{$statusClass}}">
                                    {{$select_order->status}}
                                </span>
                            </td>
                            <td>
                                <div class="action-cell">
                                    <a href="{{route('edit_order', $select_order->id)}}" class="btn-act btn-act-edit">
                                        <i class="fa fa-edit"></i> Edit
                                    </a>
                                    <a href="{{route('delete_order', $select_order->id)}}" class="btn-act btn-act-delete" onclick="return confirm('Delete this order?')">
                                        <i class="fa fa-trash"></i> Del
                                    </a>
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
