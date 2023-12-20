<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel')</title>
    <link rel="stylesheet" href="{{ asset('css/vendors/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendors/jquery-ui.min.css') }}">
</head>
<body>
    <div id="admin-app" class="container">
    	<nav class="navbar bg-body-tertiary">
			<div class="container-fluid">
				<a class="header-logo" href="/">
					<img src="{{ asset('img/logo.png') }}" alt="Logo" class="d-inline-block align-text-top">
				</a>
				<div class="text-start px-3" style="flex-grow: 1;">MIRIZOBILIYA.KZ</div>
				<ul class="nav">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="{{ route('admin.admin') }}">Главная</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('products.products') }}">Товары</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Пользователи</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Заказы</a>
					</li>
				</ul>
				<div class="ms-3">
					<a class="btn btn-sm btn-secondary" href="#">Выйти</a>
				</div>
			</div>
		</nav>
        <div class="bg-body-tertiary mt-4 pt-3">
        	@yield('content')
        </div>
    </div>
</body>
</html>