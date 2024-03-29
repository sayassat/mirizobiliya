@extends('layout')

@section('title', 'Мир изобилия | Название товара')

@section('content')
<!-- PRODUCT -->
<div class="product_main">
	<div class="product_main-in wrapper">
		<section class="product_main-general flexed">
			<div class="product_main-general-pics">
				<ul class="pmg-pics-side">
					<li class="pmgp-side-item" style="background-image: url(../pic/{{ $product->pic }})" data-index="0"><img src="../../pic/{{ $product->pic }}" alt=""></li>
					<li class="pmgp-side-item" style="background-image: url(../pic/2.png)" data-index="1"><img src="../pic/2.png" alt=""></li>
					<li class="pmgp-side-item" style="background-image: url(../pic/3.png)" data-index="2"><img src="../pic/3.png" alt=""></li>
					<li class="pmgp-side-item" style="background-image: url(../pic/4.png)" data-index="3"><img src="../pic/4.png" alt=""></li>
				</ul>
				<ul class="pmg-pics-list">
					<li class="pmgp-list-item" style="background-image: url(../pic/{{ $product->pic }})"><img src="../pic/{{ $product->pic }}" alt=""></li>
					<li class="pmgp-list-item" style="background-image: url(../pic/2.png)"><img src="../pic/2.png" alt=""></li>
					<li class="pmgp-list-item" style="background-image: url(../pic/3.png)"><img src="../pic/3.png" alt=""></li>
					<li class="pmgp-list-item" style="background-image: url(../pic/4.png)"><img src="../pic/4.png" alt=""></li>
				</ul>
			</div>
			<div class="product_main-general-desc">
				<h1>{{ $product->name }}</h1>
				<div class="pmg-desc-price">{{ $product->price }}</div>
				<div class="pmg-desc-feedback">
					<div class="pmgd-feedback-top">
						<div class="pmgdf-top-rating">
							<div class="pmgdft-rating-item"><i class="icon pmgdftr-item-icon"><svg class="svg-icon star-open">
										<use xlink:href="#star-closed"></use>
									</svg></i></div>
							<div class="pmgdft-rating-item"><i class="icon pmgdftr-item-icon"><svg class="svg-icon star-open">
										<use xlink:href="#star-closed"></use>
									</svg></i></div>
							<div class="pmgdft-rating-item"><i class="icon pmgdftr-item-icon"><svg class="svg-icon star-open">
										<use xlink:href="#star-closed"></use>
									</svg></i></div>
							<div class="pmgdft-rating-item"><i class="icon pmgdftr-item-icon"><svg class="svg-icon star-open">
										<use xlink:href="#star-open"></use>
									</svg></i></div>
							<div class="pmgdft-rating-item"><i class="icon pmgdftr-item-icon"><svg class="svg-icon star-open">
										<use xlink:href="#star-open"></use>
									</svg></i></div>
						</div>
						<div class="pmgdf-top-count"><span>1</span><span> отзыв</span></div>
					</div>
					<p class="pmgd-feedback-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed velit neque, rhoncus in pharetra pellentesque, aliquet id purus. Pellentesque non volutpat ex. Donec in mollis nulla.</p>
				</div>
				<div class="pmg-desc-actions">
					<div class="pmgd-actions-number"><button class="pmgda-number-less">-</button><span class="pmgda-number-value">1</span><input type="hidden" id="products-number" name="" value="1"><button class="pmgda-number-more">+</button></div><button class="pmgd-actions-add">Добавить в корзину</button>
				</div>
				<div class="pmg-desc-socials">
					<div class="pmgd-socials-like"><button class="pmgds-like-btn"><i class="icon pmgds-like-icon"><svg class="svg-icon heart">
									<use xlink:href="#heart"></use>
								</svg></i></button></div>
					<div class="pmgd-socials-other"><a class="pmgds-other-link" href="#"><i class="icon pmgds-other-icon"><svg class="svg-icon linkedin">
									<use xlink:href="#linkedin"></use>
								</svg></i></a><a class="pmgds-other-link" href="#"><i class="icon pmgds-other-icon"><svg class="svg-icon linkedin">
									<use xlink:href="#facebook"></use>
								</svg></i></a><a class="pmgds-other-link" href="#"><i class="icon pmgds-other-icon"><svg class="svg-icon linkedin">
									<use xlink:href="#instagram"></use>
								</svg></i></a><a class="pmgds-other-link" href="#"><i class="icon pmgds-other-icon"><svg class="svg-icon linkedin">
									<use xlink:href="#twitter"></use>
								</svg></i></a></div>
				</div>
				<ul class="pmg-desc-details">
					<li class="pmgd-details-item"><strong class="pmgdd-item-name">SKU:</strong><span class="pmgdd-item-val">12</span></li>
					<li class="pmgd-details-item"><strong class="pmgdd-item-name">Категория:</strong><span class="pmgdd-item-val">{{ $product->categories->name }}</span></li>
				</ul>
			</div>
		</section>
		<section class="product_main-info">
			<ul class="pm-info-tabs">
				<li class="pmi-tabs-item active"><a class="pmit-item-link" href="#item-1">Описание</a></li>
				<li class="pmi-tabs-item"><a class="pmit-item-link" href="#item-2">Дополнительная информация</a></li>
				<li class="pmi-tabs-item"><a class="pmit-item-link" href="#item-3">Отзывы (1)</a></li>
			</ul>
			<div class="pm-info-body active" id="item-1">
				<p>{{ $product->description }}</p>
			</div>
			<div class="pm-info-body" id="item-2">
				<ul class="pmi-body-list">
					<li class="pmib-list-item"><strong class="pmibl-item-name">Вес:</strong><span class="pmibl-item-val">0.3 кг</span></li>
					<li class="pmib-list-item"><strong class="pmibl-item-name">Размеры:</strong><span class="pmibl-item-val">15 x 10 x 1 см</span></li>
					<li class="pmib-list-item"><strong class="pmibl-item-name">Производитель:</strong><span class="pmibl-item-val">Black, Browns, White</span></li>
					<li class="pmib-list-item"><strong class="pmibl-item-name">Материал:</strong><span class="pmibl-item-val">Metal</span></li>
				</ul>
			</div>
			<div class="pm-info-body" id="item-3">Пока нет отзывов</div>
		</section>
		<section class="product_main-relate">
			<h2 class="pm-relate-heading">Схожие товары</h2>
			<div class="pm-relate-show">
				<ul class="home_catalogue-body pmr-show-list">
					@foreach ($products as $product)
					<li class="hc-body-items">
						<div class="hcb-items-card">
							<div class="hcbi-card-img">
								<div class="hcbic-img-status">
									@if ($product->qty == 0) <div class="hcbici-status-item">Нет в наличии</div> @endif
								</div><a class="hcbic-img-link" href="/product/{{ $product->id }}"><img class="hcbic-img-item" @if ($product->pic == NULL) src="../pic/2.png" @else src="../pic/{{ $product->pic }}" @endif alt="{{ $product->name }}"></a><button class="hcbic-img-btn">Добавить в корзину</button>
							</div>
							<div class="hcbi-card-info"><a class="hcbic-info-name" href="/product/{{ $product->id }}">{{ $product->name }}</a><span class="hcbic-info-price">{{ $product->price }}</span></div>
						</div>
					</li>
					@endforeach
				</ul>
			</div>
		</section>
	</div>
</div>
@endsection