$('body').on('click', '[data-order]', function() {
	var modal = $('.modal__order');
	modal.addClass('opened');
})
$('body').on('click', '[data-exit]', function() {
	$('.modal__order').removeClass('opened');
})
$(document).ready(function() {
	$('.masked__phone').mask('+7 (999) 999-99-99');
})