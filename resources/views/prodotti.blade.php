@extends('layouts.app')

@section('titolo-pagina', 'Homepage - Prodotti - La Molisana')

@section('content')
    <p>pagina prodotti:</p>



    @foreach ($pasta as $tipo_pasta)
        <div class="card">
            <img src="{{ $tipo_pasta['src'] }}" alt="{{ $tipo_pasta['titolo'] }}">
        </div>
        <div class="card-hover">
            <p>{{ $tipo_pasta['titolo'] }}</p>
        </div>
    @endforeach
@endsection
