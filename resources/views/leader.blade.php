@extends('page')
@section('content')
@section('title', 'Информация о руководителе')

@section('head')
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"
/>

@section('foot')
    <script src="gallery.js"></script>
@endsection
@endsection
<div class="ab">
<h1>О руководителе центра</h1>

<div class="leader">
    <div class="leader-image">
        <img src="./media/nata-img.png" alt="">
    </div>
    <div class="leader-text">
        <h2>Касаткина (Бочарова) Наталия Николаевна</h2>
        <p>врач-физиотерапевт, руководитель «Центра физиотерапии доктора Касаткиной», руководитель психологической службы БФУ имени Иммануила Канта</p>
    </div>
</div>

<div class="text">
    <h3>Профессиональные и научные интересы</h3>
    <p>Индивидуальные психологические консультации с использованием:</p>
    <ul>
        <li>когнитивно-поведенческого подхода</li>
        <li>приемов арт-терапии</li>
        <li>приемов песочной терапии по Юнгу</li>
        <li>метафорических ассоциативных карт</li>
    </ul>
    
    <p>Консультирование по вопросам:</p>
    <ul>
        <li>проживания жизненных кризисов</li>
        <li>проблем в отношениях</li>
        <li>апатии, тревожных состояний</li>
        <li>саморазвития, исследования себя</li>
    </ul>
</div>

<div class="text">
<h3>Награды и поощрения</h3>
<ul>
    <li>Почетная грамота от Думы Астраханской области (за многолетний добросовестный труд и активную общественную деятельность), 2016</li>
    <li>Благодарственное письмо от Министерства образования и науки Астраханской области (за помощь в нравственном и социальном воспитании детей с ограниченными возможностями здоровья , организацию и проведения конкурса красоты среди глухих девушек «Мисс Весна»), 2017</li>
    <li>Благодарственное письмо от губернатора Астраханской области за активное участие в проведении мероприятий в рамках Челленджа добрых дел, приуроченного к году добровольца в России, 2018</li>
    <li>Почетная грамота от Министерства образования и науки Астраханской области (за активную многолетнюю волонтерскую деятельность, бескорыстное служение обществу), 2020</li>
</ul>

<p>Опыт психологического консультирования: 10 лет</p>
</div>
</div>

<div class="text">

<h3>Подтверждающие документы</h3>

<div class="photo-gallery">

<!-- First gallery -->
        <a href="diplomas/cert-4.jpg" data-fancybox="gallery-a" data-caption="Gallery A #1">
            <img src="diplomas/cert-4.jpg" />
        </a>

        <a href="diplomas/cert-2.jpg" data-fancybox="gallery-a" data-caption="Gallery A #1">
            <img src="diplomas/cert-2.jpg" />
        </a>
		
		 <a href="diplomas/fizio.jpg" data-fancybox="gallery-a" data-caption="Gallery A #1">
            <img src="diplomas/fizio.jpg" />
        </a>

        <a href="diplomas/cert-3.jpg" data-fancybox="gallery-a" data-caption="Gallery A #1">
            <img src="diplomas/cert-3.jpg" />
        </a>
        

        <a href="diplomas/cert-1.jpg" data-fancybox="gallery-a" data-caption="Gallery A #1">
            <img src="diplomas/cert-1.jpg" />
        </a>
        

        <a href="diplomas/cert-5.jpg" data-fancybox="gallery-a" data-caption="Gallery A #1">
            <img src="diplomas/cert-5.jpg" />
        </a>
        
        <a href="diplomas/cert-6.jpg" data-fancybox="gallery-a" data-caption="Gallery A #1">
            <img src="diplomas/cert-6.jpg" />
        </a>

        <a href="diplomas/cert-7.jpg" data-fancybox="gallery-a" data-caption="Gallery A #1">
            <img src="diplomas/cert-7.jpg" />
        </a>
        
        <a href="diplomas/cert-8.jpg" data-fancybox="gallery-a" data-caption="Gallery A #1">
            <img src="diplomas/cert-8.jpg" />
        </a>

        <a href="diplomas/cert-9.jpg" data-fancybox="gallery-a" data-caption="Gallery A #1">
            <img src="diplomas/cert-9.jpg" />
        </a>

        <a href="diplomas/cert-10.jpg" data-fancybox="gallery-a" data-caption="Gallery A #1">
            <img src="diplomas/cert-10.jpg" />
        </a>

        
        
        


</div>

</div>
@endsection