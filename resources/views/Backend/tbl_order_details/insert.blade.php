@extends('masterTwo')
@section('title', 'Add New Order Detail')
@section('main')
<div class="admin-page admin-add-edit-page ">
    <a href="{{ route('order_details') }}" class="admin-back-link">
        <i class="fas fa-arrow-left"></i> Back to Order Details
    </a>
    <div class="admin-card">
        <div class="admin-card-header">
            <i class="fas fa-file-invoice"></i>
            <h4>Add New Order Detail</h4>
        </div>
        <div class="admin-card-body has-padding">
            @if($errors->any())
                <div class="admin-form-errors">
                    <ul>
                        @foreach($errors->all() as $erorr)
                            <li>{{ $erorr }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('insert_order_details') }}" method="POST" class="admin-form">
                @csrf
                <div class="admin-form-row">
                    <div class="admin-form-group">
                        <label>ID <span class="required">*</span></label>
                        <input type="number" name="nbrId" placeholder="Enter ID" class="form-control" required>
                    </div>
                    <div class="admin-form-group">
                        <label>Dish ID <span class="required">*</span></label>
                        <input type="text" name="txtDishId" placeholder="Enter dish ID" class="form-control" required>
                    </div>
                </div>
                <div class="admin-form-row">
                    <div class="admin-form-group">
                        <label>Quantity <span class="required">*</span></label>
                        <input type="number" name="nbrQuantity" class="form-control" placeholder="Enter quantity" min="1" required>
                    </div>
                    <div class="admin-form-group">
                        <label>Price <span class="required">*</span></label>
                        <input type="number" name="nbrPrice" placeholder="0.00" class="form-control" required>
                        <div class="form-hint">Enter price in USD</div>
                    </div>
                </div>
                <div class="admin-form-group">
                    <label>Order Code <span class="required">*</span></label>
                    <input type="text" name="txtOrCode" placeholder="Enter order code" class="form-control" required>
                </div>
                <div class="admin-form-footer">
                    <a href="{{ route('order_details') }}" class="btn-form-cancel"><i class="fas fa-times"></i> Cancel</a>
                    <button type="submit" class="btn-form-submit"><i class="fas fa-plus"></i> Add Order Detail</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
