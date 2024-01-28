@extends('page')

@section('title', 'Услуги и их стоимость')

@section('section-header')
    <div class="section-header">
        <div class="container">
            <div class="section-header-content">
                <h1>Услуги нашего центра</h1>
            </div>
        </div>
    </div>
@endsection

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


@section('content')

    <div class="ab">
        @foreach($result as $category)
            @if(count($category->services) > 0)
            <div class="category-title">
                <h2>{{ $category->title }}</h2>
            </div>
            @endif
                @foreach($category->services as $service)
                    <div onclick="location.href='https://dev.kasatkina-center.ru/services/{{$service->slug}}'" class="card">
                        <img src="{{ "https://dev.kasatkina-center.ru".$service->attachment->fullPath() }}" alt="Article Image">
                        <h2>{{$service->title}}</h2>
                        <p>{{$service->price}} рублей</p>
                    </div>
                @endforeach

        @endforeach

        <p>* Примечание: скидка 50% для студентов БФУ им.И.Канта</p>
        <p>**Примечание: группа максимально 6 человек;</p>

        <p>скидка 50% для студентов БФУ им.И.Канта</p>

    </div>
@endsection
