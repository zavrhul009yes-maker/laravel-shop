<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Массив товаров</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/array.css', 'resources/js/app.js'])
        
    </head>
    <body>
        <header>
            <div class="header-container">
                <div class="logo">Мой Сайт</div>
                <nav>
                    <ul>
                        <li><a href="{{ route('home') }}">Главная</a></li>
                        <li><a href="{{ route('array') }}">Массивы</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        
        <main>
            <h1>Наши товары</h1>
            <div class="actions">
                <a href="{{ route('array.shuffle') }}" class="btn">Перемешать массив</a>
                <a href="{{ route('array.sort') }}" class="btn">Сортировать по цене</a>
                <a href="{{ route('array.filter') }}" class="btn">Фильтр (>1000)</a>
            </div>
            <div class="products-grid">
                @foreach($array as $item)
                    <div class="product-card">
                    <img src="{{ asset('img/' . $item['path']) }}" alt="{{ $item['title'] }}">
                    <p>{{ $item['title'] }} - {{ $item['price'] }} руб.</p>
                    </div>
                @endforeach
            </div>
        </main>
        
        <footer>
            <p>&copy; Романенко София, 2026 г.</p>
        </footer>
    </body>
</html>