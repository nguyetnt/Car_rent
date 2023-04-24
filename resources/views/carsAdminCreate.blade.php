<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Them xe moi</title>
</head>
<body>
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