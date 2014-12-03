<?php
	
	$consulta="SELECT * FROM tokio_logo";
	$querylogo=mysql_query($consulta,$connect);

	if ($logo=mysql_fetch_array($querylogo)) {
		echo "<img src='sources/images/logo/$logo[LogoURL]' alt='DJTokio' id='inicio'>";
	}

	
