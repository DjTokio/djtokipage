$(document).on('ready',function(){
	
	function Recarga(){
		
			$('#musica').click(function() {
				$('.djtokio > article').load("contenido/musica/musica.php");
			});
			$('#videos').click(function() {
				$('#contenedor').load("contenido/videos/videos.php");
			});
			$('#contacto').click(function() {
				$('#contenedor').load("contenido/contacto/contacto.php");
			});
	};
	return Recarga();
	function parrallax(){
		$('section[data-type="parallax_section"]').each(function(){
			var $bgobj = $(this);
			$(window).scroll(function(){
				$window = $(window);
				var yPos = -($windows.scrollTop() / $bgobj.data('speed'));
				var coords = '50%'+yPos+'px';

				$bgob.css({backgroundPosition: coords});
			})
		})

	};
	return parrallax();

	
});

	