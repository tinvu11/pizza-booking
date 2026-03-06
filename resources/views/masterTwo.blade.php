<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
  	<link rel="stylesheet" type="text/css" href="{{asset('Style/Style.css')}}">
	<title>@yield('title')</title>
	<style>
		/* ===== FIXED SIDEBAR ===== */
		#sidebar {
			position: fixed !important;
			top: 0;
			left: 0;
			bottom: 0;
			width: 260px;
			min-width: 260px;
			max-width: 260px;
			z-index: 1040;
			background: linear-gradient(180deg, #1e293b 0%, #0f172a 100%);
			overflow-y: auto;
			overflow-x: hidden;
			transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
			box-shadow: 2px 0 20px rgba(0,0,0,0.15);
			display: flex;
			flex-direction: column;
		}

		#sidebar::-webkit-scrollbar {
			width: 4px;
		}
		#sidebar::-webkit-scrollbar-track {
			background: transparent;
		}
		#sidebar::-webkit-scrollbar-thumb {
			background: rgba(255,255,255,0.15);
			border-radius: 4px;
		}

		#sidebar.active {
			width: 78px;
			min-width: 78px;
			max-width: 78px;
		}

		/* Sidebar Brand */
		.sidebar-brand {
			padding: 24px 20px 20px;
			display: flex;
			align-items: center;
			gap: 12px;
			border-bottom: 1px solid rgba(255,255,255,0.08);
			margin-bottom: 8px;
			flex-shrink: 0;
		}
		.sidebar-brand img {
			width: 42px;
			height: 42px;
			border-radius: 10px;
		}
		.sidebar-brand .brand-text {
			color: #ffffff;
			font-size: 1.1rem;
			font-weight: 700;
			letter-spacing: 0.5px;
			white-space: nowrap;
		}
		.sidebar-brand .brand-sub {
			color: rgba(255,255,255,0.4);
			font-size: 0.7rem;
			text-transform: uppercase;
			letter-spacing: 1.5px;
		}

		#sidebar.active .sidebar-brand .brand-text,
		#sidebar.active .sidebar-brand .brand-sub {
			display: none;
		}

		/* Sidebar Section Label */
		.sidebar-section-label {
			color: rgba(255,255,255,0.35);
			font-size: 0.65rem;
			font-weight: 700;
			text-transform: uppercase;
			letter-spacing: 1.5px;
			padding: 16px 24px 8px;
		}
		#sidebar.active .sidebar-section-label {
			display: none;
		}

		/* Sidebar Nav Items */
		#sidebar ul.components {
			padding: 0;
			flex: 1;
		}

		#sidebar ul li a {
			padding: 11px 24px;
			font-size: 0.85rem;
			font-weight: 500;
			color: rgba(255,255,255,0.6);
			display: flex;
			align-items: center;
			gap: 14px;
			transition: all 0.2s ease;
			border-left: 3px solid transparent;
			margin: 2px 0;
			text-decoration: none;
		}

		#sidebar ul li a:hover {
			color: #ffffff;
			background: rgba(255,255,255,0.06);
			border-left-color: rgba(99, 179, 237, 0.5);
		}

		#sidebar ul li.active-item > a {
			color: #ffffff;
			background: rgba(99, 179, 237, 0.12);
			border-left-color: #63b3ed;
		}

		#sidebar ul li a i {
			width: 20px;
			text-align: center;
			font-size: 1rem;
			color: rgba(255,255,255,0.45);
			margin-right: 0;
			flex-shrink: 0;
		}

		#sidebar ul li a:hover i,
		#sidebar ul li.active-item a i {
			color: #63b3ed;
		}

		#sidebar ul li a .nav-text {
			white-space: nowrap;
		}

		/* Order badge */
		.nav-badge {
			background: #ef4444;
			color: #fff;
			font-size: 0.65rem;
			font-weight: 700;
			padding: 2px 7px;
			border-radius: 10px;
			margin-left: auto;
			line-height: 1.4;
			min-width: 20px;
			text-align: center;
		}
		#sidebar.active .nav-badge {
			display: none;
		}

		#sidebar.active ul li a .nav-text {
			display: none;
		}

		#sidebar.active ul li a {
			justify-content: center;
			padding: 14px 0;
			border-left: none;
		}

		/* Sign Out */
		.sidebar-footer {
			padding: 16px 20px;
			border-top: 1px solid rgba(255,255,255,0.08);
			flex-shrink: 0;
		}
		.sidebar-footer .btn-signout {
			width: 100%;
			background: #ed3737;
			color: #efeaea;
			border-radius: 8px;
			padding: 10px;
			font-size: 0.8rem;
			font-weight: 600;
			transition: all 0.2s ease;
			display: flex;
			align-items: center;
			justify-content: center;
			gap: 8px;
		}
	
		#sidebar.active .sidebar-footer .signout-text {
			display: none;
		}

		/* ===== TOP NAVBAR ===== */
		.admin-topbar {
			position: fixed;
			top: 0;
			left: 260px;
			right: 0;
			height: 64px;
			background: #ffffff;
			border-bottom: 1px solid #e2e8f0;
			display: flex;
			align-items: center;
			justify-content: space-between;
			padding: 0 28px;
			z-index: 1030;
			transition: left 0.3s cubic-bezier(0.4, 0, 0.2, 1);
		}

		#sidebar.active ~ .main-wrapper .admin-topbar {
			left: 78px;
		}

		.topbar-left {
			display: flex;
			align-items: center;
			gap: 16px;
		}

		#sidebarCollapse {
			background: none;
			border: 1px solid #e2e8f0;
			border-radius: 8px;
			width: 38px;
			height: 38px;
			display: flex;
			align-items: center;
			justify-content: center;
			color: #64748b;
			cursor: pointer;
			transition: all 0.2s;
			padding: 0;
		}
		#sidebarCollapse:hover {
			background: #f1f5f9;
			color: #1e293b;
		}
		#sidebarCollapse span {
			display: none;
		}

		.topbar-title {
			font-size: 1rem;
			font-weight: 600;
			color: #1e293b;
		}

		.topbar-right {
			display: flex;
			align-items: center;
			gap: 12px;
		}
		.topbar-right .admin-avatar {
			width: 36px;
			height: 36px;
			border-radius: 50%;
			object-fit: cover;
			border: 2px solid #e2e8f0;
		}
		.topbar-right .admin-name {
			font-size: 0.85rem;
			font-weight: 600;
			color: #1e293b;
		}

		/* ===== MAIN CONTENT AREA ===== */
		.main-wrapper {
			margin-left: 260px;
			transition: margin-left 0.3s cubic-bezier(0.4, 0, 0.2, 1);
			min-height: 100vh;
		}

		#sidebar.active ~ .main-wrapper {
			margin-left: 78px;
		}

		#content {
			padding: 88px 28px 28px;
			min-height: 100vh;
			width: 100%;
		}

		/* ===== RESPONSIVE ===== */
		@media (max-width: 768px) {
			#sidebar {
				margin-left: -260px;
			}
			#sidebar.active {
				margin-left: 0;
				width: 260px;
				min-width: 260px;
				max-width: 260px;
			}
			.main-wrapper {
				margin-left: 0;
			}
			.admin-topbar {
				left: 0;
			}
			#sidebar.active ~ .main-wrapper {
				margin-left: 0;
			}
			#sidebar.active ~ .main-wrapper .admin-topbar {
				left: 0;
			}
		}
	</style>
