<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check out</title>

    <link rel="stylesheet" href="{{ asset('assets/css/checkout.css') }}">
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
    
	<div class="container">
		<div class="payment-section">
			<h1>Thanh toán</h1>
			<h2>Credit card</h2>
			<form>
				<label for="card-holder-name">Tên chủ thẻ</label>
				<input type="text" id="card-holder-name" required>
				<label for="card-number">Mã số thẻ</label>
				<input type="text" id="card-number" required>
				<label for="card-cvv">Mã số bảo mật (CVV)</label>
				<input type="password" id="card-cvv" required>
				<label for="card-expiration-date">Ngày hết hạn (MM/YYYY)</label>
				<input type="text" id="card-expiration-date" required>
			</form>
			<button class="submit-btn">Thanh toán</button>
			<button class="back-btn">Quay lại</button>
		</div>
		<div class="car-section">
			<div class="car-item">
				<img src="car-image.jpg" alt="Car Image">
				<h3>Tên xe</h3>
				<p>Giá tiền: 1000$</p>
				<p>Thông tin của xe</p>
			</div>
			<div class="car-item">
				<img src="car-image.jpg" alt="Car Image">
				<h3>Tên xe</h3>
				<p>Giá tiền: 1000$</p>
				<p>Thông tin của xe</p>
			</div>
		</div>
	</div>
    
</body>
</html>