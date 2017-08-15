$ = require('jquery');

$(function () {
	$('.navigation__icon').click(function () {
		$('.navigation__list').toggleClass('navigation__list--active');
		$(this).toggleClass('navigation__icon--active');
	})
})
