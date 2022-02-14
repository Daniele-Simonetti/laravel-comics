@extends('guest.layout.base')

@section('documentTitle')
    {{ $nomePagina }}
@endsection

@section('content')
<div class="jumbo single_comic">
	<img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
</div>
<div class="comic__page">
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
<div class="talent_specs">
	<div class="talent">
		<div class="first-row">
			<h1>Talent</h1>
		</div>
		<div class="second-row">
			<h4>Art by:</h4>
			<a href="#"></a>
		</div>
		<div class="third-row">
			<h4>Written by:</h4>
			<a href="#"></a>
		</div>
	</div>
	<div class="specs">
		<div class="first">
			<h1>Specs</h1>
		</div>
		<div class="second">
			<h4>Series</h4>
			<a href="#"></a>
		</div>
		<div class="third">
			<h4>U.S. Price</h4>
			<span></span>
		</div>
		<div class="fourth">
			<h4>On Sale Date:</h4>
			<span></span>
		</div>
	</div>
</div>
@endsection