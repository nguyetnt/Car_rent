<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
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
    <div class="c-signup">
        <div class="c-wrap-signup">
            <img src="https://res.cloudinary.com/cockbook/image/upload/v1682247687/single/image_2_5_t9axtg.png" alt="" />
        </div>
        <br />
        <div class="w-signup">
            <div class="inner-w-signup">
                <div style="font-size: 24px; font-weight: 600">Login your account</div>
                <div style="width: 100%;">
                    <div style="margin-bottom: 8px;">Email</div>
                    <input type="text" style="width: 100%; height: 50px; background-color: #d9d9d9">
                </div>
                <div style="width: 100%;">
                    <div style="margin-bottom: 8px;">Password</div>
                    <input type="password" style="width: 100%; height: 50px; background-color: #d9d9d9">
                </div>
                <div style="width: 100%; height: 50px; background-color: #377BB9C9;" class="c-flex-center">
                    Log in</div>
                <div>Don't you have an account? Sign up</div>
                <br>
            </div>
        </div>
    
    </div>
</body>
</html>

