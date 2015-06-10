$(document).ready( function() {
	//PARALLAX
	$.stellar({
		horizontalScrolling: false,
		verticalOffset: 40
	});

	//CONTACT FORM HANDLING
	$("#contact-form").validate({
		//setup the formatting for the errors (using bootstrap classes)
		errorClass: "alert alert-danger",
		errorLabelContainer: "#output-area",
		wrapper: "li", //this puts error messages in a list if there is more than one

		//rules define what is good/bad input
		//TODO - this doesn't work for the checkboxes
		rules: {
			emailaddress: {
				required: true
			},
			subject: {
				required: true
			},
			message: {
				required: true
			}
		},
		//error messages to display to the end user
		messages: {
			emailaddress: {
				required: "Please include your email so I can reply."
			},
			subject: {
				required: "Please include a subject."
			},
			message: {
				required: "Please include a message."
			}
		},
		//setup an AJAX call to submit the form without redirecting to a blank page
		submitHandler: function(form) {
			$(form).ajaxSubmit({
				//POST type, not GET
				type: "POST",
				//where to submit data
				url: "lib/contact-form.php",
				//reformat POST data
				data: $(form).serialize(),
				//target tells us which item should be used to display the response
				target: "#output-area",
				//success event when server replies
				success: function(ajaxOutput) {
					//clear the form
					$(form).resetForm();
				}
			});
			return(false);
		}
	});
});