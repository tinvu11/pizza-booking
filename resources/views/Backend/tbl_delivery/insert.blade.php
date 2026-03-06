@extends('masterTwo')
@section('title', 'Add New Delivery')
@section('main')
<div class="admin-page admin-add-edit-page ">
    <a href="{{ route('delivery_order') }}" class="admin-back-link">
        <i class="fas fa-arrow-left"></i> Back to Delivery Orders
    </a>
    <div class="admin-card">
        <div class="admin-card-header">
            <i class="fas fa-truck"></i>
            <h4>Add New Delivery</h4>
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
            <form action="{{ route('insert_delivery') }}" method="POST" class="admin-form">
                @csrf
                <div class="admin-form-row">
                    <div class="admin-form-group">
                        <label>ID <span class="required">*</span></label>
                        <input type="number" name="nbrId" placeholder="Enter delivery ID" class="form-control" required>
                    </div>
                    <div class="admin-form-group">
                        <label>Customer ID <span class="required">*</span></label>
                        <input type="number" name="nbrCusId" placeholder="Enter customer ID" class="form-control" required>
                    </div>
                </div>
                <div class="admin-form-row">
                    <div class="admin-form-group">
                        <label>Phone Number <span class="required">*</span></label>
                        <input type="number" name="nbrPhone" class="form-control" placeholder="Enter phone number" required>
                    </div>
                    <div class="admin-form-group">
                        <label>Store Name <span class="required">*</span></label>
                        <input type="text" name="txtStoreName" placeholder="Enter store name" class="form-control" required>
                    </div>
                </div>
                <div class="admin-form-group">
                    <label>Customer Address <span class="required">*</span></label>
                    <input type="text" name="txtCusAddress" placeholder="Enter full customer address" class="form-control" required>
                </div>
                <div class="admin-form-group">
                    <label>Order Code <span class="required">*</span></label>
                    <input type="text" name="txtOrCode" placeholder="Enter order code" class="form-control" required>
                </div>
                <div class="admin-form-footer">
                    <a href="{{ route('delivery_order') }}" class="btn-form-cancel"><i class="fas fa-times"></i> Cancel</a>
                    <button type="submit" class="btn-form-submit"><i class="fas fa-plus"></i> Add Delivery</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
