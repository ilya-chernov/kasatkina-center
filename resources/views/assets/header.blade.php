<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- FAVICON -->
	<link rel="apple-touch-icon" sizes="57x57" href="/favicons/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

    @yield('head')
    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="css/stylesheet.css">


    <title>@yield('title')</title>

</head>
<body>
    <header>
        <div class="header">
            <div class="wrapper">
                <div class="menu">
                    <div class="menu__logo">
                        <a href="{{ route('home')}}">
                        <img src="./img/menu/logo-white.png" alt="Логотип">
                        </a>
                    </div>

                    <div class="menu__nav">
                        <ul id="menuNav">
                            <li><a href="{{ route('home')}}" class="menu_links">Главная страница</a></li>
                            <li><a href="{{ route('our-services')}}" class="menu_links">Услуги</a></li>
                            <li><a href="{{ route('home')}}" class="menu_links">Цены</a></li>
                            <li><a href="{{ route('about')}}" class="menu_links">О медицинском центре</a></li>
                            <li><a href="{{ route('home')}}#contacts" class="menu_links">Контакты</a></li>
                            <li><a href="{{ route('home')}}" class="menu_links">Оставить заявку</a></li>
                        </ul>
                    </div>

                 <!--   <div class="menu__calltoaction">
                        <a href="#" class="button">Оставить заявку</a>
                    </div> -->

                    <div class="burger">
                        <img src="./media/burger.svg" width="40" height="40" id="burger-icon" alt="">
                    </div>

                </div>
            </div>
        </div>
    </header>
