<?php
  ob_start("ob_gzhandler");
  session_start();
  include("util/query.php");

  $cat = $_GET["categoria"];

  switch ($cat) {
    case 'proactividad':
      $re_tipo=1;
      break;
    case 'compromiso':
      $re_tipo=2;
      break;
    case 'versatilidad':
      $re_tipo=3;
      break;
    default:
      break;
  }
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Programa Bravo</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="./bower_components/normalize-css/normalize.css" rel="stylesheet">
    <link href="./public/css/app.css" rel="stylesheet">
    <script src="./bower_components/jquery/dist/jquery.min.js"></script>
    <!--script(src="./public/script/jquery.validate.min.js")-->
  </head>
  <body>
    <?php include("header.php");?>
    <section class="ReconoceForm">
      <div class="container">
        <div class="inner-top">
          <div class="col-top">
            <figure><img src="./public/image/cubo.jpg"></figure>
          </div>
          <div class="col-top">
            <hgroup>
              <h2>En Media Impact celebramos todos los días la pasión <br>que sentimos por lo que hacemos. </h2>
              <h3>¡Únete a nuestros 6 años de explosiva pasión!</h3>
            </hgroup>
          </div>
        </div>
        <div class="inner-bottom">
          <div class="block-title">
            <h1># DreamTeam</h1>
          </div>
          <div class="inner-box">
            <div class="box-left">
              <p>Cada día tenemos muchas responsabilidades, pero son esas acciones adicionales las que nos permiten ser mejores y todos debemos reconocerlas.</p>
              <div class="box-access">
                <div class="inner-left">
                  <figure><img src="./public/image/<?php echo $_GET["categoria"];?>.jpg"></figure>
                  <hgroup>
                    <h3><?php echo strtoupper($_GET["categoria"]);?></h3>
                  </hgroup>
                </div>
                <div class="inner-form">
                  <hgroup class="box-title">
                    <h2>GRACIAS POR RECONOCER EL BUEN<br>TRABAJO DE NUESTROS COMPAÑEROS.</h2>
                  </hgroup>
                  <form action="">
                    <div class="form-group">
                        <input type="text" placeholder="De: <?php echo utf8_encode($_SESSION['nombre']);?>" disabled >
                        <input type="hidden" id="re_de" value="<?php echo $_SESSION['id'];?>">
                        <input type="hidden" id="re_tipo" value="<?php echo $re_tipo;?>">
                    </div>
                    <div class="form-group">
                        <select id="re_para" style="border: 1px solid #575756;
display: block;
padding-bottom: 10px;
padding-top: 10px;
padding-left: 20px;
width: 320px;
background: #fff none repeat scroll 0 0;
border-radius: 5px;
font-size: 12px;
padding-left: 18px;">
                          <option value="">Para ...</option>
                          <?php 
                            for($n = 0; $n < $nUsuario; $n++){
                              $user_id = mysql_result($rsUsuario,$n,"user_id");
                              $user_name = mysql_result($rsUsuario,$n,"user_name");
                          ?>
                            <option value="<?php echo $user_id;?>"><?php echo utf8_encode($user_name);?></option>
                          <?php }?>
                        </select>
                    </div>
                    <div class="form-group">
                      <textarea id="re_mensaje" placeholder="Ingresa Detalle del Reconocimiento..."></textarea>
                    </div>
                    <input type="hidden" name="tipo_dream">
                    <div class="form-group"><a id="btn_enviar">Enviar</a></div>
                  </form>
                </div>
              </div>
            </div>
            <?php include("aside.php");?>
          </div>
        </div>
      </div>
    </section>
    <footer></footer>
    <script type="text/javascript">
      $(document).ready(function(){

        $("#m1").addClass("active");

          $('#btn_enviar').click( function(){

            $re_de = $('#re_de').val();
            $re_tipo = $('#re_tipo').val();
            $re_mensaje = $('#re_mensaje').val();
            $re_para = $('#re_para').val();

            $.ajax({
              type: "POST",
              url: "add.php",
              data:"re_de="+ $re_de +"&re_tipo="+$re_tipo+"&re_mensaje="+$re_mensaje+"&re_para="+$re_para,
              success: function(data) {
                if (data=="si"){
                  alert("¡Gracias! Tu reconocimiento ha sido registrado.");
                  $(location).attr('href','http://mediaimpact.pe/bravo/espiritu-mi.php');
                }
                else{
                  alert("Upps! No se registro.");
                }
              }
            });
          });
      });
    </script>
  </body>
</html>