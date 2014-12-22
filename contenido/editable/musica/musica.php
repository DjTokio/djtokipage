<?php
	$consulta="SELECT * FROM tokio_musica ";
	$querymusic=mysql_query($consulta,$connect);
		echo "<ul id='playlist'>";
	while ($music=mysql_fetch_array($querymusic)) {
		echo "
		<li class='active'><a href='music/$music[MusicURL]'></a></li>
		";
	}
	echo "</ul>";