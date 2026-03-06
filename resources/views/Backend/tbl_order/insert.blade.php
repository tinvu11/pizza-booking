@extends('masterTwo')
@section('title', 'Add New Order')
@section('main')
<div class="admin-page admin-add-edit-page ">
    <a href="{{ route('index_order') }}" class="admin-back-link">
        <i class="fas fa-arrow-left"></i> Back to Orders
    </a>
    <div class="admin-card">
        <div class="admin-card-header">
            <i class="fas fa-shopping-cart"></i>
            <h4>Add New Order</h4>
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
            <form action="{{ route('insert_order') }}" method="POST" class="admin-form">
                @csrf
                <div class="admin-form-row">
                    <div class="admin-form-group">
                        <label>Date Created <span class="required">*</span></label>
                        <input type="datetime-local" name="txtDate" class="form-control" required>
                    </div>
                    <div class="admin-form-group">
                        <label>User ID <span class="required">*</span></label>
                        <input type="number" name="txtUserId" class="form-control" placeholder="Enter user ID" required>
                    </div>
                </div>
                <div class="admin-form-row">
                    <div class="admin-form-group">
                        <label>Detail ID <span class="required">*</span></label>
                        <input type="number" name="txtUserDetailId" class="form-control" placeholder="Enter detail ID" required>
                    </div>
                    <div class="admin-form-group">
                        <label>Status <span class="required">*</span></label>
                        <input type="text" name="txtStatus" placeholder="e.g. Pending, Completed" class="form-control" required>
                    </div>
                </div>
                <div class="admin-form-footer">
                    <a href="{{ route('index_order') }}" class="btn-form-cancel"><i class="fas fa-times"></i> Cancel</a>
                    <button type="submit" class="btn-form-submit"><i class="fas fa-plus"></i> Add Order</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
