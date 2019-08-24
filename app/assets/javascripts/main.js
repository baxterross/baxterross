$(window).load(function() {
	setTimeout(funciton() {
		$('.rollin').addClass('loaded');
	}, 100);
  
	$('.article h3').click(function() {
		$(e.currentTarget).parent().toggleClass('show');
	})
});