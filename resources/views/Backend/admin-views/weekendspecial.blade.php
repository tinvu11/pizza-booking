@extends('masterTwo')
@section('title', 'WEEKEND SPECIAL')
@section('main')
<div class="admin-page">
    <div class="page-header-bar">
        <span class="record-info">Weekend combo offers</span>
        <a href="{{route('create_combo')}}" class="btn-add">
            <i class="fas fa-plus"></i> Add New Combo
        </a>
    </div>

    <div class="admin-card">
        <div class="admin-card-header">
            <i class="fas fa-star"></i>
            <h4>Weekend Special Combos</h4>
        </div>
        <div class="admin-card-body">
            <div class="table-responsive">
                <table class="admin-table text-center">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th width="140">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($index_combo as $select_combo)
                        <tr>
                            <td class="cell-id">#{{$select_combo->id}}</td>
                            <td>
                                <img src="{{asset('combo/'.$select_combo->combo_img)}}" class="tbl-thumb-lg" alt="combo">
                            </td>
                            <td class="text-left cell-muted" style="max-width: 280px;">{{$select_combo->description}}</td>
                            <td class="cell-price">${{number_format($select_combo->price, 2)}}</td>
                            <td>
                                @php
                                    $sClass = 'cell-badge-success';
                                    if(strtolower($select_combo->status) == 'inactive' || strtolower($select_combo->status) == 'off') $sClass = 'cell-badge-danger';
                                @endphp
                                <span class="cell-badge {{$sClass}}">{{$select_combo->status}}</span>
                            </td>
                            <td>
                                <div class="action-cell">
                                    <a href="{{route('edit_combo', $select_combo->id)}}" class="btn-act btn-act-edit"><i class="fa fa-edit"></i> Edit</a>
                                    <a href="{{route('delete_combo', $select_combo->id)}}" class="btn-act btn-act-delete" onclick="return confirm('Delete this combo?')"><i class="fa fa-trash"></i> Del</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop
