<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>@yield('titolo-pagina', 'La Molisana')</title>{{-- se titolo pagina non definito, utilizzerà La Molisana --}}
        <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
    </head>
    <body>
        @include('partials.header')
        <main>
            @yield('content')
        </main>
        @include('partials.footer')
        <script src=" {{ asset('js/app.js') }} " charset="utf-8"></script>
    </body>
</html>
