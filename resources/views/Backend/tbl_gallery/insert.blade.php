@extends('masterTwo')
@section('title', 'Add New Image')
@section('main')
<div class="admin-page admin-add-edit-page ">
    <a href="{{ route('gallery-admin') }}" class="admin-back-link">
        <i class="fas fa-arrow-left"></i> Back to Gallery
    </a>
    <div class="admin-card">
        <div class="admin-card-header">
            <i class="fas fa-image"></i>
            <h4>Add New Image</h4>
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
            <form action="{{ route('insert_img') }}" method="POST" enctype="multipart/form-data" class="admin-form">
                @csrf
                <div class="admin-form-group">
                    <label>Image <span class="required">*</span></label>
                    <div class="custom-file-zone">
                        <i class="fas fa-cloud-upload-alt"></i>
                        <p>Click to upload or drag & drop image</p>
                        <input type="file" name="txtImg" required>
                    </div>
                </div>
                <div class="admin-form-group">
                    <label>Description</label>
                    <textarea name="txtImgDescription" class="form-control" placeholder="Enter image description (optional)"></textarea>
                </div>
                <div class="admin-form-footer">
                    <a href="{{ route('gallery-admin') }}" class="btn-form-cancel"><i class="fas fa-times"></i> Cancel</a>
                    <button type="submit" class="btn-form-submit"><i class="fas fa-plus"></i> Add Image</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
