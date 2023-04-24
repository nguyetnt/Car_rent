<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/cardetail.css') }}">
    <title>cardetail</title>
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