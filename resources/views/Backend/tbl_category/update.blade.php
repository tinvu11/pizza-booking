@extends('masterTwo')
@section('title', 'Edit Category')
@section('main')
<div class="admin-page admin-add-edit-page ">
    <a href="{{ route('menutable') }}" class="admin-back-link">
        <i class="fas fa-arrow-left"></i> Back to Menu
    </a>
    <div class="admin-card">
        <div class="admin-card-header">
            <i class="fas fa-folder-open"></i>
            <h4>Edit Category #{{ $edit->id }}</h4>
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
            <form action="{{ route('update_category', $edit->id) }}" method="POST" enctype="multipart/form-data" class="admin-form">
                @csrf
                <div class="admin-form-row">
                    <div class="admin-form-group">
                        <label>ID</label>
                        <input type="number" name="nbrId" class="form-control" value="{{ $edit->id }}" readonly style="opacity:.6;cursor:not-allowed">
                    </div>
                    <div class="admin-form-group">
                        <label>Category Name <span class="required">*</span></label>
                        <input type="text" name="txtCatName" placeholder="Enter category name" class="form-control" value="{{ $edit->cat_name }}" required>
                    </div>
                </div>
                <div class="admin-form-group">
                    <label>Category Image</label>
                    <div class="custom-file-zone">
                        <i class="fas fa-cloud-upload-alt"></i>
                        <p>Click to upload a new image (leave empty to keep current)</p>
                        <input type="file" name="txtCatImage">
                    </div>
                </div>
                <div class="admin-form-group">
                    <label>Description</label>
                    <textarea name="txtDes" class="form-control" placeholder="Enter category description">{{ $edit->cat_description }}</textarea>
                </div>
                <div class="admin-form-footer">
                    <a href="{{ route('menutable') }}" class="btn-form-cancel"><i class="fas fa-times"></i> Cancel</a>
                    <button type="submit" class="btn-form-submit btn-success-submit"><i class="fas fa-save"></i> Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
