@extends('page')
<?php
$name = " | Центр физиотерапии доктора Касаткиной";
?>
@section('title', $article['title'] . " ".$name )

@section('content')
    <div class="article__title">
        <h1>{{ $article['title'] }}</h1>
        <p>{{ $article['short_description'] }}</p>
    </div>

    <div class="article__image">
        <img src="{{ $article['coverImgUrl'] }}" alt="#">
    </div>

    <div class="article__content">
        {!! $article['content'] !!}
    </div>

@endsection
