@include('assets.header')

@yield('hero')

@yield('section-header')
    <div class="container">
        @yield('content')
    </div>
@include('assets.footer')
