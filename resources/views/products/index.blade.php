<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог</title>
</head>
<body>
    <div>
        <h2>Информация о пользователе:</h2>
        <p>{{$user->name}}</p>
        <p>{{$user->email}}</p>
        <p>{{$user->buyer->tel}}</p>
        <p>{{$user->buyer->discount}}</p>
    </div>
    <div class ="container">
        <a href="{{route('products.create')}}">создание продукта</a>
        <div>
            @foreach ($categories as $category)
                <h2>{{$category->title}}</h2>
                @foreach ( $category->products as $product )
        <div class="card">
            <h3>{{$product->title}}</h3>
            <p>{{$product->price}}</p>
            <p>{{$product->description}}</p>
            <p>категория:{{$product->category->title}}</p>
            <div>
                <p>Этот товар заказан в заказах с номерами:</p>
                @foreach ($product->orders as $order)
                   <p>Номер {{$order->id}} кол-во {{$order->pivot->count}}</p> 
                @endforeach
            </div>
        <a href="{{route('products.show', $product)}}">Просмотреть</a>
        </div>
        <a href="{{route('products.edit', $product)}}">Редактировать</a><br>
        <form action="{{route ('products.destroy', $product)}}" method="POST">
            @csrf
            @method('delete')
            <input type="submit" value="Удалить">
        </form>
        </div>
            
        @endforeach
    </div>
            @endforeach
        </div>

        @foreach ( $products as $product )
        <div class="card">
            <h2>{{$product->title}}</h2>
            <p>{{$product->price}}</p>
            <p>{{$product->description}}</p>
            <p>категория:{{$product->category->title}}</p>
        <a href="{{route('products.show', $product)}}">Просмотреть</a>
        </div>
        <a href="{{route('products.edit', $product)}}">Редактировать</a><br>
        <form action="{{route ('products.destroy', $product)}}" method="POST">
            @csrf
            @method('delete')
            <input type="submit" value="Удалить">
        </form>
        </div>
            
        @endforeach
    </div>
    
</body>
</html>