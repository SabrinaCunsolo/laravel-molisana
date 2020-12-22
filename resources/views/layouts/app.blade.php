<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>@yield('titolo-pagina', 'La Molisana')</title>{{-- se titolo pagina non definito, utilizzerà La Molisana --}}
        {{-- font --}}
        <link rel="preconnect" href="https://fonts.gstatic.com"><link href="https://fonts.googleapis.com/css2?family=Teko:wght@300&display=swap" rel="stylesheet">
        {{-- favicon --}}
        <link rel="icon" href="https://www.lamolisana.it/wp-content/uploads/2017/07/favicon.png"> 
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
