<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="/js/jquery3.7.1.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,600;1,400&display=swap" rel="stylesheet">

	<!-- FAVICON -->
	<link rel="apple-touch-icon" sizes="57x57" href="../../../public/favicons/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="../../../public/favicons/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="../../../public/favicons/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="../../../public/favicons/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="../../../public/favicons/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="../../../public/favicons/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="../../../public/favicons/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="../../../public/favicons/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="../../../public/favicons/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="../../../public/favicons/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../../../public/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../../../public/favicons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../../../public/favicons/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

		<!-- Yandex.Metrika counter -->
	<script type="text/javascript" >
	   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
	   m[i].l=1*new Date();
	   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
	   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
	   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

	   ym(94136155, "init", {
			clickmap:true,
			trackLinks:true,
			accurateTrackBounce:true,
			webvisor:true
	   });
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/94136155" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
    @yield('head')
    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css?ss') }}">


    <title>@yield('title')</title>

</head>
<body>

    <header>
        <div class="greenline">
            <div class="wrapper">
                <div class="greenline-contacts">
                    <!-- 1st item -->
                    <div class="greenline-contacts__item">
                        <div class="greenline-contacts__item_img">
                            <img src="../media/location.png" alt="">
                        </div>
                        <div class="greenline-contacts__item_text">
                            г. Калининград, ул. Уральская, 20, пом. 4
                        </div>
                    </div>

                    <!-- 2nd item -->
                    <div class="greenline-contacts__item">
                        <div class="greenline-contacts__item_img">
                            <img src="../media/phone.png" alt="">
                        </div>
                        <div class="greenline-contacts__item_text">
                            + 7 (921) 102-46-86
                        </div>
                    </div>

                    <!-- 3rd item -->
                    <div class="greenline-contacts__item">
                        <div class="greenline-contacts__item_img">
                            <img src="../media/mail.png" alt="">
                        </div>
                        <div class="greenline-contacts__item_text">
                            kasatkina-center@yandex.ru
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="header">
            <div class="wrapper">
                <div class="menu">
                    <div class="menu__logo">
                        <a href="{{ route('home')}}">
                        <img src="{{ asset('media/logo.png') }}" alt="Логотип">
                        </a>
                    </div>

                    <div class="menu__nav">
                        <ul id="menuNav">
                            <li><a href="{{ route('home')}}">Главная</a></li>
                            <li><a href="{{ route('about')}}">О медцентре</a></li>
                            <li><a href="{{ route('article.index')}}">Статьи</a></li>
                            <li><a href="{{ route('our-services')}}">Услуги</a></li>
                            <li><a href="{{ route('home')}}#contacts">Контакты</a></li>
                            @auth<li><a href="/admin">Управление сайтом</a></li>@endauth

                        </ul>


                    </div>

                 <!--   <div class="menu__calltoaction">
                        <a href="#" class="button">Оставить заявку</a>
                    </div> -->

                    <div class="burger">
                        <img src="../media/burger.svg" width="40" height="40" id="burger-icon" alt="">
                    </div>

                </div>
            </div>
        </div>
    </header>
