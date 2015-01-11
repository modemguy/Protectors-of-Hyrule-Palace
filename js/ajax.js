function ajaxRequest(page, data, handler){
	var retval;
	return $.ajax({
		url: page, type: 'POST', datatype: 'json', data: data,
		success: function(data) {
			var parse = JSON.parse(data, handler);
		}
	});
}