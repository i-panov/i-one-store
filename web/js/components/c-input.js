import $ from 'jquery';


var formControl = $('.c-input__input');
$(document).on('focus', '.c-input__input', function(event) {
	$(this).closest('.js-c-input--placeholder').addClass('active');
});
$(document).on('blur', '.c-input__input', function(event) {
	placeholder(this);
});

$(window).on('load', placeholder($('.c-input__input'), true));
function placeholder($this, $bool = false) {
	if ($bool) {
    	$($this).each(function(index, el) {
    		eachHolder(this);
		});
	}
	else{eachHolder($this); }
}
function eachHolder($this) {
	var formField = $($this).closest('.js-c-input--placeholder');
	if ($($this).val().length >= 1) formField.addClass('active');
		  else formField.removeClass('active');
}