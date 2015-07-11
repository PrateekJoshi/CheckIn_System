$(function() {

    $('#login-form-link').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

	$('#guard_login_btn').click(function(e) {
		$("#display_login2").fadeIn(1000);
		$("#display_login1").css({"display":"none"});
		$("#display_login2").css({"display":"block"});

	});

	$('#student_login_btn').click(function(e) {
		$("#display_login1").fadeIn(1000);
		$("#display_login1").css({"display":"block"});
		$("#display_login2").css({"display":"none"});

	});

});