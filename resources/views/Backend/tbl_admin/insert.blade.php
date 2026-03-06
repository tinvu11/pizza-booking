@extends('masterTwo')
@section('title', 'Add New Admin')
@section('main')
<div class="admin-page admin-add-edit-page ">
    <a href="{{ route('usertable') }}" class="admin-back-link">
        <i class="fas fa-arrow-left"></i> Back to Users
    </a>
    <div class="admin-card">
        <div class="admin-card-header">
            <i class="fas fa-user-shield"></i>
            <h4>Add New Admin</h4>
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
            <form action="{{ route('insert') }}" method="POST" class="admin-form">
                @csrf
                <div class="admin-form-row">
                    <div class="admin-form-group">
                        <label>ID <span class="required">*</span></label>
                        <input type="number" name="nbrId" placeholder="Enter admin ID" class="form-control" required>
                    </div>
                    <div class="admin-form-group">
                        <label>Permission <span class="required">*</span></label>
                        <input type="text" name="txtPermission" placeholder="e.g. admin, editor" class="form-control" required>
                    </div>
                </div>
                <div class="admin-form-group">
                    <label>User Name <span class="required">*</span></label>
                    <input type="text" name="txtUserName" placeholder="Enter user name" class="form-control" required>
                </div>
                <div class="admin-form-group">
                    <label>Password <span class="required">*</span></label>
                    <input type="password" name="txtPwd" placeholder="Enter password" class="form-control" required>
                </div>
                <div class="admin-form-footer">
                    <a href="{{ route('usertable') }}" class="btn-form-cancel"><i class="fas fa-times"></i> Cancel</a>
                    <button type="submit" class="btn-form-submit" ><i class="fas fa-plus"></i> Add Admin</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
