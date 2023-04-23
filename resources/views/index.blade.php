<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car Rent</title>
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
    <link rel="stylesheet" href="assets\css\navbar.css">
</head>
<body>
<nav>
  <ul>
    <li> <img class="img-logo" src="assets\imgs\loginlogo.png" alt=""></li>
    <li><a href="#">Trang chủ</a></li>
    <li><a href="#">Top xe được thuê</a></li>
    <li><a href="#">Tin tức</a></li>
    <li><a class="login" href="#">Đăng nhập</a></li>
    <li><a class="signup" href="#">Đăng ký</a></li>
    <li>
      <form action="#" method="get">
        <input type="text" placeholder="Tìm kiếm" name="search">
        <button type="submit">Tìm kiếm</button>
      </form>
    </li>
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
    <img src="background.jpg" alt="car rental image">
  </div>
</main>

</body>
</html>