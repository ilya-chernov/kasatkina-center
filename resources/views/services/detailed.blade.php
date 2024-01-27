@extends('page')
<?php
$header = !empty($data->title) ? $data->title : "заголовок страницы";
?>
@section('title', $header . " | Центр физиотерапии доктора Касаткиной" )

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
                <h3>Описание процедуры: </h3>{!! $data->description !!}
            @endif

            @if(!empty($data->indications_for_use))
                <h3>Показания к применению: </h3>{!! $data->indications_for_use !!}
            @endif

            @if(!empty($data->comments))
                <h3>Примечания:</h3>{!! $data->comments !!}
            @endif
        @else
            <h3>Информация об услуге недоступна.</h3>
            <p>Пожалуйста, приходите позднее. Мы обновляем содержимое сайта.</p>
        @endif
    </div>

@endsection
