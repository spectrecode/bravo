<?php

	define("DB_SERVER","internal-db.s77722.gridserver.com");
	define("DB_USER","db77722_sonrie");
	define("DB_PASSWORD","NOTEPADmax12!");
	define("DB_DATABASE","db77722_mi");

	function db_connect()
	{
		$result = mysql_connect(DB_SERVER, DB_USER, DB_PASSWORD);
		if (!$result)
			return false;
		if (!mysql_select_db(DB_DATABASE))
			return false;
		return $result;
	}
	
?>