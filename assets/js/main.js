// turn off nav when button is clicked and hid button
$('.nav-toggle').on('click', function() {
	// $('.site-nav').show();
	$('.site-nav').toggleClass('open');
	$(this).hide();
});

// when nav close button is clicked 
// reclose nav and show main button
$('.nav-off').on('click', function() {
	$('.site-nav').toggleClass('open');
	$('.nav-toggle').show();
});

