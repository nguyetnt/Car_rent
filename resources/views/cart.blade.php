<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>

    <link rel="stylesheet" href="{{ asset('assets/css/cart.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/navbar.css')}}">
</head>

<body>

    <nav>
        <ul class="nav-ul">
        <li class="nav-link"><a class="nav-a" href="#">Trang chủ</a></li>
        <li class="nav-link"><a class="nav-a" href="#">Top xe được thuê</a></li>
        <li class="nav-link"><a class="nav-a" href="#">Các loại xe</a></li>
        <li class="nav-link"><a class="nav-a" href="#">Tin tức</a></li>
        <li class="nav-link"><a class="nav-a" href="#">Liên hệ</a></li>
        <li class="right-align"><a class="admin-btn" href="#">Quản lý</a></li>
        <li class="right-align"><a class="login-btn" href="#">Đăng nhập</a></li>
        <li class="right-align"><a class="register-btn" href="#">Đăng ký</a></li>
        </ul>
    </nav>

    
	<div class="wishlist-container">
		<h1>Wishlist</h1>
		<ul class="wishlist-items">
			<li>
				<img src="https://via.placeholder.com/300x200.png?text=Xe+1" alt="Car 1">
				<h2>Car 1</h2>
				<p>$100/day</p>
			</li>
			<li>
				<img src="https://via.placeholder.com/300x200.png?text=Xe+2" alt="Car 2">
				<h2>Car 2</h2>
				<p>$150/day</p>
			</li>
			<li>
				<img src="https://via.placeholder.com/300x200.png?text=Xe+3" alt="Car 3">
				<h2>Car 3</h2>
				<p>$200/day</p>
			</li>
		</ul>
		<div class="buttons">
			<button class="checkout-button">Chuyển đến trang thanh toán</button>
			<button class="back-button">Quay lại</button>
		</div>
	</div>

</body>
</html>