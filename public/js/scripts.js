// SLIDER

$(function(){
	$('.slider-main').slick({
		arrows: false,
		dots: true,
		autoplay: true,
		autoplaySpeed: 2500,
	});
})

// MY DROPDOWN
$(function(){
	$('.my_dropdown-main').on('click', function(){
		$('.my_dropdown-list').not( $(this).parent().find('.my_dropdown-list') ).hide();
		$('.my_dropdown-main').not( $(this) ).find('svg').removeClass('rotated');
		$(this).find('svg').toggleClass('rotated');
		$(this).parent().find('.my_dropdown-list').toggle();
		$(this).parent().toggleClass('active');
	})
	$(document).on('click', '.my_dropdown-item', function(){
		var text = $(this).text(),
			value = $(this).attr('data-value');
		$(this).parent().parent().find('.my_dropdown-input').val(value);
		$(this).parent().parent().find('.my_dropdown-selected').text(text);
		$(this).parent().hide();
		$(this).parent().parent().find('svg').removeClass('rotated');
		$(this).parent().parent().removeClass('active');

		var main = $(this).parent().parent().find('.my_dropdown-main');
		main.hasClass('my_dropdown-main_pc') ? main.removeClass('my_dropdown-main_pc') : null;
	});
})

// RADIO SWITCHER

$(function(){
	$('.cmbfb-item-radio').on('click', function(){
		$(this).find('.cmbfbi-radio-switch').toggleClass('active');
		if ($(this).find('input').val() == 1) {
			$(this).find('input').val(0);
		} else {
			$(this).find('input').val(1);
		}
	})
})

// RANGE

$(function(){
	var indicator = $('.cmbfr-box-indicator');
	var down = $('.cmbfr-box-down');
	var indWidth = indicator.width() + parseInt(down.css('left'));
	$('.cmbfr-box-down').draggable({
		containment: ".cmbf-range-box",
		axis: "x",
		drag: function(){
			indicator.css({
				left: down.css('left'),
				width: indWidth - parseInt(down.css('left')) + 'px',
			})
			console.log(parseInt(down.css('left')));
		}
	})
	$('.cmbfr-box-up').draggable({
		containment: ".cmbf-range-box",
		axis: "x",
	})
	indicator.css({
		left: $('.cmbfr-box-down').css('left'),
		width: $('.cmbf-range-box').width() - parseInt($('.cmbfr-box-up').css('left')) + indWidth + 'px',
	})
	indicator.show();
})

// PRODUCT COUNT

$(function(){
	$('.pmgda-number-less').on('click', function(){
		var count = parseInt($('.pmgda-number-value').text());
		if (count > 1) {
			$('.pmgda-number-value').text(count - 1);
			$('#products-number').val(count - 1);
		}
	});
	$('.pmgda-number-more').on('click', function(){
		var count = parseInt($('.pmgda-number-value').text());
		$('.pmgda-number-value').text(count + 1);
		$('#products-number').val(count + 1);
	})
})

// PRODUCT SLIDERS

$(function(){

	// product pictures

	$('.pmg-pics-list').slick({
		arrows: false,
		dots: true,
		speed: 500,
		fade: true,
	})

	// navigation

	$('.pmgp-side-item').on('click', function(){
		var num = parseInt($(this).attr('data-index'));
		$('.pmg-pics-list').slick('slickGoTo',num);
	})

	// related products

	$('.pmr-show-list').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
		arrows: false,
	});
})

// PRODUCT TABS

$(function(){
	$('.pmit-item-link').on('click', function(event){
		event.preventDefault();
		$('.pmit-item-link').parent().removeClass('active');
		$(this).parent().addClass('active');
		$('.pm-info-body').hide();
		console.log($(this).attr('href'));
		$($(this).attr('href')).show();
	})
})