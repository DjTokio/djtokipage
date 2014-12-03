<?php
	$consulta="SELECT * FROM tokio_parallax";
	$queryparallax=mysql_query($consulta,$connect);

	if ($parallax=mysql_fetch_array($queryparallax)) {
		echo "background: url('sources/images/cabezera/$parallax[ParallaxURL]') 50% 0 no-repeat fixed ;";
	}
