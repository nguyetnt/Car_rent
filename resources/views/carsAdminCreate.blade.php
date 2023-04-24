<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="{{ asset('assets/css/admincreate.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/navbar.css')}}">
 <title>Them xe moi</title>
</head>
<body>
    <!-- Navbar -->
    <nav>
      <ul class="nav-ul">
      <li class="nav-link"><a class="nav-a" href="/">Trang chủ</a></li>
      <li class="nav-link"><a class="nav-a" href="#">Top xe được thuê</a></li>
      <li class="nav-link"><a class="nav-a" href="#">Các loại xe</a></li>
      <li class="nav-link"><a class="nav-a" href="#">Tin tức</a></li>
      <li class="nav-link"><a class="nav-a" href="/contactus">Liên hệ</a></li>
      <li class="nav-link"><a class="nav-a" href="/about">About</a></li>
      <li class="right-align"><a class="admin-btn" href="/carsAdmin">Quản lý</a></li>
      <li class="right-align"><a class="login-btn" href="/login">Đăng nhập</a></li>
      <li class="right-align"><a class="register-btn" href="/signup">Đăng ký</a></li>
      </ul>
  </nav>
 <form action="{{ url('/carsAdmin/store') }}" method="POST">
   @csrf
   <label>Loai xe</label>
   <input type="text" name="car_model">

   <label>Ma xe</label>
   <input type="text" name="car_number">

   <label>Gia xe</label>
   <input type="text" name="car_price">

   <label>Anh xe</label>
   <input type="text" name="img_url" >

   <button type="submit">Them xe</button>
 </form>
</body>
</html>