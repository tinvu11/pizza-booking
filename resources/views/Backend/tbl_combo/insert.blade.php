@extends('masterTwo')
@section('title', 'Add New Combo')
@section('main')
<div class="admin-page admin-add-edit-page ">
    <a href="{{ route('weekend') }}" class="admin-back-link">
        <i class="fas fa-arrow-left"></i> Back to Weekend Special
    </a>
    <div class="admin-card">
        <div class="admin-card-header">
            <i class="fas fa-layer-group"></i>
            <h4>Add New Combo</h4>
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
            <form action="{{ route('insert_combo') }}" method="POST" enctype="multipart/form-data" class="admin-form">
                @csrf
                <div class="admin-form-group">
                    <label>Combo Image</label>
                    <div class="custom-file-zone">
                        <i class="fas fa-cloud-upload-alt"></i>
                        <p>Click to upload combo image</p>
                        <input type="file" name="txtComboImg">
                    </div>
                </div>
                <div class="admin-form-group">
                    <label>Description <span class="required">*</span></label>
                    <textarea name="txtDescription" class="form-control" placeholder="Enter combo description" required></textarea>
                </div>
                <div class="admin-form-row">
                    <div class="admin-form-group">
                        <label>Price <span class="required">*</span></label>
                        <input type="number" name="txtPrice" placeholder="0.00" class="form-control" required>
                        <div class="form-hint">Enter price in USD</div>
                    </div>
                    <div class="admin-form-group">
                        <label>Status <span class="required">*</span></label>
                        <select name="txtStatus" class="form-control">
                            <option value="Available">Available</option>
                            <option value="Expired">Expired</option>
                        </select>
                    </div>
                </div>
                <div class="admin-form-footer">
                    <a href="{{ route('weekend') }}" class="btn-form-cancel"><i class="fas fa-times"></i> Cancel</a>
                    <button type="submit" class="btn-form-submit"><i class="fas fa-plus"></i> Add Combo</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
