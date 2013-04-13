function getResults(html)
{	
	$('#randomAct').empty().append(html);
}

$("#clickForAct").click(function(e) {
	$.ajax({
		type: $('#clickingForAct').attr('method'),
		url: $('#clickingForAct').attr('action'),
		data: $('#clickingForAct').serialize(),
		success: function(html) {
			//alert(html);
			getResults(html);
		}
	});
});
