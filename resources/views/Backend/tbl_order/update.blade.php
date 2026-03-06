@extends('masterTwo')
@section('title', 'Edit Order')
@section('main')
<div class="admin-page admin-add-edit-page ">
    <a href="{{ route('index_order') }}" class="admin-back-link">
        <i class="fas fa-arrow-left"></i> Back to Orders
    </a>
    <div class="admin-card">
        <div class="admin-card-header">
            <i class="fas fa-shopping-cart"></i>
            <h4>Edit Order #{{ $edit_order->id }}</h4>
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
            <form action="{{ route('update_order', $edit_order->id) }}" method="POST" class="admin-form">
                @csrf
                <div class="admin-form-group">
                    <label>Status <span class="required">*</span></label>
                    <input type="text" value="{{ $edit_order->status }}" name="txtStatus" placeholder="e.g. Pending, Completed, Cancelled" class="form-control" required>
                    <div class="form-hint">Update the order status</div>
                </div>
                <div class="admin-form-footer">
                    <a href="{{ route('index_order') }}" class="btn-form-cancel"><i class="fas fa-times"></i> Cancel</a>
                    <button type="submit" class="btn-form-submit btn-success-submit"><i class="fas fa-save"></i> Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
