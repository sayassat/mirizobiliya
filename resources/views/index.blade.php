@extends('layout')

@section('title', 'Мир изобилия')

@section('content')

<!-- SLIDER-->
<div class="slider">
	<div class="slider-in wrapper">
		<div class="slider-main">
			@foreach ($products as $product)
			<div class="slider-main-item">
				<div class="sm-item-img"><img src="pic/slider1.jpg"></div>
				<div class="sm-item-text">
					<h2>{{ $product->name }}</h2><span class="sm-item-price">{{ $product->price }} ₸</span><a class="sm-item-details" href="/product/{{ $product->id }}">ДЕТАЛИ</a>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>

<!-- CATALOGUE-->
<div class="home_catalogue">
	<div class="home_catalogue_in wrapper">
		<div class="home_catalogue-top flexed">
			<h2 class="hc-top-heading">Каталог</h2><a class="hc-top-link" href="/catalogue">Показать всё</a>
		</div>
		<ul class="home_catalogue-body flexed">
			@foreach ($products as $product)
			<li class="hc-body-items">
				<div class="hcb-items-card">
					<div class="hcbi-card-img">
						<div class="hcbic-img-status">
							@if ($product->qty == 0) <div class="hcbici-status-item">Нет в наличии</div> @endif
						</div><a class="hcbic-img-link" href="/product/{{ $product->id }}"><img class="hcbic-img-item" src="pic/card.png" alt="Товар"></a><button class="hcbic-img-btn">Добавить в корзину</button>
					</div>
					<div class="hcbi-card-info"><a class="hcbic-info-name" href="/product/{{ $product->id }}">{{ $product->name }}</a><span class="hcbic-info-price">{{ $product->price }} ₸</span></div>
				</div>
			</li>
			@endforeach
		</ul>
	</div>
</div>

@endsection