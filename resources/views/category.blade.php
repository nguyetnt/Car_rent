<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
    <link rel="stylesheet" href="category.css">
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
  <section class="filter">
    <h2>Filter</h2>
    <!-- Thêm các phần tử filter tại đây -->
  </section>

  <section class="car-list">
    <h2>Car List</h2>
    <ul>
      <li>
        <img src="car1.jpg" alt="Car 1">
        <div class="car-info">
          <h3>Car 1</h3>
          <p>Price: $100/day</p>
        </div>
      </li>
      <li>
        <img src="car2.jpg" alt="Car 2">
        <div class="car-info">
          <h3>Car 2</h3>
          <p>Price: $120/day</p>
        </div>
      </li>
      <!-- Thêm các phần tử xe tại đây -->
    </ul>
  </section>
</main>

</body>
</html>