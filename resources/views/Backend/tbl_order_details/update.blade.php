@extends('masterTwo')
@section('title', 'Edit Order Detail')
@section('main')
<div class="admin-page admin-add-edit-page ">
    <a href="{{ route('order_details') }}" class="admin-back-link">
        <i class="fas fa-arrow-left"></i> Back to Order Details
    </a>
    <div class="admin-card">
        <div class="admin-card-header">
            <i class="fas fa-file-invoice"></i>
            <h4>Edit Order Detail #{{ $edit_order_details->id }}</h4>
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
            <form action="{{ route('update_order_details', $edit_order_details->id) }}" method="POST" class="admin-form">
                @csrf
                <div class="admin-form-row">
                    <div class="admin-form-group">
                        <label>ID</label>
                        <input type="number" value="{{ $edit_order_details->id }}" name="nbrId" class="form-control" readonly style="opacity:.6;cursor:not-allowed">
                    </div>
                    <div class="admin-form-group">
                        <label>Dish ID <span class="required">*</span></label>
                        <input type="text" value="{{ $edit_order_details->dish_id }}" name="txtDishId" placeholder="Enter dish ID" class="form-control" required>
                    </div>
                </div>
                <div class="admin-form-row">
                    <div class="admin-form-group">
                        <label>Quantity <span class="required">*</span></label>
                        <input type="number" value="{{ $edit_order_details->quantity }}" name="nbrQuantity" class="form-control" placeholder="Enter quantity" min="1" required>
                    </div>
                    <div class="admin-form-group">
                        <label>Price <span class="required">*</span></label>
                        <input type="number" value="{{ $edit_order_details->price }}" name="nbrPrice" placeholder="0.00" class="form-control" required>
                    </div>
                </div>
                <div class="admin-form-group">
                    <label>Order Code <span class="required">*</span></label>
                    <input type="text" value="{{ $edit_order_details->order_code }}" name="txtOrCode" placeholder="Enter order code" class="form-control" required>
                </div>
                <div class="admin-form-footer">
                    <a href="{{ route('order_details') }}" class="btn-form-cancel"><i class="fas fa-times"></i> Cancel</a>
                    <button type="submit" class="btn-form-submit btn-success-submit"><i class="fas fa-save"></i> Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
