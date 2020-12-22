@extends('layouts.app')

@section('titolo-pagina', 'Homepage - Prodotti - La Molisana')

@section('content')
    <main id="main-container">
        <div class="container">
            <h3>Le lunghe</h3>
            <div class="card-container">
                @foreach ($pasta as $tipo_pasta)
                    @if ($tipo_pasta['tipo'] == 'lunga')
                        <div class="card">
                            <img src="{{ $tipo_pasta['src'] }}" alt="{{ $tipo_pasta['titolo'] }}">
                            <div class="card-hover">
                                <a href="#">
                                    {{ $tipo_pasta['titolo'] }}
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <h3>Le corte</h3>
            <div class="card-container">
                @foreach ($pasta as $tipo_pasta)
                    @if ($tipo_pasta['tipo'] == 'corta')
                        <div class="card">
                            <img src="{{ $tipo_pasta['src'] }}" alt="{{ $tipo_pasta['titolo'] }}">
                            <div class="card-hover">
                                <a href="#">
                                    {{ $tipo_pasta['titolo'] }}
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <h3>Le cortissime</h3>
            <div class="card-container">
                @foreach ($pasta as $tipo_pasta)
                    @if ($tipo_pasta['tipo'] == 'cortissima')
                        <div class="card">
                            <img src="{{ $tipo_pasta['src'] }}" alt="{{ $tipo_pasta['titolo'] }}">
                            <div class="card-hover">
                                <a href="#">
                                    {{ $tipo_pasta['titolo'] }}
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </main>
@endsection
