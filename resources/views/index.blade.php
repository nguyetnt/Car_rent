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
  <h1>Tìm kiếm thuê xe</h1>
  <div class="search-form">
    <form>
      <label for="city-search">Tìm theo thành phố:</label>
      <input type="text" id="city-search" name="city-search" placeholder="Nhập tên thành phố">

      <label for="location-search">Tìm theo địa điểm:</label>
      <input type="text" id="location-search" name="location-search" placeholder="Nhập địa điểm">

      <label for="rental-date">Thời gian thuê:</label>
      <input type="datetime-local" id="rental-date" name="rental-date">

      <label for="return-date">Thời gian trả xe:</label>
      <input type="datetime-local" id="return-date" name="return-date">

      <button type="submit">Tìm kiếm theo tiêu chí thuê</button>
    </form>
  </div>
</main>


</body>
</html>