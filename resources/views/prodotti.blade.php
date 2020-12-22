@extends('layouts.app')

@section('titolo-pagina', 'Homepage - Prodotti - La Molisana')

@section('content')
    <main>
        <div class="container">
            <p>pagina prodotti:</p>
            <div class="card-container">
                    @foreach ($pasta as $tipo_pasta)
                        <div class="card">
                            <img src="{{ $tipo_pasta['src'] }}" alt="{{ $tipo_pasta['titolo'] }}">

                            <div class="card-hover">
                                <a href="#">
                                    {{ $tipo_pasta['titolo'] }}
                                </a>
                            </div>
                        </div>
                    @endforeach
            </div>
        </div>
    </main>
@endsection
