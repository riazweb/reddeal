@extends('frontend.layouts.front-end-layout')
@section('main_content')

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> <!-- load jquery via CDN -->
<script type="text/javascript">
// magic.js
$(document).ready(function() {

	// process the form
	$('form').submit(function(event) {

		$('.form-group').removeClass('has-error'); // remove the error class
		$('.help-block').remove(); // remove the error text

		// get the form data
		// there are many ways to get this data using jQuery (you can use the class or id also)
		var formData = {
			'name' 				: $('input[name=name]').val(),
			'email' 			: $('input[name=email]').val(),
			'mobile' 			: $('input[name=mobile]').val(),
			'address' 			: $('input[name=address]').val(),
			'item_id' 			: $('input[name=item_id]').val(),
			'_token' 			: $('input[name=_token]').val()
		};

		// process the form
		$.ajax({
			type 		: 'POST', // define the type of HTTP verb we want to use (POST for our form)
			url 		: 'order-save', // the url where we want to POST
			data 		: formData, // our data object
			dataType 	: 'json', // what type of data do we expect back from the server
			encode 		: true
		})
			// using the done promise callback
			.done(function(data) {

				// log data to the console so we can see
				console.log(data); 

				// here we will handle errors and validation messages
				if ( ! data.success) {
					
					// handle errors for name ---------------
					if (data.errors.name) {
						$('#name-group').addClass('has-error'); // add the error class to show red input
						$('#name-group').append('<div class="help-block">' + data.errors.name + '</div>'); // add the actual error message under our input
					}

					// handle errors for email ---------------
					if (data.errors.email) {
						$('#email-group').addClass('has-error'); // add the error class to show red input
						$('#email-group').append('<div class="help-block">' + data.errors.email + '</div>'); // add the actual error message under our input
					}

					// handle errors for address alias ---------------
					if (data.errors.address) {
						$('#address-group').addClass('has-error'); // add the error class to show red input
						$('#address-group').append('<div class="help-block">' + data.errors.address + '</div>'); // add the actual error message under our input
					}

					// handle errors for address alias ---------------
					if (data.errors.mobile) {
						$('#mobile-group').addClass('has-error'); // add the error class to show red input
						$('#mobile-group').append('<div class="help-block">' + data.errors.mobile + '</div>'); // add the actual error message under our input
					}

				} else {

					// ALL GOOD! just show the success message!
					$('.message').append('<div class="alert alert-success">' + data.message + '</div>').hide(5000);
					$('form').trigger("reset");
					// usually after form submission, you'll want to redirect
					// window.location = '/thank-you'; // redirect a user to another page

				}
			})

			// using the fail promise callback
			.fail(function(data) {

				// show any errors
				// best to remove for production
				console.log(data);
			});

		// stop the form from submitting the normal way and refreshing the page
		event.preventDefault();
	});

});

</script>

<div class="col-sm-6 col-sm-offset-3">

	<h1>Check Out</h1>

	<!-- OUR FORM -->
	{!! Form::open(['url'=>'buy/order-save']) !!}
		<input type="hidden" name="item_id" value="<?= $id; ?>">
		<!-- NAME -->
		<div id="name-group" class="form-group">
			<label for="name">Name</label>
			<input type="text" class="form-control" name="name" placeholder="Henry Pym">
			<!-- errors will go here -->
		</div>

		<!-- EMAIL -->
		<div id="email-group" class="form-group">
			<label for="email">Email</label>
			<input type="text" class="form-control" name="email" placeholder="info@reddeal.com">
			<!-- errors will go here -->
		</div>

		<!-- Mobile Number -->
		<div id="mobile-group" class="form-group">
			<label for="mobile">Mobile</label>
			<input type="text" class="form-control" name="mobile" placeholder="Mobile Number">
			<!-- errors will go here -->
		</div>

		<!-- Address -->
		<div id="address-group" class="form-group">
			<label for="address">Address</label>
			<input type="text" class="form-control" name="address" placeholder="Address">
			<!-- errors will go here -->
		</div>

		<button type="submit" class="btn btn-success">Submit <span class="fa fa-arrow-right"></span></button>

	</form>
	<div class="message"></div>
</div>

@endsection