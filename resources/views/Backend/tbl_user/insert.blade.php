@extends('masterTwo')
@section('title', 'Add New User')
@section('main')
<div class="admin-page admin-add-edit-page ">
    <a href="{{ route('usertable') }}" class="admin-back-link">
        <i class="fas fa-arrow-left"></i> Back to Users
    </a>
    <div class="admin-card">
        <div class="admin-card-header">
            <i class="fas fa-user-plus"></i>
            <h4>Add New User</h4>
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
            <form action="{{ route('insert_user') }}" method="POST" class="admin-form">
                @csrf
                <div class="admin-form-row">
                    <div class="admin-form-group">
                        <label>ID <span class="required">*</span></label>
                        <input type="number" name="nbrId_user" placeholder="Enter user ID" class="form-control" required>
                    </div>
                    <div class="admin-form-group">
                        <label>Name <span class="required">*</span></label>
                        <input type="text" name="txtName" placeholder="Enter full name" class="form-control" required>
                    </div>
                </div>
                <div class="admin-form-group">
                    <label>Password <span class="required">*</span></label>
                    <input type="password" name="txtPwd_user" placeholder="Enter password" class="form-control" required>
                </div>
                <div class="admin-form-row">
                    <div class="admin-form-group">
                        <label>Phone Number <span class="required">*</span></label>
                        <input type="number" name="nbrPhone" placeholder="Enter phone number" class="form-control" required>
                    </div>
                    <div class="admin-form-group">
                        <label>Email <span class="required">*</span></label>
                        <input type="email" name="txtEmail" placeholder="Enter email address" class="form-control" required>
                    </div>
                </div>
                <div class="admin-form-footer">
                    <a href="{{ route('usertable') }}" class="btn-form-cancel"><i class="fas fa-times"></i> Cancel</a>
                    <button type="submit" class="btn-form-submit"><i class="fas fa-plus"></i> Add User</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
