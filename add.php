<?php

include "util/fns_db.php";
$cn = db_connect();

$re_de = $_POST["re_de"];
$re_mensaje = $_POST["re_mensaje"];
$re_para = $_POST["re_para"];
$re_tipo = $_POST["re_tipo"];
$datee = date("Y")."-".date("m")."-".date("d");
if ($re_mensaje == "" || $re_para == "" || $re_tipo == "") {
    echo "no";
} else {

    //Inserción en utf8
    mysql_query("SET NAMES 'utf8");

    // Registrar datos a la tabla
    $sql = "INSERT INTO reconocimiento (re_de, re_mensaje, re_para, re_tipo, re_fecha)
				VALUES('$re_de','$re_mensaje','$re_para', '$re_tipo', '$datee')";

    if (mysql_query($sql, $cn)) {
        echo "si";
    } else {
        echo "no";
    }
}
?>