@extends('guest.layout.base')

@section('documentTitle')
    {{ $nomePagina }}
@endsection

@section('content')
    <div class="comic__page">
        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">

				<div class="box">
					<div class="comic__text">
							<h1>{{ $comic['title'] }}</h1>
							<div class="comic__price">
									<div class="price">
											<h3>U.S. Price: <span class="color-white">{{$comic['price']}}</span></h3>
											<h3 class="text-uppercase">Available</h3>
									</div>
									<div class="availability">
											<h3 class="color-white">Check Availability</h3>
									</div>
							</div>
							<p>{{ $comic['description'] }}</p>
					</div>
					<div class="comic__adv">
						<h2 class="text-uppercase">Advertisement</h2>
							<img src="{{ asset('img/adv.jpg') }}" alt="">
					</div>
				</div>
    </div>
@endsection