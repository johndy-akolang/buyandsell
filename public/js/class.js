$(document).ready(function() {

	//signin
	$('#signin-blue').click(function() {

		$(window.location).attr('href', '/login');

	});

	//signup
	$('#signup-blue').click(function() {
	
		$(window.location).attr('href', '/register');

	});

});