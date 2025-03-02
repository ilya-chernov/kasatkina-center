@extends('page')
@section('page-description', "Ознакомьтесь с услугами Центра физиотерапии доктора Касаткиной: электролечение, магнитотерапия, индивидуальное и групповое психоконсультирование. Профессиональный подход и опытные специалисты.")

@section('title', 'Наши услуги | Центр физиотерапии доктора Касаткиной Н.Н.')


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
    <p>В медицинском центре Наталии Николаевны Касаткиной вы можете получить квалифицированную физиотерапевтическую и
        психологическую помощь. Мы предлагаем индивидуальный подход к каждому пациенту, помогая справиться с физическими
        и эмоциональными проблемами, восстановить силы и улучшить качество жизни.</p>

    <p>Наш центр специализируется на физиотерапии, направленной на восстановление после травм, снятие болевого синдрома
        и укрепление организма. Также мы оказываем психологическую поддержку, помогая справляться со стрессом,
        тревожностью и последствиями травмирующих событий. Наталия Николаевна использует современные методы, включая
        комплексную работу с посттравматическим стрессовым расстройством (ПТСР), основанную на глубоком понимании
        психологических процессов и особенностей восстановления.</p>

    <p>Для удобства пациентов предусмотрены как очные приемы, так и выездные услуги, позволяющие проводить
        физиотерапевтические процедуры на дому. Мы стремимся создать комфортные условия для каждого, обеспечивая
        внимательный и профессиональный подход.</p>

    <p> Вы можете ознакомиться с полным перечнем услуг на этой странице или записаться на консультацию, чтобы подобрать
        оптимальную программу восстановления. Мы всегда готовы помочь вам на пути к здоровью и гармонии.</p>

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

    <p>* Примечание: скидка 50% для студентов БФУ им.И.Канта</p>
    <p>**Примечание: группа максимально 6 человек;</p>
@endsection
