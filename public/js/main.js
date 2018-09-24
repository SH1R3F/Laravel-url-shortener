$(function () {

	// Remove page loading
	setTimeout(function(){
		$("#UntilPageLoad").remove();
	}, 300);

	var padding;

	/* Start header */
	function headerHeight() {
		$('body').css('paddingTop', $('nav').height() + 'px');
		$('header').height( $(window).height() - $('nav').height() );
	}
	function headerPadding() {
		padding = ($(window).innerHeight()  - $('header .container').height() ) / 2 - 1 + 'px';
		$('header').css( 'padding', padding + ' 0px') ;
	}
	//headerHeight();
	headerPadding()
	$(window).resize(/*headerHeight , */headerPadding);
	/* End header */

	/* Start Login */
	$('.login .form-group input.transfer').on('focusout', function () {
		if($(this).val() != '') {
			$(this).parent().parent().addClass('has-data');
		}
		else {$(this).parent().parent().removeClass('has-data');
		}
	});
	$('.openLogin').on('click', function() {
		$(this).addClass('active').siblings().removeClass('active');
		$('.bodylogin').addClass('d-flex');
	});
	$('.closeLogin').on('click', function() {
		$('.login').removeClass('active');
		$('.home').addClass('active');
		$('.bodylogin').removeClass('d-flex');
	});
	/* End Login */
});
