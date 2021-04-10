$(document).ready(function() {
	
	loadUser();
	$('form').submit(function(e) {

		e.preventDefault();
		
		$.ajax({
			url: $('form').attr('action'),
			data: $('form').attr('action'),
			type: $('form').attr('method'),
					
			success: function() {
				loadUser();
			}
		})
		

	})

});

	function loadUser() {

		$.ajax({

			url: 'http://localhost/latihan-ajax/php/user.php',
			type: 'post',
			

			success: function(data) {
				$('#user').html(data);
			}

		});
		

	}