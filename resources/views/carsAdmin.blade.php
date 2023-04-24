<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/carsadmin.css') }}">
    <title>carsAdmin</title>
</head>
<body>
    <!-- Navbar -->
    <div class="nav">
        <ul class="nav-list">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/">HOME</a>
              </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/about">ABOUT</a>
            </li>
            <li class="nav-item"></li>
        </ul>
        <ul class="nav-list">
            <li class="nav-item">Đăng ký</li>
            <li class="nav-item">Đăng nhập</li>
        </ul>
    </div>

    <div class="Tiledanhsach">Danh sach cac xe co the cho nguoi dung thue</div>

    <button style="
        margin-left: 10px;
        margin-top: 10px;
        width: 200px;
        height: 50px;
        background-color: #4CAF50;
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
        <a href="{{ url('carsAdmin/create') }}">Them xe moi</a>
    </button>

    <div class="column-layout">
        @foreach ($cars as $car)
            <div class="column-item sidebar-one">
                <img src="{{ $car->img_url }}" class="img-detail" width="200" height="150">
                <a class="carTitle" href="{{ url('carsAdmin', $car->id) }}">{{ $car->car_model }} {{ $car->car_number }}</a>
                <p> {{ $car->car_price }} vnd </p>
                <button class="add">Thay doi thong tin</button>
                <button class="add">Them vao muc cho thue</button>
            </div>
        @endforeach
    </div>
</body>
</html>