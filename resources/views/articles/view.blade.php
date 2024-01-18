@extends('page')
<?php
$name = " | Центр физиотерапии доктора Касаткиной";
?>
@section('title', $article['title'] . " ".$name )
@section('hero')
    <style>
        .article__hero {
            background-image: linear-gradient(rgba(0, 0, 0, 0),rgba(0, 0, 0, 1)), url('{{ $article->coverImgUrl }}');
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
        }


    </style>

    <body>
    <div class="article__hero">
            <div class="article__hero__text">
                <h3>Центр физиотерапии <br> доктора Касаткиной</h3>
                <h1>{{ $article['title'] }}</h1>
                <p>{{ $article['short_description'] }}</p>
        </div>


    </div>

    @endsection

    @section('content')
        <div class="article__content">
            {!! $article['content'] !!}
        </div>

@endsection
