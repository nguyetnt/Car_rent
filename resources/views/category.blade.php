<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
    <link rel="stylesheet" href="assets\css\category.css">
    <link rel="stylesheet" href="assets\css\navbar.css">
</head>
<body>
<nav>
  <ul>
    <li> <img class="img-logo" src="assets\imgs\loginlogo.png" alt=""></li>
    <li><a href="#">Trang chủ</a></li>
    <li><a href="#">Top xe được thuê</a></li>
    <li><a href="#">Các loại xe</a></li>
    <li><a href="#">Tin tức</a></li>
    <li><a href="#">Liên hệ</a></li>
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
            <h2>Các loại xe:</h2>
            <ul>
                <li><a href="#"><i class="icon-xe-4-cho"></i>Xe 4 chỗ</a></li>
                <li><a href="#"><i class="icon-xe-7-cho"></i>Xe 7 chỗ</a></li>
                <li><a href="#"><i class="icon-xe-ban-tai"></i>Xe bán tải</a></li>
                <li><a href="#"><i class="icon-xe-5-cho"></i>Xe 5 chỗ</a></li>
            </ul>
        </section>
		<section class="car-list">
            <h2>Danh sách xe</h2>
            <div class="row">
                <div class="col-4">
                <div class="car-item">
                    <img src="assets\imgs\Rentcart.jpg" alt="Car 1">
                    <h3>Xe 4 chỗ</h3>
                    <p>Giá thuê: 100,000 đ/ngày</p>
                </div>
                </div>
                <div class="col-4">
                <div class="car-item">
                    <img src="assets\imgs\download.jpg" alt="Car 2">
                    <h3>Xe 7 chỗ</h3>
                    <p>Giá thuê: 150,000 đ/ngày</p>
                </div>
                </div>
                <div class="col-4">
                <div class="car-item">
                    <img src="assets\imgs\75fbc5ad-20210422_044703.jpg" alt="Car 3">
                    <h3>Xe bán tải</h3>
                    <p>Giá thuê: 200,000 đ/ngày</p>
                </div>
                </div>
                <div class="col-4">
                <div class="car-item">
                    <img src="images/car4.jpg" alt="Car 4">
                    <h3>Xe 5 chỗ</h3>
                    <p>Giá thuê: 120,000 đ/ngày</p>
                </div>
                </div>
                <div class="col-4">
                <div class="car-item">
                    <img src="images/car5.jpg" alt="Car 5">
                    <h3>Xe 4 chỗ</h3>
                    <p>Giá thuê: 90,000 đ/ngày</p>
                </div>
                </div>
                <div class="col-4">
                <div class="car-item">
                    <img src="images/car6.jpg" alt="Car 6">
                    <h3>Xe 7 chỗ</h3>
                    <p>Giá thuê: 170,000 đ/ngày</p>
                </div>
                </div>
            </div>
            </section>

	</main>

</body>
</html>