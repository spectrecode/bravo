<?php

include "util/fns_db.php";
$cn = db_connect();

$user_id = $_POST["user_id"];
$id = $_POST["id"];

    //Inserción en utf8
    mysql_query("SET NAMES 'utf8");

    // Registrar datos a la tabla
    if($user_id!==""){
        $sqlReco = "SELECT re.re_id, u.user_name, re.re_de, re.re_mensaje, re.re_tipo FROM reconocimiento re INNER JOIN usuario u ON re.re_para=u.user_id WHERE u.user_id=$user_id ORDER BY re.re_id DESC";
        $rsReco = mysql_query($sqlReco);
        $nReco = mysql_num_rows($rsReco);
    }else{
        $sqlReco = "SELECT re.re_id, u.user_name, re.re_de, re.re_mensaje, re.re_tipo FROM reconocimiento re INNER JOIN usuario u ON re.re_para=u.user_id ORDER BY re.re_id DESC";
        $rsReco = mysql_query($sqlReco);
        $nReco = mysql_num_rows($rsReco);
    }
    
  $result="";
  if($nReco==0){
    $result="<div class='inner-user'><div class='header'><h2>¡No se han encontrado resultados!</h2></div></div>";
  }else{

      for ($i = 0; $i < $nReco; $i++) {
        $re_id = mysql_result($rsReco,$i,"re_id");
        $user_name2 = mysql_result($rsReco,$i,"user_name");
        $re_de = mysql_result($rsReco,$i,"re_de");
        $re_mensaje2 = mysql_result($rsReco,$i,"re_mensaje");
        $re_tipo = mysql_result($rsReco,$i,"re_tipo");

        $sqlLike = "SELECT user_id FROM likes WHERE re_id=$re_id";
        $rsLike = mysql_query($sqlLike);
        $nLike = mysql_num_rows($rsLike);

        $valor=0;

        for($j = 0; $j < $nLike; $j++){
            $user_id2 = mysql_result($rsLike,$j,"user_id");
            if($user_id2==$id){
              $valor = 1;
            }
        }

        $sqlUserDe = "SELECT user_name FROM usuario WHERE user_id=$re_de";
        $rsUserDe = mysql_query($sqlUserDe);
        $user_de = mysql_result($rsUserDe,0,"user_name");

        $result.="<div class='inner-user'>";
        $result.="<div class='header'>";
        $result.="<h2>".utf8_encode($user_de." -> ".$user_name2)."</h2><a class='";
        if($valor==0){ 
        $result.="btn-like";
        }else{ 
        $result.=" ";
        }
        $result.="' data-noti='".$re_id."'><img src='./public/image/like.png' class='";
        if($valor==0){ 
        $result.="img-gris";
        }else{ 
        $result.=" ";
        }
        $result.="'></a><span>".$nLike."</span>";
        $result.="</div>";
        $result.="<div class='comment'>";
        $result.="<p>".$re_mensaje2."</p>";
        $result.="</div>";
        $result.="</div>";
    }
  }

  echo $result;
?>