</head>
<body>
	<!-- Fixed Sidebar -->
	<nav id="sidebar">
		<div class="sidebar-brand">
			<img src="{{asset('style/logo.png')}}" alt="Logo">
			<div>
				<div class="brand-text">Shale-Pizza</div>
				<div class="brand-sub">Admin Panel</div>
			</div>
		</div>

		<div class="sidebar-section-label">Main</div>
		<ul class="list-unstyled components">
			<li>
				<a href="{{route('dashboard')}}">
					<i class="fas fa-tachometer-alt"></i>
					<span class="nav-text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="{{route('menutable')}}">
					<i class="fas fa-bars"></i>
					<span class="nav-text">Menu</span>
				</a>
			</li>
			<li>
				<a href="{{route('index_order')}}">
					<i class="fas fa-shopping-cart"></i>
					<span class="nav-text">Orders</span>
					@if(isset($sidebarOrderCount) && $sidebarOrderCount > 0)
						<span class="nav-badge">{{ $sidebarOrderCount }}</span>
					@endif
				</a>
			</li>
			<li>
				<a href="{{route('delivery_order')}}">
					<i class="fas fa-shipping-fast"></i>
					<span class="nav-text">Delivery</span>
				</a>
			</li>
			<li>
				<a href="{{route('order_details')}}">
					<i class="fas fa-file-alt"></i>
					<span class="nav-text">Order Details</span>
				</a>
			</li>
			<li>
				<a href="{{route('usertable')}}">
					<i class="fas fa-users"></i>
					<span class="nav-text">Users</span>
				</a>
			</li>

			<div class="sidebar-section-label">Content</div>
			<li>
				<a href="{{route('weekend')}}">
					<i class="fas fa-star"></i>
					<span class="nav-text">Weekend Special</span>
				</a>
			</li>
			<li>
				<a href="{{route('gallery-admin')}}">
					<i class="fas fa-images"></i>
					<span class="nav-text">Gallery</span>
				</a>
			</li>
			<li>
				<a href="{{route('location')}}">
					<i class="fas fa-map-marker-alt"></i>
					<span class="nav-text">Location</span>
				</a>
			</li>
			<li>
				<a href="{{route('feedback')}}">
					<i class="fas fa-envelope"></i>
					<span class="nav-text">Feedback</span>
				</a>
			</li>
			<li>
				<a href="{{route('franchiesinfo')}}">
					<i class="fas fa-handshake"></i>
					<span class="nav-text">Franchise Info</span>
				</a>
			</li>
		</ul>

		<div class="sidebar-footer">
			<a href="{{route('admin.logout')}}" class="btn btn-signout">
				<i class="fas fa-sign-out-alt"></i>
				<span class="signout-text">Sign Out</span>
			</a>
		</div>
	</nav>

	<!-- Main Wrapper -->
	<div class="main-wrapper">
		<!-- Top Navbar -->
		<div class="admin-topbar">
			<div class="topbar-left">
				<button type="button" id="sidebarCollapse">
					<i class="fas fa-bars"></i>
					<span>Toggle</span>
				</button>
				<span class="topbar-title">@yield('title')</span>
			</div>
			<div class="topbar-right">
				<span class="admin-name">{{ session('admin_name', 'Admin') }}</span>
				<!-- <img src="{{asset('Img/admin.png')}}" class="admin-avatar" alt="Admin"> -->
                 <i class="fas fa-user-circle admin-avatar"></i>
			</div>
		</div>

		<!-- Page Content -->
		<div id="content">
			@yield('main')
		</div>
	</div>

	<script type="text/javascript">
		$(document).ready(function () {
			$('#sidebarCollapse').on('click', function () {
				$('#sidebar').toggleClass('active');
			});

			// Highlight active sidebar item based on current URL
			var currentUrl = window.location.href;
			$('#sidebar ul li a').each(function() {
				if (this.href === currentUrl) {
					$(this).parent('li').addClass('active-item');
				}
			});
		});
	</script>
</body>
</html>
