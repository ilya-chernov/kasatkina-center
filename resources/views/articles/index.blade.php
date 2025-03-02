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


    <style>
        .card {
            width: 300px;
            margin: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 10px rgba(0,0,0,0.2);
        }

        .card img {
            width: 100%;
            height: auto;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .card h2 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card p {
            font-size: 16px;
            line-height: 1.5;
            color: #666;
        }

        @media (max-width: 960px) {
            .card {
                padding: 0;
                margin: 20px 0 20px 0;
                width: fit-content;
            }

            .card__text {
                padding: 15px;
            }
        }

    </style>

    <div class="articles-container">
        @foreach($articles as $article)
            <div onclick="location.href='https://kasatkina-center.ru/articles/{{$article->code}}'" class="card">
                <img src="{{ "https://kasatkina-center.ru".$article->attachment->fullPath() }}" alt="Article Image">
                <h2>{{$article->title}}</h2>
                <p>{{$article->short_description}}</p>
            </div>
        @endforeach
    </div>



@endsection
