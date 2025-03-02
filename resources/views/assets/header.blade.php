<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css?sf2') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="/js/jquery3.7.1.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,300;8..144,400;8..144,500;8..144,700&family=Roboto+Flex:opsz,wght@8..144,100..1000&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

        <!- FAVICON -->
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

    <link rel="yandex-tableau-widget" href="{{ asset('tableau.json') }}">

		<!-- Yandex.Metrika counter -->
    <script src="{{ asset('js/metrika.js') }}" type="text/javascript" ></script>
	<noscript><div><img src="https://mc.yandex.ru/watch/94136155" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
    <script type='application/ld+json'>
        {
          "@context": "https://www.schema.org",
          "@type": "MedicalClinic",
          "name": "Центр физиотерапии доктора Касаткиной Н.Н.",
          "url": "https://kasatkina-center.ru/",
          "logo": "https://kasatkina-center.ru/media/logo.png",
          "description": "поддерживающие процедуры для комплексного безопасного лечения и восстановления организма после болезней и травм",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "ул. Уральская, 20, пом. 4",
            "addressLocality": " г. Калининград",
            "addressRegion": "Калининградская область",
            "postalCode": "236022",
            "addressCountry": "Россия"
          },
          "geo": {
            "@type": "GeoCoordinates",
            "latitude": "54.724143",
            "longitude": "20.501924"
          },
          "openingHours": "Mo, Tu, We, Th, Fr, Sa 10:00-20:00",
          "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+7 (4012) 52-66-99"
          }
        }
    </script>

    <meta property="og:site_name" content="Центр физиотерапии доктора Касаткиной Н.Н." />
    <meta property="og:title" content="@yield('title')" />
    <meta name="description" content="@yield('page-description')" />
    <meta name="og:description" content="@yield('page-description')" />
    <meta property="og:locale" content="ru" />
    <meta property="og:type" content="website" />
    <meta property="og:logo" content="{{ asset('images/Logo.jpg') }}" />
    <meta property="og:image" content="{{ asset('images/preview.jpg') }}" />
    <link rel="canonical" href="<?= "https://kasatkina-center.ru". $_SERVER['REQUEST_URI']?>" />

    @yield('head')

    <link href="{{ asset('css/video-js.css') }}" rel="stylesheet">


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
                            info@kasatkina-center.ru
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
