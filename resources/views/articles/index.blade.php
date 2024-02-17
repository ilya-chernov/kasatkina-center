@extends('page')

@section('title', "Статьи | Центр физиотерапии доктора Касаткиной")

@section('section-header')
    <div class="section-header">
        <div class="container">
            <div class="section-header-content">
                <h1>Статьи</h1>
            </div>
        </div>
    </div>
@endsection

@section('content')

    <div class="articles-container">
        @foreach($articles as $article)
            <div onclick="location.href='https://dev.kasatkina-center.ru/articles/{{$article->code}}'" class="card">
                <img src="{{ "https://dev.kasatkina-center.ru".$article->attachment->fullPath() }}" alt="Article Image">
                <h2>{{$article->title}}</h2>
                <p>{{$article->short_description}}</p>
            </div>
        @endforeach
    </div>



@endsection
