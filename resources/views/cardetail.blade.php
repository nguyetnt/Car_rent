<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/cardetail.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/navbar.css')}}">
    <title>cardetail</title>
</head>
<body>
    <!-- Navbar -->
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
    <!-- Column layout -->
    <div class="column-layout">
        <div class="column-item sidebar-one">
            <img src="{{ $car->img_url }}" class="img-detail">
        </div>

        <div class="column-item main-column">
            <h2>{{ $car->car_model }} {{ $car->car_number }}</h2>
            <h2>{{ $car->car_price }} $ / 24h</h2>
            <p>
                lorem ipsum dolor sit amet, consectetur adipiscing elit. Officia consequat adipisicing commodo nostrud reprehenderit pariatur.
                Officia consequat adipisicing commodo nostrud reprehenderit pariatur.
                Officia consequat adipisicing commodo nostrud reprehenderit pariatur.
                Officia consequat adipisicing commodo nostrud reprehenderit pariatur.
                Officia consequat adipisicing commodo nostrud reprehenderit pariatur.
                Officia consequat adipisicing commodo nostrud reprehenderit pariatur.
            </p>

            <a type="submit" class="btn btn-secondary" href="{{ url('/carsAdmin/edit', $car->id) }}">Chỉnh sửa</a>

            <form action="{{ url('/carsAdmin', $car->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" class="btn btn-secondary" value="Xóa">
            </form>

        </div>
    </div>
</body>
</html>