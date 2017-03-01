<?php

include "util/fns_db.php";
$cn = db_connect();

$re_id = $_POST["re_id"];
$user_id = $_POST["user_id"];

$like_fecha = date("Y") .  date("m") . date("d");

if ($re_id == "") {
    echo "no-1";
} else {

    //Inserción en utf8
    mysql_query("SET NAMES 'utf8");

    // Registrar datos a la tabla
    $sql = "INSERT INTO likes (like_fecha, user_id, re_id) VALUES ('$like_fecha','$user_id','$re_id')";

    if (mysql_query($sql, $cn)) {
        echo "si";
    } else {
        echo "no-2";
    }
}
?>