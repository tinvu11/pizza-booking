@extends('masterTwo')
@section('title', 'Edit User')
@section('main')
<div class="admin-page admin-add-edit-page ">
    <a href="{{ route('usertable') }}" class="admin-back-link">
        <i class="fas fa-arrow-left"></i> Back to Users
    </a>
    <div class="admin-card">
        <div class="admin-card-header">
            <i class="fas fa-user-edit"></i>
            <h4>Edit User #{{ $edit_user->id }}</h4>
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
            <form action="{{ route('update_user', $edit_user->id) }}" method="POST" class="admin-form">
                @csrf
                <div class="admin-form-row">
                    <div class="admin-form-group">
                        <label>ID</label>
                        <input type="number" name="nbrId_user" class="form-control" value="{{ $edit_user->id }}" readonly style="opacity:.6;cursor:not-allowed">
                    </div>
                    <div class="admin-form-group">
                        <label>Name <span class="required">*</span></label>
                        <input type="text" name="txtName" placeholder="Enter full name" class="form-control" value="{{ $edit_user->name }}" required>
                    </div>
                </div>
                <div class="admin-form-group">
                    <label>Password <span class="required">*</span></label>
                    <input type="password" name="txtPwd_user" placeholder="Enter new password" class="form-control" value="{{ $edit_user->password }}">
                </div>
                <div class="admin-form-row">
                    <div class="admin-form-group">
                        <label>Phone Number <span class="required">*</span></label>
                        <input type="number" name="nbrPhone" placeholder="Enter phone number" class="form-control" value="{{ $edit_user->phone_number }}" required>
                    </div>
                    <div class="admin-form-group">
                        <label>Email <span class="required">*</span></label>
                        <input type="email" name="txtEmail" placeholder="Enter email address" class="form-control" value="{{ $edit_user->email }}" required>
                    </div>
                </div>
                <div class="admin-form-footer">
                    <a href="{{ route('usertable') }}" class="btn-form-cancel"><i class="fas fa-times"></i> Cancel</a>
                    <button type="submit" class="btn-form-submit btn-success-submit"><i class="fas fa-save"></i> Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
