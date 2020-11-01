$(document).ready(function(){
	$('.data-list').click(function(){
		$action = $(this).children(".actions");
		$notaction = $(this).siblings().children(".actions");
		$notaction.slideUp();
		$action.slideToggle();
	});
	$(".selector").flatpickr(
	{
		minDate: "today"
	});

});