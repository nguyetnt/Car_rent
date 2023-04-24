<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Chinh sua thong tin xe</title>
</head>
<body>
 <form action="{{ url('/carsAdmin', $car->id) }}" method="POST">
  @csrf
  @method('PUT')
  <label>Loai xe</label>
  <input type="text" name="car_model" value="{{ $car->car_model }}">

  <label>Ma xe</label>
  <input type="text" name="car_number" value="{{ $car->car_number }}">

  <label>Gia xe</label>
  <input type="text" name="car_price" value="{{ $car->car_price }}">

  <label>Anh xe</label>
  <input type="text" name="img_url" value="{{ $car->img_url }}">

  <button type="submit">Chinh sua thong tin xe</button>
</form>
</body>
</html>