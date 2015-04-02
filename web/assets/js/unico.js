/*
unico come l'unico anello
*/

$(document).ready(function() {


			$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
			  var target = $(e.target).attr("href") // activated tab
			});

});