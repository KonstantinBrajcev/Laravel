<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма пользователя</title>
</head>
<body>
<h1>Заполните форму</h1>
<form action="{{url('store-user')}}" method="POST">
    @csrf
    <div>
        <label for="name">Имя:</label>
        <input type="text" id="name" name="name" required>
    </div>
<!--    <div>-->
<!--        <label for="last_name">Фамилия:</label>-->
<!--        <input type="text" id="last_name" name="last_name" required>-->
<!--    </div>-->
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    </div>
    <button type="submit">Отправить</button>
</form>
</body>
</html>
