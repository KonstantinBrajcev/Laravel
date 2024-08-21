<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма пользователя</title>
</head>
<body>
<h1>Приветствие</h1>
<form action="{{url('hello')}}" method="POST">
    @csrf
    <h1>Привет, Костик!</h1>
</form>
</body>
</html>
