$(document).on('ready',function(){
	$('section[data-type="parallax_section"]').each(function(){
		var $bgobj = $(this);
		$(window).scroll(function(){
			$window = $(window);
			var yPos = -($windows.scrollTop() / $bgobj.data('speed'));
			var coords = '50%'+yPos+'px';

			$bgob.css({backgroundPosition: coords});
		})
	})

	
});
function recarga(){
	
		$('#musica').click(function() {
			$('#contenedor').load("contenido/musica/musica.php");
		});
		$('#videos').click(function() {
			$('#contenedor').load("contenido/videos/videos.php");
		});
		$('#contacto').click(function() {
			$('#contenedor').load("contenido/contacto/contacto.php");
		});
};

	