@extends('masterTwo')
@section('title', 'GALLERY')
@section('main')
<div class="admin-page">
    <div class="page-header-bar">
        <span class="record-info">Photo gallery management</span>
        <div style="display:flex; gap:8px;">
            <a href="{{route('create_img')}}" class="btn-add">
                <i class="fas fa-plus"></i> Add Photos
            </a>
            <a href="{{route('delete_img')}}" class="btn-act btn-act-delete" style="padding:9px 16px; font-size:0.8rem;" onclick="return confirm('Delete entire album?')">
                <i class="fas fa-trash"></i> Delete Album
            </a>
        </div>
    </div>

    <div class="admin-card">
        <div class="admin-card-header">
            <i class="fas fa-images"></i>
            <h4>Photo Gallery</h4>
        </div>
        <div class="admin-card-body">
            <div class="gallery-grid">
                @foreach($index_gal as $select_gal)
                <div class="gallery-grid-item">
                    <img src="{{asset('gallery/'.$select_gal->img)}}" alt="gallery">
                </div>
                @endforeach
            </div>
            @if(count($index_gal) == 0)
            <div class="empty-state">
                <i class="fas fa-image"></i>
                <p>No photos uploaded yet</p>
            </div>
            @endif
        </div>
    </div>
</div>
@stop
