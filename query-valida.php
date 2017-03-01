<?php
	session_start();

	include "util/fns_db.php";
	$cn = db_connect();
	
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	
	$sql = "SELECT user_id, user_name, user_nick, user_pass 
			FROM usuario
			WHERE user_nick = '$user'";
		
	$rs = mysql_query($sql);
	$n = mysql_num_rows($rs);

	if($n){
		$xpass = mysql_result($rs,0,'user_pass');
		$nombre = mysql_result($rs,0,'user_name');
		$user_id = mysql_result($rs,0,'user_id');
		if($pass == $xpass){
			$_SESSION['id'] = $user_id;
			$_SESSION['user'] = $user;
			$_SESSION['nombre'] = $nombre;				
			echo 1;
		}else{
			echo "Contraseña Incorrecta";
		}
	}else{
		echo "No existe el nombre de usuario";
	}
?>