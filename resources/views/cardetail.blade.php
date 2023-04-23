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
            <img src="{{ asset('assets/imgs/download.jpg') }}" class="img-detail">
        </div>
        <div class="column-item main-column">
            <h2>Ford Ranger XLS 22AT 2017</h2>
            <h2>5.000.000 ₫ 24h</h2>
            <button type="submit" class="btn btn-secondary" >Thue xe </button>
            <p>
                Mô tả chi tiết - Khuyến mãi
                xe Ford Ranger XLS 2.2AT 2017, dầu 1 cầu. Xe nhập khẩu Thái Lan, đăng kí 2018, tên tư nhân 1 chủ - ODO zin 31.000 Km !
                Xe trang bị gồm: Màn hình DVD, camera lùi, cảm biến, điều hòa, túi khí, vô lăng tích hợp điều khiển, chống trơn trượt, ABS, cân bằng điện tử,... cùng nhiều tiện ích khác.
            </p>
        </div>
    </div>
</body>
</html>