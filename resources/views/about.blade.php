@extends('page')
@section('head')
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/carousel/carousel.css"/>
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
    const options = { axis: "x" };
    new Carousel(container, options);
  </script>

@endsection


@section('title', 'О медцентре')
@section('content')

    <p>Очередь в длинном больничном коридоре, неприятный запах препаратов и угрюмая женщина в кабинете физиотерапии… Слава богу, что все это не про нас

        Центр физиотерапии доктора Касаткиной - это место, где вы можете не только получить профессиональную помощь от:

        ✅Физиотерапии
        Мы ЕДИНСТВЕННЫЕ в регионе, у кого можно пройти весь комплекс физиолечения. В нашем распоряжении есть:
        • Электротерапия
        • Магнитотерапия
        • Лазеротерапия

        ✅Психоконсультирования(индивидуально и в группах)

        но и забыть о том, что раньше, прежде чем попасть на прием, вам приходилось хорошенько «помучаться» в очереди

        Записывайтесь к нам по телефону +7 (921) 102-46-86, будем ждать вас в гости!😊</p>

<div class="ab">
  <div class='embed-container'>
    <iframe src='https://www.youtube.com/embed/oaXegu7NqfQ' frameborder='0' allowfullscreen></iframe>
    </iframe>
  </div>
<div class="content-title">
<h3 class="mb-4">Руководитель центра</h3>
</div>

<div class="leader">
    <div class="leader-image">
        <img src="./media/kas.png" alt="">
    </div>
    <div class="leader-text">
        <h2>Касаткина (Бочарова) Наталия Николаевна</h2>
        <p>врач-физиотерапевт, руководитель «Центра физиотерапии доктора Касаткиной», руководитель психологической службы БФУ имени Иммануила Канта</p>
        <div class="btn-holder">
        <a href="{{ route('leader') }}" class="button-white text-left">Узнать подробнее</a>
        </div>
    </div>
</div>

<!-- <div class="content-title">
  <h3>Фотографии</h3>
</div>

<div class="f-carousel" id="myCarousel">
  <div class="f-carousel__viewport">
    <div class="f-carousel__track">
      <div class="f-carousel__slide"><img src="/images/1.jpg" alt="" srcset=""></div>
      <div class="f-carousel__slide"><img src="/images/2.jpg" alt="" srcset=""></div>
      <div class="f-carousel__slide"><img src="/images/2.png" alt="" srcset=""></div>
      <div class="f-carousel__slide"><img src="/images/3.jpg" alt="" srcset=""></div>
      <div class="f-carousel__slide"><img src="/images/5.jpg" alt="" srcset=""></div>
    </div>
  </div>
</div> -->

<div class="content-title">
   <h3>Юридическая информация</h3>
</div>

   <p>Общество с ограниченной ответственностью «ГАРМОНИЯ»</p>
    <p>Сокращённое наименование — ООО «ГАРМОНИЯ»;</p>
    <p>ОПФ — Общество с ограниченной ответственностью;</p>
    <p>Адрес места нахождения — 236022, Россия, Калининградская область, г. Калининград, ул. Уральская, д. 20, пом. 4;</p>
    <p>ОГРН — 1223900006131;</p>



<div class="download">
    <div class="download-icon"><img src="./media/download.png"  width="20" alt=""></div>
    <div class="download-link"><a href="https://kasatkina-center.ru/public/documents/Doc.pdf">Загрузить выписку из реестра лицензий на устройство</a></div>
</div>

</div>
@endsection
