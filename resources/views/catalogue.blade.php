@extends('layout')

@section('title', 'Мир изобилия | Каталог товаров')

@section('content')
<!-- CATALOGUE -->
<section class="catalogue_main">
	<div class="catalogue_main-in wrapper">
		<h2 class="catalogue_main-heading">Каталог товаров</h2>
		<div class="catalogue_main-body">
			<div class="cm-body-filters">
				<div class="cmb-filters-search"><input type="text" name="" value="" placeholder="Поиск"><i class="icon cmbf-search-icon"><svg class="svg-icon loupe">
							<use xlink:href="#loupe"></use>
						</svg></i></div>
				<div class="cmb-filters-lists">
					<div class="cmbf-lists-item">
						<div class="my_dropdown-container">
							<div class="my_dropdown-main"><span class="my_dropdown-selected">Категория 1</span><i class="icon cmbfl-item-icon"><svg class="svg-icon half-arrow">
										<use xlink:href="#half-arrow"></use>
									</svg></i></div>
							<ul class="my_dropdown-list">
								<li class="my_dropdown-item" data-value="1">Категория 1</li>
								<li class="my_dropdown-item" data-value="2">Категория 2</li>
								<li class="my_dropdown-item" data-value="3">Категория 3</li>
							</ul><input class="my_dropdown-input" type="hidden" name="country" value="">
						</div>
					</div>
					<div class="cmbf-lists-item">
						<div class="my_dropdown-container">
							<div class="my_dropdown-main"><span class="my_dropdown-selected">Сортировать по</span><i class="icon cmbfl-item-icon"><svg class="svg-icon half-arrow">
										<use xlink:href="#half-arrow"></use>
									</svg></i></div>
							<ul class="my_dropdown-list">
								<li class="my_dropdown-item" data-value="1">Сортировать 1</li>
								<li class="my_dropdown-item" data-value="2">Сортировать 2</li>
								<li class="my_dropdown-item" data-value="3">Сортировать 3</li>
							</ul><input class="my_dropdown-input" type="hidden" name="country" value="">
						</div>
					</div>
				</div>
				<div class="cmb-filters-range">
					<div class="cmbf-range-box">
						<div class="cmbfr-box-track"></div>
						<div class="cmbfr-box-down"></div>
						<div class="cmbfr-box-up"></div>
						<div class="cmbfr-box-indicator"></div>
					</div>
					<div class="cmbf-range-value">Price: <span class="cmbfr-value-min">1 500₸ </span>- <span class="cmbfr-value-max">40 000₸</span></div>
				</div>
				<div class="cmb-filters-buttons">
					<div class="cmbf-buttons-item"><span class="cmbfb-item-text">Скидки</span>
						<div class="cmbfb-item-radio">
							<div class="cmbfbi-radio-switch"></div><input type="hidden" name="" value="">
						</div>
					</div>
					<div class="cmbf-buttons-item"><span class="cmbfb-item-text">В наличии</span>
						<div class="cmbfb-item-radio">
							<div class="cmbfbi-radio-switch"></div><input type="hidden" name="" value="">
						</div>
					</div>
				</div>
			</div>
			<div class="cm-body-products">
				<ul class="home_catalogue-body flexed">
					<li class="hc-body-items">
						<div class="hcb-items-card">
							<div class="hcbi-card-img">
								<div class="hcbic-img-status">
									<div class="hcbici-status-item">- %21</div>
									<div class="hcbici-status-item">Нет в наличии</div>
								</div><a class="hcbic-img-link" href="/product"><img class="hcbic-img-item" src="pic/card.png" alt="Товар"></a><button class="hcbic-img-btn">Добавить в корзину</button>
							</div>
							<div class="hcbi-card-info"><a class="hcbic-info-name" href="#">Товар</a><span class="hcbic-info-price">5 000₸</span></div>
						</div>
					</li>
					<li class="hc-body-items">
						<div class="hcb-items-card">
							<div class="hcbi-card-img">
								<div class="hcbic-img-status">
									<div class="hcbici-status-item">- %21</div>
									<div class="hcbici-status-item">Нет в наличии</div>
								</div><a class="hcbic-img-link" href="#"><img class="hcbic-img-item" src="pic/card.png" alt="Товар"></a><button class="hcbic-img-btn">Добавить в корзину</button>
							</div>
							<div class="hcbi-card-info"><a class="hcbic-info-name" href="#">Товар</a><span class="hcbic-info-price">15 000₸</span></div>
						</div>
					</li>
					<li class="hc-body-items">
						<div class="hcb-items-card">
							<div class="hcbi-card-img">
								<div class="hcbic-img-status">
									<div class="hcbici-status-item">- %21</div>
									<div class="hcbici-status-item">Нет в наличии</div>
								</div><a class="hcbic-img-link" href="#"><img class="hcbic-img-item" src="pic/card.png" alt="Товар"></a><button class="hcbic-img-btn">Добавить в корзину</button>
							</div>
							<div class="hcbi-card-info"><a class="hcbic-info-name" href="#">Товар</a><span class="hcbic-info-price">10 000₸</span></div>
						</div>
					</li>
					<li class="hc-body-items">
						<div class="hcb-items-card">
							<div class="hcbi-card-img">
								<div class="hcbic-img-status">
									<div class="hcbici-status-item">- %21</div>
									<div class="hcbici-status-item">Нет в наличии</div>
								</div><a class="hcbic-img-link" href="#"><img class="hcbic-img-item" src="pic/card.png" alt="Товар"></a><button class="hcbic-img-btn">Добавить в корзину</button>
							</div>
							<div class="hcbi-card-info"><a class="hcbic-info-name" href="#">Товар</a><span class="hcbic-info-price">10 000₸</span></div>
						</div>
					</li>
					<li class="hc-body-items">
						<div class="hcb-items-card">
							<div class="hcbi-card-img">
								<div class="hcbic-img-status">
									<div class="hcbici-status-item">- %21</div>
									<div class="hcbici-status-item">Нет в наличии</div>
								</div><a class="hcbic-img-link" href="#"><img class="hcbic-img-item" src="pic/card.png" alt="Товар"></a><button class="hcbic-img-btn">Добавить в корзину</button>
							</div>
							<div class="hcbi-card-info"><a class="hcbic-info-name" href="#">Товар</a><span class="hcbic-info-price">10 000₸</span></div>
						</div>
					</li>
					<li class="hc-body-items">
						<div class="hcb-items-card">
							<div class="hcbi-card-img">
								<div class="hcbic-img-status">
									<div class="hcbici-status-item">- %21</div>
									<div class="hcbici-status-item">Нет в наличии</div>
								</div><a class="hcbic-img-link" href="#"><img class="hcbic-img-item" src="pic/card.png" alt="Товар"></a><button class="hcbic-img-btn">Добавить в корзину</button>
							</div>
							<div class="hcbi-card-info"><a class="hcbic-info-name" href="#">Товар</a><span class="hcbic-info-price">15 000₸</span></div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>
@endsection