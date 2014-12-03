$(document).on('ready',function(){
		ScrollParallax();
		function ScrollParallax () {
			$('section[data-type="parallax_section"]').each(function(){
			var $obj = $(this);
			$(window).scroll(function(){
				$window = $(window);
				var yPos = -($window.scrollTop() / $obj.data('speed'));
				var coords = '50%'+yPos+'px';

				$obj.css({backgroundPosition:coords});
			})
		});
		};
		musicplaylist();
		function musicplaylist () {
				var audio;
				var playlist;
				var tracks;
				var current;
				initaudio();
				function initaudio(){
					current=0;
				audio=$('audio');
				playlist=$('#playlist');
				tracks=playlist.find('li a');
				len=tracks.length-1;
				audio[0].volume=.5;
				audio[0].autoplay=false;
				playlist.find('a').click(function(e){
					e.preventDefault();
				link=$(this);
				current=link.parent().index();
				runaudio(link,audio[0])
				});
				audio[0].addEventListener('ended',function(e){
					current++;
				if(current>len){
					current=0;
				link=playlist.find('a')[0]
				}else{
					link=playlist.find('a')[current]
				}
				runaudio($(link),audio[0])})}function runaudio(link,player){
				player.src=link.attr('href');
				par=link.parent();
				par.addClass('active').siblings().removeClass('active');
				audio[0].load();
				audio[0].play()
				}
		}
	function Recarga(){
		
			$('#inicio').click(function() {
				$('#contenedor').load("contenido/content/inicio/inicio.php");
			});
			$('#musica').click(function() {
				$('#contenedor').load("contenido/content/musica/musica.php");
			});
			$('#videos').click(function() {
				$('#contenedor').load("contenido/content/videos/videos.php");
			});
			$('#contacto').click(function() {
				$('#contenedor').load("contenido/content/contacto/contacto.php");
			});
	};
	return Recarga();

	
});

	