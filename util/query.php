	<?php
	header("Content-Type: text/html;charset=utf-8");
	include "fns_db.php";
	$cn = db_connect();

	$sqlUsuario = "SELECT user_id, user_name FROM usuario WHERE user_tipo=0";
	$rsUsuario = mysql_query($sqlUsuario);
	$nUsuario = mysql_num_rows($rsUsuario);

	$sqlReconocimiento = "SELECT re.re_id, u.user_name, re.re_de, re.re_fecha,re.re_mensaje, re.re_tipo FROM reconocimiento re INNER JOIN usuario u ON re.re_para=u.user_id ORDER BY re.re_id DESC";
	$rsReconocimiento = mysql_query($sqlReconocimiento);
	$nReconocimiento = mysql_num_rows($rsReconocimiento);

	?>