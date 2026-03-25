<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Магазин одежды</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/home.css', 'resources/js/app.js'])

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
            <div class="content">
                <img src="/img/4444.jpg" alt="">
                <div>
                    <h2>О нашем сайте</h2>
                    <p>Не следует, однако забывать, что начало повседневной работы по формированию позиции требуют от нас анализа форм развития. С другой стороны укрепление и развитие структуры требуют от нас анализа дальнейших направлений развития. С другой стороны сложившаяся структура организации требуют определения и уточнения соответствующий условий активизации.</p>
                </div>
            </div>
        </main>
        
        <footer>
            <p>&copy; Романенко София, 2026 г.</p>
        </footer>
    </body>
</html>