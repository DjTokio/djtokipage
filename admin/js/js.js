$(document).on('ready',function(){
			MenuDesplegable();	
			function MenuDesplegable(){

				var menu_ul = $('ul > li > ul'), //Variable para seleccionar el menu
		        menu_a  = $('ul > li > span');
		    
			    menu_ul.hide(); // Al iniciar la web se oculta el menu seleccionado
			    menu_a.click(function(e){ 
		    	e.preventDefault();//Aquí estamos evitando las etiquetas de anclaje de seguir cualquier enlace o cambio de la dirección en la barra de direcciones. por ejemplo, si alguna vez crear una etiqueta de ancla con un enlace de '#', al hacer clic en él, no se mostrará en la barra de direcciones ahora. Las etiquetas de anclaje son básicamente desactivados. 
		    	if (!$(this).hasClass('activo')) {
		    		$(this).removeClass('activo');//Si ya contenia la clase activo, se hara un retiro de la clase.
		    		menu_ul.filter(":visible").slideUp("normal"); //Si un menu se encontraba abierto se cerrara con filter 
		    		$(this).addClass('activo').next().stop(true,true).slideDown('normal'); //Si habia un menu y estaba cerrado o se habre uno nuevo, se le agrega la clase y se desliza hacia abajo

		    	}else{ //Ahora, tendremos que utilizar un ELSE como parte de nuestra sentencia condicional. Por lo tanto, eliminar ELSE la clase activa, y desliza el menú hasta ocultarlo. Esto es sólo para que podamos codificar cualquier menú sin tener que recargar la página. 
		    		$(this).removeClass('activo');
		    		$(this).next().stop(true,true).slideUp('normal');
	    		};
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

	