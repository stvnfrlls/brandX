$(document).ready(function(){

	$('#chkProv').on('change', function(){

		$.ajax({
			url: '../process/getCity.php',
			type: 'POST',
			dataType: 'json',
			data: {
				province: $(this).val()
			},
			success: function(response){
				var optStr = '<option>-- Please Select --</option>';

				$.each(response, function (index, value) {
					optStr += '<option value="' + value + '">';
					optStr += value;
					optStr += '</option>';
				});
				
				$('#chkCity').html(optStr);
			},
			error: function(err) {
				console.error(err);
			}
		});

	});


});