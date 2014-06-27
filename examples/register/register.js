$(function() {

	// Use Reptile Forms
	var form = new ReptileForm('form', {
		validationError: function(err) {

			// Handle validatin errors any way you want
			this.el.before(JSON.stringify(err));

		},
		submitError: function(xhr, settings, thrownError) {
			
			// Handle server errors any way you want
			this.el.before('<p>Error From Server</p>');

		},
		submitSuccess: function(data) {

			// Handle successful submissions any way you want
			if (data.response) {
				this.el.before('<p>' + data.response + '</p>');
			}

		}
	});

});