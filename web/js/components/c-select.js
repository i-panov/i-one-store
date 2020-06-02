import $ from 'jquery';
import SlimSelect from 'slim-select';
import 'slim-select/dist/slimselect.min.css';



$(function() {
	$('.js-c-select').each(function(index, el) {
		var $el = $(el);
		let data = [];
		let params;
		$el.find('option').each(function(index, el) {
			var $elInner = $(el);
			var dataInner = {
				innerHTML: $elInner.data('html'),
				text: $elInner.data('text'),
				value: $elInner.data('value'),
			};
			data.push(dataInner);
		});

		if (!$(this).hasClass('simple')) {
			params = {
			  select: el,
			  valuesUseText: false,
			  showSearch: false,
			  data:data
			};
		}else{
			params = {
			  select: el,
			  showSearch: false,
			};
		}

		new SlimSelect(params)
	});
});
