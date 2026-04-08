<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создание продукта</title>
</head>

<body>
    <div class="container">
        <form action="{{route ('products.store')}}" method="POST">
            @csrf
            <input name="title" type="text" placeholder="Введите название"><br>
            <textarea name="description" cols="30" rows="10" placeholder="Введите описание"></textarea><br>
            <input name="price" type="number" placeholder="Введите цену" required><br>
            <input type="submit" value="Создать товар">
    </form>
    </div>
</body>
</html>