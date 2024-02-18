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

@section('content')

    <div class="ab center-items">
        <div class="content-container">
            <div class="services-container">
                @foreach($result as $category)
                    @if(count($category->services) > 0)
                        <div class="category-title">
                            <h2>{{ $category->title }}</h2>
                        </div>
                    @endif
                    @foreach($category->services as $service)
                        <div onclick="location.href='https://kasatkina-center.ru/services/{{$service->slug}}'"
                             class="service-card">
                            <div class="service-img">
                                <img src="{{ "https://kasatkina-center.ru".$service->attachment->fullPath() }}"
                                     alt="Article Image">
                                <div class="service-price">{{$service->price}}₽</div>
                            </div>
                            <h2>{{$service->title}}</h2>
                        </div>
                    @endforeach

                @endforeach
            </div>
        </div>
    </div>

    <p>* Примечание: скидка 50% для студентов БФУ им.И.Канта</p>
    <p>**Примечание: группа максимально 6 человек;</p>

    <p>скидка 50% для студентов БФУ им.И.Канта</p>
@endsection
