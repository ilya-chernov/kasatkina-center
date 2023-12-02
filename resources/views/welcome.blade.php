<title>Центр физиолечения и психоконсультирования</title>
@include('assets.header')


<body>
    
    <div class="hero">
        <div class="container">
            <div class="hero-container">
                <div class="hero-image">
                    <img src="/media/nata.png" alt="">
                </div>
                <div class="hero-text">
                    <h1>Центр физиолечения и психоконсультирования доктора Касаткиной</h1>
                    <p>поддерживающие процедуры для комплексного безопасного лечения и восстановления организма после болезней и травм</p>
                    <div class="btn-area">
                         <a href="#about" class="btn-white">Узнать подробности</a>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="container" id="about">

        <div class="block-title">
            <h2>Наши услуги</h2>
        </div>

        <div class="text-block">
            <p>В нашем центре Вы можете записаться на процедуры, направленные на лечение и профилактику различных  заболеваний: 
                физиотерапевтическое воздействие теплом, электрическим током, магнитными полями, лазером и другими физическими факторами.</p>

                <div class='embed-container'>
                    <iframe src="https://www.youtube-nocookie.com/embed/Rjtzor0eTQE?modestbranding=1&rel=0&iv_load_policy=3&fs=0&color=white&controls=0&disablekb=1" frameborder="0"></iframe>
                    </iframe>
                </div>
        </div>
        <section class="services">
                <div class="services-list">
                    <div class="services-item">
                        <p>Транскраниальная терапия</p>
                        <div class="s-img"><img src="/media/service/brain.png" alt=""></div>
                    </div>

                    <div class="services-item">
                         <p>Магнитотерапия</p>
                        <div class="s-img"><img src="/media/service/magnet.png" alt=""></div>
                    </div>

                    <div class="services-item">
                         <p>Лазеротерапия</p>
                        <div class="s-img"><img src="/media/service/laser.png" alt=""></div>
                    </div>

                    <div class="services-item">
                         <p>Электролечение</p>
                        <div class="s-img"><img src="/media/service/light.png" alt=""></div>
                    </div>

                    <div class="services-item">
                         <p>Психоконсультирование</p>
                        <div class="s-img"><img src="/media/service/brain.png" alt=""></div>
                    </div>

                </div>

                <div class="more-about">
                    <a href="{{ route('our-services') }}">Подробнее об услугах центра и их стоимости ></a>
                </div>
        </section>
    </div>


    <section class="listing">
        <div class="container">
            <div class="listing-container">
                <div class="listing-image">
                    <img src="/media/bubbles.png" alt="">
                </div>
                <div class="listing-text">
                    <h2>Показания к применению</h2>
                    <div class="block-flex">
                        <div class="txt-block">После оперативного лечения по поводу острых воспалительных процессов</div>
                        <div class="txt-block">Остеохондроз</div>
                        <div class="txt-block">Артрит и артроз</div>
                        <div class="txt-block">Позвоночные грыжи</div>
                        <div class="txt-block">Хронический бронхит</div>
                        <div class="txt-block">Гинекология*</div>
                </div>

                <div class="warn">
                    <h6>*после консультации с гинекологом</h6>
                </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <section class="video-about-us">
        <div class="block-title">
            <h2>Видео о нашем центре</h2>

            <div class="text-block">
                <p>Предлагаем Вам посмотреть небольшой видеоролик о нашем медицинском центре</p>
            </div>

        </div>
        <div class="container">
            <div class='embed-container'>
                <iframe src='https://www.youtube.com/embed/oaXegu7NqfQ' frameborder='0' allowfullscreen></iframe>
                </iframe>
              </div>
        </div>
    </section>


<section class="leavemessage">
    <div class="container">
        <!--<div class="section-message white">
                <div class="message-text">
                    <h2>Оставьте свою заявку</h2>
                    <p>Заполните форму и мы вам обязательно перезвоним</p>
            </div>

            <div class="message-button">
                <a href="#" class="button">Оставить заявку</a>
            </div>
        </div> -->
    </div>
</section>

<section class="contacts" id="contacts">
    <div class="container">

        <div class="block-title">
            <h2>Контакты</h2>

            <div class="text-block">
                <p>Мы всегда рады Вас видеть!</p>
            </div>

        </div>

            <div class="map">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A5960cc1ec3414d309f0bf1b1b138eb229a26d6af49dcfa44c85aab1581163026&amp;width=100%25&amp;height=396&amp;lang=ru_RU&amp;scroll=true"></script>
           
                <div class="map-item">
                    <h1>Как нас найти</h1>
                    <p><b>Адрес:</b> г. Калининград, ул. Уральская, д. 20, пом. 4</p>
                    <p><b>Телефоны:</b></p>
                    <div class="phone">
                        <div class="phone-img"><img src="/media/phone.png" alt=""></div>
                        <div class="phone-text">+7 (921) 102-46-86</div>
                    </div>

                    <div class="phone">
                        <div class="phone-img"><img src="/media/phone.png" alt=""></div>
                        <div class="phone-text"> +7 (4012) 52-66-99</div>
                    </div>
                        
                       
                    <br>
                </div>
           
           
            </div>
           
                

       
        
     </div>
</section>

@include('assets.footer')