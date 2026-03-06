@extends('masterTwo')
@section('title', 'FRANCHISE INFO')
@section('main')
<div class="admin-page">
    <div class="page-header-bar">
        <span class="record-info">Franchise store information</span>
        <button type="button" class="btn-add">
            <i class="fas fa-plus"></i> Add New Store
        </button>
    </div>

    <div class="admin-card">
        <div class="admin-card-header">
            <i class="fas fa-handshake"></i>
            <h4>Franchise Stores</h4>
        </div>
        <div class="admin-card-body">
            <div class="table-responsive">
                <table class="admin-table text-center">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Store Name</th>
                            <th>Location</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th width="140">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="cell-id">#1</td>
                            <td class="cell-bold">Shale-Pizza Thai Ha</td>
                            <td class="cell-muted text-left">120 Thai Ha Dong Da HN</td>
                            <td class="cell-muted">0968987456</td>
                            <td class="cell-muted">shalethaiha@gmail.com</td>
                            <td>
                                <div class="action-cell">
                                    <button class="btn-act btn-act-edit"><i class="fa fa-edit"></i> Edit</button>
                                    <button class="btn-act btn-act-delete" onclick="return confirm('Delete this store?')"><i class="fa fa-trash"></i> Del</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="cell-id">#2</td>
                            <td class="cell-bold">Shale-Pizza Pho Hue</td>
                            <td class="cell-muted text-left">222 Pho Hue Ba Dinh</td>
                            <td class="cell-muted">0968345789</td>
                            <td class="cell-muted">shalephohue@gmail.com</td>
                            <td>
                                <div class="action-cell">
                                    <button class="btn-act btn-act-edit"><i class="fa fa-edit"></i> Edit</button>
                                    <button class="btn-act btn-act-delete" onclick="return confirm('Delete this store?')"><i class="fa fa-trash"></i> Del</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop
