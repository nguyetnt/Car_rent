<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/contactus.css') }}">
    <title>Contact us</title>
</head>
<body>
    
    <div class="container">
        <section class="contact">
          <h2>Liên hệ với chúng tôi</h2>
          <form action="submit.php" method="post">
            <label for="name">Họ và tên:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Địa chỉ email:</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Tin nhắn:</label>
            <textarea id="message" name="message" required></textarea>
            <button type="submit">Gửi</button>
          </form>
        </section>
      </div>
      
</body>
</html>