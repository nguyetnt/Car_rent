<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
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
        <li class="nav-link"><a class="nav-a" href="/about">About</a></li>
        <li class="right-align"><a class="admin-btn" href="/carsAdmin">Quản lý</a></li>
        <li class="right-align"><a class="login-btn" href="/login">Đăng nhập</a></li>
        <li class="right-align"><a class="register-btn" href="/signup">Đăng ký</a></li>
        </ul>
    </nav>

  <div class="container">
    <h2>Rentalcars.com</h2>
    <h1>Cho thuê ô tô – Tìm kiếm, So sánh & Lưu</h1>
    <br/>
    <div class="descreption">
      <p>✓ Hủy miễn phí trên hầu hết các yêu cầu</p>
      <p>✓ Hơn 60.000 địa điểm</p>
      <p>✓ Hỗ trợ khách hàng bằng hơn 40 ngôn ngữ</p>
    </div>
    <form>
      <label for="location">Chọn địa điểm thuê xe:</label>
      <input type="text" id="location" name="location" placeholder="Chọn địa điểm thuê xe" />
      <br />
      <label for="pickup">Ngày thuê xe:</label>
      <input type="datetime-local" id="pickup" name="pickup" />
      <br />
      <label for="dropoff">Ngày trả xe:</label>
      <input type="datetime-local" id="dropoff" name="dropoff" />
      <br />
      <br>
      <button type="submit">Tìm kiếm</button>
      <br />
      <br>
      <label for="different-location">Trả xe tại địa điểm khác:</label>
      <input type="checkbox" id="different-location" name="different-location" />
      <br />
      <br>
      <label for="driver-age">Tài xế tuổi từ 30 - 65?</label>
      <input type="checkbox" id="driver-age" name="driver-age" />
    </form>
  </div>

</body>
</html>