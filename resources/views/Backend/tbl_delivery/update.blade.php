@extends('masterTwo')
@section('title', 'Edit Delivery')
@section('main')
<div class="admin-page admin-add-edit-page ">
    <a href="{{ route('delivery_order') }}" class="admin-back-link">
        <i class="fas fa-arrow-left"></i> Back to Delivery Orders
    </a>
    <div class="admin-card">
        <div class="admin-card-header">
            <i class="fas fa-truck"></i>
            <h4>Edit Delivery #{{ $edit_delivery->id }}</h4>
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
            <form action="{{ route('update_delivery', $edit_delivery->id) }}" method="POST" class="admin-form">
                @csrf
                <div class="admin-form-row">
                    <div class="admin-form-group">
                        <label>ID</label>
                        <input type="number" value="{{ $edit_delivery->id }}" name="nbrId" class="form-control" readonly style="opacity:.6;cursor:not-allowed">
                    </div>
                    <div class="admin-form-group">
                        <label>Customer ID <span class="required">*</span></label>
                        <input type="number" value="{{ $edit_delivery->id_user }}" name="nbrCusId" placeholder="Enter customer ID" class="form-control" required>
                    </div>
                </div>
                <div class="admin-form-row">
                    <div class="admin-form-group">
                        <label>Phone Number <span class="required">*</span></label>
                        <input type="number" value="{{ $edit_delivery->phone_numbers }}" name="nbrPhone" class="form-control" placeholder="Enter phone number" required>
                    </div>
                    <div class="admin-form-group">
                        <label>Store Name <span class="required">*</span></label>
                        <input type="text" value="{{ $edit_delivery->store_name }}" name="txtStoreName" placeholder="Enter store name" class="form-control" required>
                    </div>
                </div>
                <div class="admin-form-group">
                    <label>Customer Address <span class="required">*</span></label>
                    <input type="text" value="{{ $edit_delivery->customer_address }}" name="txtCusAddress" placeholder="Enter full customer address" class="form-control" required>
                </div>
                <div class="admin-form-group">
                    <label>Order Code <span class="required">*</span></label>
                    <input type="text" value="{{ $edit_delivery->order_code }}" name="txtOrCode" placeholder="Enter order code" class="form-control" required>
                </div>
                <div class="admin-form-footer">
                    <a href="{{ route('delivery_order') }}" class="btn-form-cancel"><i class="fas fa-times"></i> Cancel</a>
                    <button type="submit" class="btn-form-submit btn-success-submit"><i class="fas fa-save"></i> Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
