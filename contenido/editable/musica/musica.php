<?php
	$consulta="SELECT * FROM tokio_musica ORDER BY Music_ID DESC LIMIT 0, 4 ";
	$querymusic=mysql_query($consulta,$connect);
	if ($music=mysql_fetch_array($querymusic)) {
		echo"
		<audio controls='' id='audio' preload='auto' tabindex='0' type='audio/mpeg'>
			<source src='music/$music[MusicURL]' type='audio/mp3'/>
		Hola, tu navegador no está actualizado y no puede mostrar este contenido.
		</audio>";
	}
		echo "<ul id='playlist'>";
	while ($music=mysql_fetch_array($querymusic)) {
		echo "
		<li class='active'><a href='music/$music[MusicURL]'></a></li>
		";
	}
	echo "</ul>";