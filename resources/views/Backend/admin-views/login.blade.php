<!DOCTYPE html>
<html>
<head>
	<title>Admin Login - Pizza Online</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<style>
		body {
			background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
			min-height: 100vh;
			display: flex;
			align-items: center;
			justify-content: center;
		}
		.login-card {
			max-width: 420px;
			width: 100%;
			border-radius: 16px;
			box-shadow: 0 20px 60px rgba(0,0,0,0.3);
			border: none;
		}
		.login-card .card-header {
			background: #ffffff;
			border-bottom: 1px solid #e2e8f0;
			border-radius: 16px 16px 0 0 !important;
			padding: 28px;
			text-align: center;
		}
		.login-card .card-header h3 {
			margin: 0;
			font-weight: 700;
			color: #1e293b;
		}
		.login-card .card-header p {
			margin: 8px 0 0;
			color: #64748b;
			font-size: 0.9rem;
		}
		.login-card .card-body {
			padding: 28px;
		}
		.btn-login {
			background: linear-gradient(135deg, #3b82f6, #1d4ed8);
			border: none;
			padding: 12px;
			font-weight: 600;
			font-size: 1rem;
			border-radius: 10px;
		}
		.btn-login:hover {
			background: linear-gradient(135deg, #2563eb, #1e40af);
		}
	</style>
</head>
<body>
	<div class="login-card card">
		<div class="card-header">
			<h3>🍕 Pizza Online</h3>
			<p>Đăng nhập trang quản trị</p>
		</div>
		<div class="card-body">
			@if($message = Session::get('errLogin'))
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<p class="mb-0">{{$message}}</p>
					<button type="button" class="close" data-dismiss="alert">&times;</button>
				</div>
			@endif
			<form method='POST' action="{{route('admin-login')}}">
				@csrf
				<div class='form-group'>
					<label class='text-secondary font-weight-bold'>Tên đăng nhập</label>
					<input type="text" placeholder="Nhập tên đăng nhập" class='form-control' name="txtUserName" required>
				</div>
				<div class="form-group">
					<label class='text-secondary font-weight-bold'>Mật khẩu</label>
					<input type="password" placeholder="Nhập mật khẩu" class='form-control' name="txtPwd" required>
				</div>
				<div class='form-group'>
					<input class="btn btn-primary btn-login btn-block" type="submit" value="Đăng nhập">
				</div>
			</form>
			<div class="text-center mt-2">
				<a href="{{url('home')}}" class="text-muted" style="font-size: 0.85rem;">← Quay về trang chủ</a>
			</div>
		</div>
	</div>
</body>
</html>