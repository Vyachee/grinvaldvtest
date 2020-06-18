$('.g-slider-list li').click(function() {
	$('.g-slider-list li').removeClass('g-list-item-active');
	$(this).addClass('g-list-item-active');

	let clickedItemIndex = $(this).index();

	$('.g-all-slides').animate({
		'top':-clickedItemIndex*100 + '%'
	}, 250);
});