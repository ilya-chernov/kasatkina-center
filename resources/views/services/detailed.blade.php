@extends('page')
<?php
$header = !empty($data->title) ? $data->title : "заголовок страницы";
?>
@section('title', $header . " | Центр физиотерапии доктора Касаткиной" )

@section('head')
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css">

    @section('foot')
        <script src="gallery.js"></script>
    @endsection

@section('section-header')
    <div class="section-header">
        <div class="container">
            <div class="section-header-content">
                <h1>@if(!empty($data->title))
                        {{ $data->title }}
                    @endif</h1>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="article__content">
        @if(!empty($data))
            @if(!empty($data->description))
                {!! $data->description !!}
            @endif

            @if(!empty($data->indications_for_use))
                <h3 class="service-desc">Показания к применению</h3>{!! $data->indications_for_use !!}
            @endif

            @if(!empty($data->comments))
                <h3 class="service-desc">Примечания</h3>{!! $data->comments !!}
            @endif


                @if(!empty($data->price))
                    Стоимость: {!! $data->price !!} рублей.
                @endif



        @else
            <h3>Информация об услуге недоступна.</h3>
            <p>Пожалуйста, приходите позднее. Мы обновляем содержимое сайта.</p>
        @endif

            <p>В Центре доктора Касаткиной мы заботимся о вашем здоровье, предлагая комплексный подход к лечению и
                восстановлению. Наши специалисты помогут вам справиться с физическими и эмоциональными проблемами, улучшить
                самочувствие и повысить качество жизни.</p>

            <h3>Как мы помогаем?</h3>

            <p>Мы используем современные и эффективные методы физиотерапии, направленные на восстановление организма, устранение
                боли и улучшение подвижности. Наши психологи помогают справиться со стрессом, тревожностью, эмоциональным
                выгоранием и другими состояниями, влияющими на качество жизни.</p>

            <h3>Кому подойдут наши услуги?</h3>

            <ul>
                <li>Тем, кто испытывает боли в спине, суставах или мышцах</li>
                <li>Людям, перенесшим травмы или операции, нуждающимся в реабилитации</li>
                <li>Тем, кто чувствует усталость, стресс или тревожность</li>
                <li>Тем, кто хочет улучшить психоэмоциональное состояние и наладить отношения с окружающими</li>
                <li>Тем, кто заботится о своем здоровье и хочет укрепить организм</li>
            </ul>

            <h3>Почему выбирают нас?</h3>

            <ul>
                <li><b>Комплексный подход</b> – сочетание физиотерапии и психоконсультирования для максимального эффекта</li>
                <li><b>Индивидуальные программы</b> – лечение подбирается с учетом ваших потребностей</li>
                <li><b>Современное оборудование</b> – только проверенные и безопасные методы</li>
                <li><b>Уютная атмосфера</b> – комфортные условия для вашего спокойствия и расслабления</li>
            </ul>
    </div>

@endsection
