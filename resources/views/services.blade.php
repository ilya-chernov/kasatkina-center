@extends('page')

@section('title', 'Услуги и их стоимость')

@section('content')
    <div class="ab">

        <h1>Услуги и их стоимость</h1>

        <div class="img-container">
            <img src="./media/about-us.png" alt="">
        </div>


        <h3>Физиотерапия</h3>
        <div class="prices">

            <div class="price-item">
                <h3>Прием (консультация, подбор схемы лечения) врача-физиотерапевта</h3>
                <div class="price">1500 руб</div>
            </div>

            <div class="price-item">
                <h3>СМТ-терапия (воздействие синусоидальными модулированными токами) одной анатомической зоны</h3>
                <div class="price">600 руб</div>
            </div>
            <div class="price-item">
                <h3>СМТ-терапия (воздействие синусоидальными модулированными токами) двух и каждой дополнительной зоны</h3>
                <div class="price">1000 (500) руб</div>
            </div>
            <div class="price-item">
                <h3>Флюктуоризация (воздействие флюктурирующими токами) одной анатомической зоны</h3>
                <div class="price">600 руб</div>
            </div>
            <div class="price-item">
                <h3>Флюктуоризация (воздействие флюктурирующими токами) одной анатомической зоны</h3>
                <div class="price">1000 (500) руб</div>
            </div>

            <div class="price-item">
                <h3>Магнитотерапия одной анатомической зоны</h3>
                <div class="price">600 руб</div>
            </div>

            <div class="price-item">
                <h3>Магнитотерапия двух и каждой дополнительной зоны</h3>
                <div class="price">1000 (500) руб</div>
            </div>

            <div class="price-item">
                <h3>Лазеротерапия (аппаратом  Азор_2к)</h3>
                <div class="price">500 руб</div>
            </div>

            <div class="price-item">
                <h3>Транскраниальная электротерапия (электросон)</h3>
                <div class="price">500 руб</div>
            </div>

        </div>

        <h3>Психология</h3>

        <div class="prices">

            <div class="price-item">
                <h3>Прием психолога (индивидуальная консультация)  1 час*</h3>
                <div class="price">3000 руб</div>
            </div>

            <div class="price-item">
                <h3>Прием психолога (групповое занятие; стоимость за 1 чел.)  4 часа**</h3>
                <div class="price">3200 руб</div>
            </div>
        </div>

        <p>* Примечание: скидка 50% для студентов БФУ им.И.Канта</p>
        <p>**Примечание: группа максимально 6 человек;</p>

        <p>скидка 50% для студентов БФУ им.И.Канта</p>

    </div>
@endsection
