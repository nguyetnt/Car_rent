<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/contactus.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/navbar.css')}}">
    <title>Contact us</title>
</head>

<body>

    <nav>
        <ul class="nav-ul">
        <li class="nav-link"><a class="nav-a" href="/">Trang chủ</a></li>
        <li class="nav-link"><a class="nav-a" href="/toprent">Top xe được thuê</a></li>
        <li class="nav-link"><a class="nav-a" href="/category">Các loại xe</a></li>
        <li class="nav-link"><a class="nav-a" href="/news">Tin tức</a></li>
        <li class="nav-link"><a class="nav-a" href="/contactus">Liên hệ</a></li>
        <li class="nav-link"><a class="nav-a" href="/about">About</a></li>
        <li class="right-align"><a class="admin-btn" href="/carsAdmin">Quản lý</a></li>
        <li class="right-align"><a class="login-btn" href="/login">Đăng nhập</a></li>
        <li class="right-align"><a class="register-btn" href="/signup">Đăng ký</a></li>
        </ul>
    </nav>

  <div class="container">
		<h2>Liên hệ với chúng tôi</h2>
		<form>
			<label for="name">Tên</label>
			<input type="text" id="name" name="name" placeholder="Nhập tên của bạn">

			<label for="phone">Số điện thoại</label>
			<input type="text" id="phone" name="phone" placeholder="Nhập số điện thoại của bạn">

			<label for="email">Email</label>
			<input type="text" id="email" name="email" placeholder="Nhập email của bạn">

			<label for="note">Ghi chú</label>
			<textarea id="note" name="note" placeholder="Nhập ghi chú của bạn"></textarea>

			<button type="submit">Gửi</button>
		</form>

		<div class="social-icons">
			<a href="#"><i class="fab fa-facebook-f"></i></a>
			<a href="#"><i class="fab fa-instagram"></i></a>
			<a href="#"><i class="fab fa-tiktok"></i></a>
		</div>
	</div>

</body>
</html>