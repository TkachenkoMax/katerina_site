$("#login-button").click(function() {
	$(".popup").css("display", "block");
	$(".logform").css("display", "block");
});

$(".popup").click(function() {
	$(".popup").css("display", "none");
	$(".regform").css("display", "none");
	$(".logform").css("display", "none");
});

$(".close-button-pic").click(function() {
	$(".popup").css("display", "none");
	$(".regform").css("display", "none");
	$(".logform").css("display", "none");
});

$("#to-reg").click(function() {
	$(".regform").css("display", "block");
	$(".logform").css("display", "none");
});

$("#to-login").click(function() {
	$(".regform").css("display", "none");
	$(".logform").css("display", "block");
});