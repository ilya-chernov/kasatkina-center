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
                <h3 class="service-desc">Описание процедуры</h3>{!! $data->description !!}
            @endif

            @if(!empty($data->indications_for_use))
                <h3 class="service-desc">Показания к применению</h3>{!! $data->indications_for_use !!}
            @endif

            @if(!empty($data->comments))
                <h3 class="service-desc">Примечания</h3>{!! $data->comments !!}
            @endif


                @if(!empty($data->price))
                    <h3 class="service-desc">Стоимость</h3>{!! $data->price !!} рублей.
                @endif



        @else
            <h3>Информация об услуге недоступна.</h3>
            <p>Пожалуйста, приходите позднее. Мы обновляем содержимое сайта.</p>
        @endif
    </div>

@endsection
