@extends('page')
@section('page-description', "Центр физиотерапии доктора Касаткиной – восстановительная медицина в Калининграде.
Узнайте больше о нашей миссии, опыте и подходе к работе.")

@section('head')
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/carousel/carousel.css"/>
@endsection



@section('content')
    <p><b>Медицинский центр доктора Наталии Николаевны Касаткиной</b>, расположенный в Калининграде, предлагает
        пациентам
        квалифицированную помощь в области физиотерапии и психоконсультирования. Наталия Николаевна — опытный
        специалист, постоянно совершенствующий свои знания и навыки для обеспечения эффективного лечения и поддержки
        пациентов.</p>

    <div class="f-carousel" id="myCarousel">
        <div class="f-carousel__viewport">
            <div class="f-carousel__track">
                <div class="f-carousel__slide"><img src="/images/1.jpg" alt="" srcset=""></div>
                <div class="f-carousel__slide"><img src="/images/2.jpg" alt="" srcset=""></div>
                <div class="f-carousel__slide"><img src="/images/3.jpg" alt="" srcset=""></div>
                <div class="f-carousel__slide"><img src="/images/5.jpg" alt="" srcset=""></div>
            </div>
        </div>
    </div>

    <p>В нашем центре особое внимание уделяется индивидуальному подходу к каждому пациенту. Мы понимаем, что обращение
        за медицинской помощью может вызывать беспокойство, поэтому создаем атмосферу понимания и принятия, чтобы каждый
        чувствовал себя комфортно и уверенно.</p>

    <p>Наталия Николаевна успешно сочетает методы физиотерапии и психотерапии, что позволяет достигать значительных
        результатов в лечении и восстановлении организма. Она прошла специальное обучение и теперь может оказывать
        помощь пациентам, пережившим сложные жизненные ситуации, включая посттравматическое стрессовое расстройство
        (ПТСР).</p>

    <p>Для удобства пациентов, которые не могут самостоятельно посетить наш центр, мы предлагаем услуги на дому.
        Специальное оборудование позволяет проводить процедуры электро-, лазеро- и магнитотерапии, а также
        электролечения в домашних условиях, обеспечивая непрерывность и эффективность терапии.</p>

    <p>Мы стремимся к гармоничному сочетанию физического и психологического здоровья наших пациентов, предлагая
        комплексный подход к лечению и восстановлению. Обращаясь к нам, вы можете рассчитывать на профессионализм,
        заботу и внимание со стороны Наталии Николаевны Касаткиной.</p>

    <p>Наш центр находится по адресу: г. Калининград, ул. Уральская, д. 20, пом. 4. Для записи на прием или получения
        дополнительной информации вы можете связаться с нами по телефону <a class="link" href="tel:79211024686">+7 (921)
            102-46-86</a> или написать на электронную почту <a class="link" href="mailto:info@kasatkina-center.ru">info@kasatkina-center.ru</a>
    </p>

    <p>Мы готовы поддержать вас на пути к здоровью и благополучию, предлагая современные методы лечения и искреннюю
        заботу о каждом пациенте.</p>

    <div class="ab">
        <div class="leader">
            <div class="leader-image">
                <img src="./media/kas.png" alt="">
            </div>
            <div class="leader-text">
                <h2>Касаткина (Бочарова) Наталия Николаевна</h2>
                <p>врач-физиотерапевт, руководитель «Центра физиотерапии доктора Касаткиной», руководитель
                    психологической службы БФУ имени Иммануила Канта</p>
                <div class="btn-holder">
                    <a href="{{ route('leader') }}" class="button-white text-left">Узнать подробнее</a>
                </div>
            </div>
        </div>

        <div class="content-title">
            <h3>Юридическая информация</h3>
        </div>

        <p>Общество с ограниченной ответственностью «ГАРМОНИЯ»</p>
        <p>Сокращённое наименование — ООО «ГАРМОНИЯ»;</p>
        <p>ОПФ — Общество с ограниченной ответственностью;</p>
        <p>Адрес места нахождения — 236022, Россия, Калининградская область, г. Калининград, ул. Уральская, д. 20, пом.
            4;</p>
        <p>ОГРН — 1223900006131;</p>


        <div class="download">
            <div class="download-icon"><img src="./media/download.png" width="20" alt=""></div>
            <div class="download-link"><a href="https://kasatkina-center.ru/public/documents/Doc.pdf">Загрузить выписку
                    из реестра лицензий</a></div>
        </div>

    </div>

@endsection
@section('section-header')
    <div class="section-header">
        <div class="container">
            <div class="section-header-content">
                <h1>О медицинском центре</h1>
            </div>
        </div>
    </div>

@endsection

@section('foot')
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/carousel/carousel.umd.js"></script>

    <script>
        const container = document.getElementById("myCarousel");
        const options = {axis: "x"};
        new Carousel(container, options);
    </script>

@endsection


@section('title', 'О медицинском центре | Центр физиотерапии доктора Касаткиной Н.Н.')

