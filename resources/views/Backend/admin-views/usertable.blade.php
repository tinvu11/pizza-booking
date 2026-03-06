@extends('masterTwo')
@section('title', 'USERS')
@section('main')
<div class="admin-page">
    <!-- Admin Table -->
    @if($message = Session::get('success'))
        <div class="admin-alert alert-success">
            <i class="fas fa-check-circle"></i> {{$message}}
        </div>
    @endif

    <div class="page-header-bar">
        <span class="record-info"><strong>{{count($index_admin)}}</strong> admin accounts</span>
        <a href="{{route('create')}}" class="btn-add">
            <i class="fas fa-plus"></i> Add Admin
        </a>
    </div>

    <div class="admin-card">
        <div class="admin-card-header">
            <i class="fas fa-user-shield"></i>
            <h4>Admin Accounts</h4>
        </div>
        <div class="admin-card-body">
            <div class="table-responsive">
                <table class="admin-table text-center">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Permission</th>
                            <th>Username</th>
                            <th width="140">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($index_admin as $select_admin)
                        <tr>
                            <td class="cell-id">#{{$select_admin->id}}</td>
                            <td>
                                <span class="cell-badge cell-badge-warning">{{$select_admin->permission}}</span>
                            </td>
                            <td class="cell-bold">{{$select_admin->user_name}}</td>
                            <td>
                                <div class="action-cell">
                                    <a href="{{route('edit', $select_admin->id)}}" class="btn-act btn-act-edit"><i class="fa fa-edit"></i> Edit</a>
                                    <a href="{{route('delete', $select_admin->id)}}" class="btn-act btn-act-delete" onclick="return confirm('Delete this admin?')"><i class="fa fa-trash"></i> Del</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- User Table -->
    @if($message = Session::get('success_user'))
        <div class="admin-alert alert-success">
            <i class="fas fa-check-circle"></i> {{$message}}
        </div>
    @endif

    <div class="page-header-bar">
        <span class="record-info"><strong>{{count($index_user)}}</strong> registered users</span>
        <a href="{{route('create_user')}}" class="btn-add">
            <i class="fas fa-plus"></i> Add User
        </a>
    </div>

    <div class="admin-card">
        <div class="admin-card-header">
            <i class="fas fa-users"></i>
            <h4>Registered Users</h4>
        </div>
        <div class="admin-card-body">
            <div class="table-responsive">
                <table class="admin-table text-center">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th width="140">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($index_user as $select_user)
                        <tr>
                            <td class="cell-id">#{{$select_user->id}}</td>
                            <td class="cell-bold">{{$select_user->name}}</td>
                            <td class="cell-muted">{{$select_user->phone_number}}</td>
                            <td class="cell-muted">{{$select_user->email}}</td>
                            <td>
                                <div class="action-cell">
                                    <a href="{{route('edit_user', $select_user->id)}}" class="btn-act btn-act-edit"><i class="fa fa-edit"></i> Edit</a>
                                    <a href="{{route('delete_user', $select_user->id)}}" class="btn-act btn-act-delete" onclick="return confirm('Delete this user?')"><i class="fa fa-trash"></i> Del</a>
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
