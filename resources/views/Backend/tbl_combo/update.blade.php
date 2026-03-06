@extends('masterTwo')
@section('title', 'Edit Combo')
@section('main')
<div class="admin-page admin-add-edit-page ">
    <a href="{{ route('weekend') }}" class="admin-back-link">
        <i class="fas fa-arrow-left"></i> Back to Weekend Special
    </a>
    <div class="admin-card">
        <div class="admin-card-header">
            <i class="fas fa-layer-group"></i>
            <h4>Edit Combo #{{ $edit_combo->id }}</h4>
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
            <form action="{{ route('update_combo', $edit_combo->id) }}" method="POST" enctype="multipart/form-data" class="admin-form">
                @csrf
                <div class="admin-form-group">
                    <label>ID</label>
                    <input type="number" value="{{ $edit_combo->id }}" name="txtId" class="form-control" readonly style="opacity:.6;cursor:not-allowed">
                </div>
                <div class="admin-form-group">
                    <label>Combo Image</label>
                    <div class="custom-file-zone">
                        <i class="fas fa-cloud-upload-alt"></i>
                        <p>Click to upload a new image (leave empty to keep current)</p>
                        <input type="file" name="txtComboImg">
                    </div>
                </div>
                <div class="admin-form-group">
                    <label>Description <span class="required">*</span></label>
                    <textarea name="txtDescription" class="form-control" required>{{ $edit_combo->description }}</textarea>
                </div>
                <div class="admin-form-row">
                    <div class="admin-form-group">
                        <label>Price <span class="required">*</span></label>
                        <input type="number" value="{{ $edit_combo->price }}" name="txtPrice" placeholder="0.00" class="form-control" required>
                    </div>
                    <div class="admin-form-group">
                        <label>Status <span class="required">*</span></label>
                        <select name="txtStatus" class="form-control">
                            <option value="Available" {{ $edit_combo->status == 'Available' ? 'selected' : '' }}>Available</option>
                            <option value="Expired" {{ $edit_combo->status == 'Expired' ? 'selected' : '' }}>Expired</option>
                        </select>
                    </div>
                </div>
                <div class="admin-form-footer">
                    <a href="{{ route('weekend') }}" class="btn-form-cancel"><i class="fas fa-times"></i> Cancel</a>
                    <button type="submit" class="btn-form-submit btn-success-submit"><i class="fas fa-save"></i> Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
