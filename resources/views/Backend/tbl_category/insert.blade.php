@extends('masterTwo')
@section('title', 'Add New Category')
@section('main')
<div class="admin-page admin-add-edit-page ">
    <a href="{{ route('menutable') }}" class="admin-back-link">
        <i class="fas fa-arrow-left"></i> Back to Menu
    </a>
    <div class="admin-card">
        <div class="admin-card-header">
            <i class="fas fa-folder-plus"></i>
            <h4>Add New Category</h4>
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
            <form action="{{ route('insert_category') }}" method="POST" enctype="multipart/form-data" class="admin-form">
                @csrf
                <div class="admin-form-row">
                    <div class="admin-form-group">
                        <label>ID <span class="required">*</span></label>
                        <input type="number" name="nbrId" placeholder="Enter category ID" class="form-control" required>
                    </div>
                    <div class="admin-form-group">
                        <label>Category Name <span class="required">*</span></label>
                        <input type="text" name="txtCatName" placeholder="Enter category name" class="form-control" required>
                    </div>
                </div>
                <div class="admin-form-group">
                    <label>Category Image</label>
                    <div class="custom-file-zone">
                        <i class="fas fa-cloud-upload-alt"></i>
                        <p>Click to upload or drag & drop image</p>
                        <input type="file" name="txtCatImage">
                    </div>
                </div>
                <div class="admin-form-group">
                    <label>Description</label>
                    <textarea name="txtDes" class="form-control" placeholder="Enter category description"></textarea>
                </div>
                <div class="admin-form-footer">
                    <a href="{{ route('menutable') }}" class="btn-form-cancel"><i class="fas fa-times"></i> Cancel</a>
                    <button type="submit" class="btn-form-submit"><i class="fas fa-plus"></i> Add Category</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
