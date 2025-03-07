@extends('page')

@section('page-description')
    Физиотерапия и профилактика заболеваний под контролем опытного специалиста. Эффективные методы лечения и реабилитации.
@endsection
@section("title")
    Главная страница | Центр физиотерапии доктора Касаткиной Н.Н.
@endsection

@section("welcome-content")
    <div class="welcome">
        <div class="container">
            <div class="welcome-container">
                <div class="welcome-text">
                    <h1>Центр физиолечения и психоконсультирования доктора Касаткиной</h1>
                    <p>поддерживающие процедуры для комплексного безопасного лечения и восстановления организма после
                        болезней и травм</p>
                    <div class="btn-area">
                        <a href="/" class="btn-white" id="open-modal">СМОТРЕТЬ ВИДЕО</a>
                        <a href="#about" class="btn-transparent">ПОДРОБНЕЕ</a>
                    </div>
                </div>

                <div class="welcome-image">
                    <img src="/media/compressed_media/compressed-nata_new.png" alt="Наталия Николаевна Бочарова">
                </div>
            </div>
        </div>
    </div>


    <div class="container" id="about">
        <div class="our-services">
            <div class="block-title" id="services" style="scroll-margin-block-start: 120px;">
                <h2>Наши услуги</h2>
            </div>

            <div class="text-block">
                <p>В нашем центре Вы можете записаться на процедуры, направленные на лечение и профилактику различных
                    заболеваний:
                    физиотерапевтическое воздействие теплом, электрическим током, магнитными полями, лазером и другими
                    физическими факторами.</p>

                <div class='vid-container'>
                    <video id="myPlayer" class="video-js" controls>
                        <source src="/vid/reklam.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
            <section class="services">
                <div class="services-list">
                    <div class="services-item">
                        <p>Транскраниальная терапия</p>
                        <div class="s-img"><img src="/media/service/brain.png" alt="Транскраниальная терапия"></div>
                    </div>

                    <div class="services-item">
                        <p>Магнитотерапия</p>
                        <div class="s-img"><img src="/media/service/magnet.png" alt="Магнитотерапия"></div>
                    </div>

                    <div class="services-item">
                        <p>Лазеротерапия</p>
                        <div class="s-img"><img src="/media/service/laser.png" alt="Лазеротерапия"></div>
                    </div>

                    <div class="services-item">
                        <p>Электролечение</p>
                        <div class="s-img"><img src="/media/service/light.png" alt="Электролечение"></div>
                    </div>

                    <div class="services-item">
                        <p>Психоконсультирование</p>
                        <div class="s-img"><img src="/media/service/brain.png" alt="Психоконсультирование"></div>
                    </div>

                </div>

                <div class="more-about">
                    <a href="{{ route('our-services') }}">Подробнее об услугах центра и их стоимости ></a>
                </div>
            </section>
        </div>

    </div>


    <section class="listing">
        <div class="container">
            <div class="listing-container">
                <div class="listing-image">
                    <img src="/media/compressed_media/compressed-bubbles.png" alt="Услуги компании">
                </div>
                <div class="listing-text">
                    <h2>Показания к применению</h2>
                    <div class="block-flex">
                        <div class="txt-block">После оперативного лечения по поводу острых воспалительных процессов
                        </div>
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

    <div class="container">
        <section class="publications-about-us">
            <h2 class="block-title">Публикации в СМИ</h2>
            <div class="text-block">
                <p>Статьи про нас опубликованы в следующих изданиях:</p>
            </div>

            <div class="ma-cards">
                <!-- Карточка 1 -->
                <div class="ma-card">
                    <img src="{{ asset('/media/media-about-us/korolevskiye.png') }}" alt="Логотип журнала Королевские ворота">
                    <h3>Королевские ворота</h3>
                </div>
                <!-- Карточка 2 -->
                <div class="ma-card">
                    <img src="{{ asset('/media/media-about-us/nov-kgd.png') }}" alt="Логотип издания Новый Калининград">
                    <h3>Новый Калининград</h3>
                </div>
            </div>

            <div class="more-about">
                <a href="{{ route('smi-o-nas') }}">Посмотреть все публикации ></a>
            </div>

        </section>
    </div>

    <div class="container">
        <section class="why-us">
            <h2 class="block-title">Почему нам можно доверять?</h2>
            <div class="why-us-container">
                <div class="why-us-cards">
                    <div class="why-us-card">
                        <img src="/media/why-us/harmony.png" width="10%" alt="Гармония">
                        <h2>Гармония</h2>
                        <p>Особенность нашего подхода в том, что мы сочетаем физио- и психотерапию, что позволяет
                            добиться
                            гораздо
                            большего в рамках лечения.</p>
                    </div>

                    <div class="why-us-card">
                        <img src="/media/why-us/care.png" width="10%" alt="Забота">
                        <h2>Забота</h2>
                        <p>Специалисты нашего центра помогают пациентам как физио- и психотерапевты. Зачастую пациентам
                            немного
                            "не по себе" обращаться за помощью. Но мы создали атмосферу понимания и принятия, чтобы
                            ничего
                            вокруг не вызывало беспокойствия.</p>
                    </div>

                    <div class="why-us-card">
                        <img src="/media/why-us/professional.png" width="10%" alt="Профессионализм">
                        <h2>Профессионализм</h2>
                        <p>Наш основатель, Наталия Касаткина-Бочарова, постоянно совершенствуется. Например, совсем
                            недавно она
                            прошла обучение и теперь может помогать пациентам, прошедшм самые трудные жизненные
                            ситуации. В
                            частности, поможет бороться с ПТСР</p>
                    </div>
                </div>

                <div class="why-us-reviews">
                    <div style="width:560px;height:850px;overflow:hidden;position:relative;">
                        <iframe
                            style="width:100%;height:100%;border:1px solid #e6e6e6;border-radius:8px;box-sizing:border-box"
                            src="https://yandex.ru/maps-reviews-widget/139132362881?comments"></iframe>
                        <a href="https://yandex.ru/maps/org/tsentr_fizioterapii_doktora_kasatkinoy/139132362881/"
                           target="_blank"
                           style="box-sizing:border-box;text-decoration:none;color:#b3b3b3;font-size:10px;font-family:YS Text,sans-serif;padding:0 20px;position:absolute;bottom:8px;width:100%;text-align:center;left:0;overflow:hidden;text-overflow:ellipsis;display:block;max-height:14px;white-space:nowrap;padding:0 16px;box-sizing:border-box">Центр
                            физиотерапии доктора Касаткиной на карте Калининграда — Яндекс Карты</a></div>
                </div>
            </div>
        </section>
    </div>


    <section class="green-section">
        <div class="container">
            <section class="the-only-who-go">
                <div class="the-only-who-go-image">
                    <img src="/media/compressed_media/compressed-dev.png"
                         alt="Оборудование выезд на дом доктор Касаткина">
                </div>
                <div class="the-only-who-go-text">
                    <h2>Мы единственные в городе, кто выезжает к больным на дом</h2>
                    <p>Для пациентов, которые в силу своего состояния не могут самостоятельно добраться до нашего
                        Центра, мы готовы предложить услуги на дому. Специальный набор оборудования предназначен для
                        того, чтобы оказывать электро-, лазеро- и магнитотерапию и электролечение на дому.</p>
                </div>
            </section>
        </div>
    </section>

    <section class="contacts" id="contacts">
        <div class="map">
            <script type="text/javascript" charset="utf-8" async
                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A5960cc1ec3414d309f0bf1b1b138eb229a26d6af49dcfa44c85aab1581163026&amp;width=100%25&amp;height=60%&amp;lang=ru_RU&amp;scroll=true"></script>


            <div class="map-item">
                <h2>Как нас найти</h2>
                <p><b>Адрес:</b> г. Калининград, ул. Уральская, д. 20, пом. 4</p>
                <p><b>Телефоны:</b></p>
                <div class="phone">
                    <div class="phone-img"><img src="/media/phone.png" alt="Телефон"></div>
                    <div class="phone-text">+7 (921) 102-46-86</div>
                </div>

                <div class="phone">
                    <div class="phone-img"><img src="/media/phone.png" alt="Телефон"></div>
                    <div class="phone-text"> +7 (4012) 52-66-99</div>
                </div>
            </div>

        </div>
    </section>

    <!-- Модальное окно -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <button id="close-modal" class="close-modal">×</button>
            <!-- Видео с Video.js -->
            <video id="server-video" class="video-js vjs-default-skin" controls>
                <source src="/vid/promo.mp4" type="video/mp4">
                Ваш браузер не поддерживает воспроизведение видео.
            </video>
        </div>
    </div>
@endsection



<script defer src="{{ asset("js/modal-window.js") }}"></script>
<script defer src="{{ asset('js/video.js') }}"></script>
<script defer src="{{ asset('js/videoplayer.js') }}"></script>


