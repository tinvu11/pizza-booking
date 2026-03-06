@extends('masterTwo')
@section('title', 'LOCATION')
@section('main')
<div class="admin-page">
    <div class="page-header-bar">
        <span class="record-info">Store locations map</span>
    </div>

    <div class="admin-card">
        <div class="admin-card-header">
            <i class="fas fa-map-marker-alt"></i>
            <h4>Store Locations</h4>
        </div>
        <div class="admin-card-body">
            <div class="map-wrapper">
                <iframe src="https://www.google.com/maps/d/embed?mid=14891zw5gSgD0RmeehrFN_DuDRL6pXPXo"></iframe>
            </div>
        </div>
    </div>
</div>
@stop
