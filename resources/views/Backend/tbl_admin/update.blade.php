@extends('masterTwo')
@section('title', 'Edit Admin')
@section('main')
<div class="admin-page admin-add-edit-page ">
    <a href="{{ route('usertable') }}" class="admin-back-link">
        <i class="fas fa-arrow-left"></i> Back to Users
    </a>
    <div class="admin-card">
        <div class="admin-card-header">
            <i class="fas fa-user-edit"></i>
            <h4>Edit Admin #{{ $edit->id }}</h4>
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
            <form action="{{ route('update', $edit->id) }}" method="POST" class="admin-form">
                @csrf
                <div class="admin-form-row">
                    <div class="admin-form-group">
                        <label>ID</label>
                        <input type="number" class="form-control" name="nbrId" value="{{ $edit->id }}" readonly style="opacity:.6;cursor:not-allowed">
                    </div>
                    <div class="admin-form-group">
                        <label>Permission <span class="required">*</span></label>
                        <input type="text" class="form-control" name="txtPermission" placeholder="Enter Permission" value="{{ $edit->permission }}" required>
                    </div>
                </div>
                <div class="admin-form-group">
                    <label>User Name <span class="required">*</span></label>
                    <input type="text" class="form-control" name="txtUserName" placeholder="Enter User Name" value="{{ $edit->user_name }}" required>
                </div>
                <div class="admin-form-group">
                    <label>Password <span class="required">*</span></label>
                    <input type="password" class="form-control" name="txtPwd" placeholder="Enter new password" value="{{ $edit->password }}">
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
