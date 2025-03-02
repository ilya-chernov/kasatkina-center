<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,300;8..144,400;8..144,500;8..144,700&family=Roboto+Flex:opsz,wght@8..144,100..1000&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/404.css?asd') }}">
    <title>Страница не найдена | Центр физиотерапии доктора Касаткиной Н.Н.</title>
</head>
<body>
<div class="container">
    <div class="information">
        <div class="info-logo">
            <img src="{{ asset('media/logo.png') }}" alt="Логотип Центра физиотерапии г. Калининград">
        </div>
        <h1>Страница не найдена (404)</h1>
        <p>Возможно, вы допустили ошибку в адресе страницы, или она была удалена.</p>
        <p>Возможно, вы искали:</p>
        <ul>
            <li><a href="{{ route('home') }}">Главная страница</a></li>
            <li><a href="{{ route('our-services') }}">Услуги</a></li>
            <li><a href="{{ route('about') }}">О нас</a></li>
        </ul>
    </div>
</div>
</div>

<script>
    $(document).ready(function() {
        // Блок плавно появляется через 500 мс после загрузки страницы
        $(".information").fadeIn(700);
    });
</script>

</body>
</html>
