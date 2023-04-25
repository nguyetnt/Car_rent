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
        <li class="nav-link"><a class="nav-a" href="/">Trang chủ</a></li>
        <li class="nav-link"><a class="nav-a" href="/toprent">Top xe được thuê</a></li>
        <li class="nav-link"><a class="nav-a" href="/category">Các loại xe</a></li>
        <li class="nav-link"><a class="nav-a" href="/news">Tin tức</a></li>
        <li class="nav-link"><a class="nav-a" href="/contactus">Liên hệ</a></li>
        <li class="nav-link"><a class="nav-a" href="/about">Thông tin</a></li>
        <li class="nav-link"><a class="nav-a" href="/search">Tìm kiếm</a></li>
        <li class="right-align"><a class="admin-btn" href="/carsAdmin">Quản lý</a></li>
        <li class="right-align"><a class="login-btn" href="/login">Đăng nhập</a></li>
        <li class="right-align"><a class="register-btn" href="/signup">Đăng ký</a></li>
        </ul>
    </nav>

    
	<div class="wishlist-container">
		<h1>Xác nhận yêu cầu thuê</h1>
		<ul class="wishlist-items">
			<li>
				<img src="https://via.placeholder.com/300x200.png?text=Xe+đã+chọn" alt="Tên xe">
				<h2>Tên xe</h2>
				<p>$100 / Ngày</p>
			</li>
		</ul>
		<div class="buttons">
			<button class="checkout-button"><a href="/checkout" style="text-decoration: none; font-weight:bold; 				color:aliceblue;">Chuyển đến trang thanh toán</a></button>
			<button class="back-button"><a href="/category" style="text-decoration: none; font-weight:bold; 					color:aliceblue;">Quay lại</a></button>
		</div>
	</div>

</body>
</html>