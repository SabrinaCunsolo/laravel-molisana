<header>
    <div class="logo-molisana">
        <img src=" {{ asset('images/logo-molisana-header.png') }} " alt="Logo Molisana">
    </div>
    <div class="navbar-menu">
        <ul>
            <li>
                <a href="{{ url('/') }}">Home</a>
            </li>
            <li>
                <a href="{{ url('prodotti') }}">Prodotti</a>
            </li>
            <li>
                <a href="{{ url('news') }}">News</a>
            </li>
        </ul>
    </div>
</header>
