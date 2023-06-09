<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/carsadmin.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/navbar.css')}}">
    <title>carsAdmin</title>
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
        <li class="nav-link"><a class="nav-a" href="/about">Thông tin</a></li>
        <li class="nav-link"><a class="nav-a" href="/search">Tìm kiếm</a></li>
        <li class="right-align"><a class="admin-btn" href="/carsAdmin">Quản lý</a></li>
        <li class="right-align"><a class="login-btn" href="/login">Đăng nhập</a></li>
        <li class="right-align"><a class="register-btn" href="/signup">Đăng ký</a></li>
        </ul>
    </nav>

    <div class="Tiledanhsach">Danh sach cac xe co the cho nguoi dung thue</div>

    <button style="
        margin-left: 10px;
        margin-top: 10px;
        width: 1800px;
        height: 50px;
        background-color: #ffffff;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    ">
        <a class=" button" href="{{ url('carsAdmin/create') }}">Them xe moi</a>
    </button>

    <div class="column-layout">
        @foreach ($cars as $car)
            <div class="column-item sidebar-one">
                <img src="{{ $car->img_url }}" class="img-detail" width="200" height="150">
                <a class="carTitle" href="{{ url('carsAdmin', $car->id) }}">{{ $car->car_model }} {{ $car->car_number }}</a>
                <p> {{ $car->car_price }} vnd </p>
                <button class="add">Them vao muc cho thue</button>
            </div>
        @endforeach
    </div>
    <a class= "button" href="{{url('/login')}}">Log out</a>
</body>
</html>