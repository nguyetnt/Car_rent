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
  <ul>
    <li><a href="#">Trang chủ</a></li>
    <li><a href="#">Top xe được thuê</a></li>
    <li><a href="#">Các loại xe</a></li>
    <li><a href="#">Tin tức</a></li>
    <li><a href="#">Liên hệ</a></li>
    <li class="right-align"><a href="#" class="login-btn">Đăng nhập</a></li>
    <li class="right-align"><a href="#" class="register-btn">Đăng ký</a></li>
  </ul>
</nav>

<main>
  <div class="search-container">
    <h1>Tìm kiếm thuê xe</h1>
    <form>
      <label for="country">Tìm theo quốc gia:</label>
      <input type="text" id="country" name="country">
      <label for="city">Tìm theo thành phố:</label>
      <input type="text" id="city" name="city">
      <label for="start-date">Thời gian thuê:</label>
      <input type="datetime-local" id="start-date" name="start-date">
      <label for="end-date">Thời gian trả xe:</label>
      <input type="datetime-local" id="end-date" name="end-date">
      <div class="checkbox-container">
        <input type="checkbox" id="agree" name="agree">
        <label for="agree">Tôi đồng ý với <a href="#">điều khoản thuê xe</a></label>
      </div>
      <button type="submit">Tìm kiếm theo tiêu chí thuê</button>
    </form>
  </div>
  <div class="image-container">
    <img src="assets\imgs\Index-background.jpg" alt="car rental image">
  </div>
</main>

</body>
</html>