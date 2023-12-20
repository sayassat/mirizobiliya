@extends('layout')

@section('title', 'Мир изобилия')

@section('content')

<!-- SLIDER-->
<div class="slider">
	<div class="slider-in wrapper">
		<div class="slider-main">
			<div class="slider-main-item">
				<div class="sm-item-img"><img src="pic/slider1.jpg"></div>
				<div class="sm-item-text">
					<h2>Товар №1</h2><span class="sm-item-price">10 000₸</span><a class="sm-item-details" href="#">ДЕТАЛИ</a>
				</div>
			</div>
			<div class="slider-main-item">
				<div class="sm-item-img"><img src="pic/slider2.jpg"></div>
				<div class="sm-item-text">
					<h2>Товар №2</h2><span class="sm-item-price">20 000₸</span><a class="sm-item-details" href="#">ДЕТАЛИ</a>
				</div>
			</div>
			<div class="slider-main-item">
				<div class="sm-item-img"><img src="pic/slider3.jpg"></div>
				<div class="sm-item-text">
					<h2>Товар №3</h2><span class="sm-item-price">30 000₸</span><a class="sm-item-details" href="#">ДЕТАЛИ</a>
				</div>
			</div>
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
			<li class="hc-body-items">
				<div class="hcb-items-card">
					<div class="hcbi-card-img"><a class="hcbic-img-link" href="#"><img class="hcbic-img-item" src="pic/card.png" alt="Товар"></a><button class="hcbic-img-btn">Добавить в корзину</button></div>
					<div class="hcbi-card-info"><a class="hcbic-info-name" href="#">Товар</a><span class="hcbic-info-price">5 000₸</span></div>
				</div>
			</li>
			<li class="hc-body-items">
				<div class="hcb-items-card">
					<div class="hcbi-card-img"><a class="hcbic-img-link" href="#"><img class="hcbic-img-item" src="pic/card.png" alt="Товар"></a><button class="hcbic-img-btn">Добавить в корзину</button></div>
					<div class="hcbi-card-info"><a class="hcbic-info-name" href="#">Товар</a><span class="hcbic-info-price">15 000₸</span></div>
				</div>
			</li>
			<li class="hc-body-items">
				<div class="hcb-items-card">
					<div class="hcbi-card-img"><a class="hcbic-img-link" href="#"><img class="hcbic-img-item" src="pic/card.png" alt="Товар"></a><button class="hcbic-img-btn">Добавить в корзину</button></div>
					<div class="hcbi-card-info"><a class="hcbic-info-name" href="#">Товар</a><span class="hcbic-info-price">10 000₸</span></div>
				</div>
			</li>
			<li class="hc-body-items">
				<div class="hcb-items-card">
					<div class="hcbi-card-img"><a class="hcbic-img-link" href="#"><img class="hcbic-img-item" src="pic/card.png" alt="Товар"></a><button class="hcbic-img-btn">Добавить в корзину</button></div>
					<div class="hcbi-card-info"><a class="hcbic-info-name" href="#">Товар</a><span class="hcbic-info-price">10 000₸</span></div>
				</div>
			</li>
			<li class="hc-body-items">
				<div class="hcb-items-card">
					<div class="hcbi-card-img"><a class="hcbic-img-link" href="#"><img class="hcbic-img-item" src="pic/card.png" alt="Товар"></a><button class="hcbic-img-btn">Добавить в корзину</button></div>
					<div class="hcbi-card-info"><a class="hcbic-info-name" href="#">Товар</a><span class="hcbic-info-price">10 000₸</span></div>
				</div>
			</li>
			<li class="hc-body-items">
				<div class="hcb-items-card">
					<div class="hcbi-card-img"><a class="hcbic-img-link" href="#"><img class="hcbic-img-item" src="pic/card.png" alt="Товар"></a><button class="hcbic-img-btn">Добавить в корзину</button></div>
					<div class="hcbi-card-info"><a class="hcbic-info-name" href="#">Товар</a><span class="hcbic-info-price">15 000₸</span></div>
				</div>
			</li>
		</ul>
	</div>
</div>

@endsection