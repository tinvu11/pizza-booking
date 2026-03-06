
@extends('masterTwo')


<script>
        function searchId() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchId");
            filter = input.value.toUpperCase();
            table = document.getElementById("tbl_product");
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

        function searchCategoryId() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchCategoryId");
            filter = input.value.toUpperCase();
            table = document.getElementById("tbl_product");
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

        function searchMenu() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchMenu");
            filter = input.value.toUpperCase();
            table = document.getElementById("tbl_product");
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

        function searchProductName() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchProductName");
            filter = input.value.toUpperCase();
            table = document.getElementById("tbl_product");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[4];
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

        function searchPrice() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchPrice");
            filter = input.value.toUpperCase();
            table = document.getElementById("tbl_product");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[5];
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

        function searchInventory() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchInventory");
            filter = input.value.toUpperCase();
            table = document.getElementById("tbl_product");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[6];
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

        function searchFeedBack() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchFeedBack");
            filter = input.value.toUpperCase();
            table = document.getElementById("tbl_product");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[7];
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
@section('title', 'MENU')
@section('main')
<div class="admin-page">
    @if($message = Session::get('success_product'))
        <div class="admin-alert alert-success">
            <i class="fas fa-check-circle"></i> {{$message}}
        </div>
    @endif

    <div class="page-header-bar">
        <span class="record-info">Showing <strong>{{count($index_product)}}</strong> products</span>
        <a href="{{route('create_product')}}" class="btn-add">
            <i class="fas fa-plus"></i> Add Product
        </a>
    </div>

    <div class="admin-card">
        <div class="admin-card-header">
            <i class="fas fa-bars"></i>
            <h4>Product Menu Management</h4>
        </div>
        <div class="admin-card-body">
            <div class="table-responsive">
                <table class="admin-table" id="tbl_product">
                    <thead>
                        <tr class="text-center">
                            <th>ID</th>
                            <th>Category</th>
                            <th>Menu</th>
                            <th>Image</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Reviews</th>
                            <th width="140">Action</th>
                        </tr>
                        <tr class="search-row">
                            <th><input class="form-control form-control-sm" type="text" id="searchId" onkeyup="searchId()" placeholder="ID.."></th>
                            <th><input class="form-control form-control-sm" type="text" id="searchCategoryId" onkeyup="searchCategoryId()" placeholder="Cat.."></th>
                            <th><input class="form-control form-control-sm" type="text" id="searchMenu" onkeyup="searchMenu()" placeholder="Menu.."></th>
                            <th></th>
                            <th><input class="form-control form-control-sm" type="text" id="searchProductName" onkeyup="searchProductName()" placeholder="Name.."></th>
                            <th><input class="form-control form-control-sm" type="text" id="searchPrice" onkeyup="searchPrice()" placeholder="Price.."></th>
                            <th><input class="form-control form-control-sm" type="text" id="searchInventory" onkeyup="searchInventory()" placeholder="Stock.."></th>
                            <th><input class="form-control form-control-sm" type="text" id="searchFeedBack" onkeyup="searchFeedBack()" placeholder="Review.."></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach($index_product as $select_product)
                        <tr>
                            <td class="cell-id">#{{$select_product->id}}</td>
                            <td><span class="cell-badge cell-badge-light">{{$select_product->cat_id}}</span></td>
                            <td class="cell-muted">{{$select_product->menu}}</td>
                            <td>
                                <img src="{{asset('product/'.$select_product->prd_img)}}" alt="product" class="tbl-thumb">
                            </td>
                            <td class="text-left cell-bold">{{$select_product->dish_name}}</td>
                            <td class="cell-price">${{number_format($select_product->price, 2)}}</td>
                            <td>
                                <span class="cell-badge {{ $select_product->inventory > 10 ? 'cell-badge-success' : 'cell-badge-danger' }}">
                                    {{$select_product->inventory}}
                                </span>
                            </td>
                            <td class="cell-muted text-left" title="{{$select_product->customer_reviews}}" style="max-width: 150px;">
                                {{ Str::limit($select_product->customer_reviews, 30) }}
                            </td>
                            <td>
                                <div class="action-cell">
                                    <a href="{{route('edit_product', $select_product->id)}}" class="btn-act btn-act-edit">
                                        <i class="fa fa-edit"></i> Edit
                                    </a>
                                    <a href="{{route('delete_product', $select_product->id)}}" class="btn-act btn-act-delete" onclick="return confirm('Delete this product?')">
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
