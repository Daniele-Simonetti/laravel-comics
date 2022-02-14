@extends('guest.layout.base')

@section('documentTitle')
    {{ $nomePagina }}
@endsection

@section('content')
    <div class="comic__page">
        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
        <h1>{{ $comic['title'] }}</h1>
        <div class="comic__price">
            <div class="price">
                <h3>U.S. Price: <span>{{$comic['price']}}</span></h3>
                <h3>Available</h3>
            </div>
            <div class="availability">
                <h3>Check Availability</h3>
            </div>
        </div>
        <div class="comic__text">
            <p>{{ $comic['description'] }}</p>
        </div>
    </div>
@endsection