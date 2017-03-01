<?php
  ob_start("ob_gzhandler");
  session_start();
  include("util/query.php");
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Programa Bravo</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="./bower_components/normalize-css/normalize.css" rel="stylesheet">
    <link href="./public/css/app.css" rel="stylesheet">
    <script src="./bower_components/jquery/dist/jquery.min.js"></script>
    <!--script(src="./public/script/jquery.validate.min.js")-->
  </head>
  <body data-user="<?php echo $_SESSION['id'];?>">
    <?php include("header.php");?>
    <section class="Espiritu">
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
            <h1># Espirítu MI</h1>
          </div>
          <div class="inner-box">
            <div class="box-left">
              <p>
                Conoce a los miembros del #DreamTeam 
                destacados recientemente. <br>Recuerda que tú puedes ser el próximo reconocido.
              </p>
              <div class="box-access">
                <div class="inner-searchpeople">
                  <figure><img src="./public/image/comment.png"></figure>
                  <hgroup>
                    <h3>ÚLTIMOS <br>COMENTARIOS</h3>
                    <h4>Busca por nombres</h4>
                  </hgroup>
                  <form>
                    <select id="name">
                          <option value="">Seleccione Todo</option>
                          <?php 
                            for($n = 0; $n < $nUsuario; $n++){
                              $user_id = mysql_result($rsUsuario,$n,"user_id");
                              $user_name = mysql_result($rsUsuario,$n,"user_name");
                          ?>
                            <option value="<?php echo $user_id;?>"><?php echo utf8_encode($user_name);?></option>
                          <?php }?>
                        </select>
                  </form>
                  <a id="btn_name">Buscar</a>

                </div>
                <div class="inner-comment">
                  <?php 
                    for($n = 0; $n < $nReconocimiento; $n++){
                      $re_id = mysql_result($rsReconocimiento,$n,"re_id");
                      $user_name = mysql_result($rsReconocimiento,$n,"user_name");
                      $re_de = mysql_result($rsReconocimiento,$n,"re_de");
                      $re_mensaje = mysql_result($rsReconocimiento,$n,"re_mensaje");
                      $re_fecha = mysql_result($rsReconocimiento,$n,"re_fecha");
                      $re_tipo = mysql_result($rsReconocimiento,$n,"re_tipo");

                      $sqlLike = "SELECT user_id FROM likes WHERE re_id=$re_id";
                      $rsLike = mysql_query($sqlLike);
                      $nLike = mysql_num_rows($rsLike);

                      $valor = 0;

                        for($m = 0; $m < $nLike; $m++){
                          $user_id = mysql_result($rsLike,$m,"user_id");

                          if($user_id==$_SESSION['id']){
                            $valor = 1;
                          }
                        }

                      $sqlUserDe = "SELECT user_name FROM usuario WHERE user_id=$re_de";
                      $rsUserDe = mysql_query($sqlUserDe);
                      $user_de = mysql_result($rsUserDe,0,"user_name");
                  ?>
                  <div class="inner-user">
                    <div class="header">
                      <h2><?php echo utf8_encode($user_de." -> ".$user_name);?></h2><a class="<?php if($valor==0){ echo "btn-like";}else{ echo "";}?>" data-noti="<?php echo $re_id;?>"><img src="./public/image/like.png" class="<?php if($valor==0){ echo 'img-gris';}else{ echo '';}?>"></a><span><?php echo $nLike;?></span>
                      <p><b><?php echo $re_fecha;?></b> <img style="width:20px;width: 25px; margin-bottom: -8px;" src="./public/image/<?php if($re_tipo==1){ echo 'proactividad.jpg';}else{ if($re_tipo==2){ echo 'compromiso.jpg';}else{ echo 'versatilidad.jpg';}}?>"></p>
                    </div>
                    <div class="comment">
                      <p><?php echo $re_mensaje;?></p>
                    </div>
                  </div>
                  <?php }?>
                </div>
              </div>
            </div>
            <?php include("aside.php");?>
          </div>
        </div>
      </div>
    </section>
    <footer></footer>
    <style>
      #name{
        border: 1px solid #575756;
        display: block;
        padding-bottom: 10px;
        padding-top: 10px;
        padding-left: 5px;
        width: 100%;
        background: #fff none repeat scroll 0 0;
        border-radius: 5px;
        font-size: 12px;
      }
      .img-gris{
        filter: url('#grayscale'); /* Versión SVG para IE10, Chrome 17, FF3.5, Safari 5.2 and Opera 11.6 */
        -webkit-filter: grayscale(100%);
        -moz-filter: grayscale(100%);
        -ms-filter: grayscale(100%);
        -o-filter: grayscale(100%);
        filter: grayscale(100%); /* Para cuando es estándar funcione en todos */
        filter: Gray(); /* IE4-8 and 9 */
      }
      .btn-like{
        cursor: pointer;
      }
      .inner-comment{
        height:420px;
        overflow-y: scroll;
        width: 100%;
      }
      #btn_name{
        cursor: pointer;
      }
    </style>
    <script type="text/javascript">
      $(document).ready(function(){

        $("#m2").addClass("active");
        $id = $("body").attr("data-user");

          $('#btn_name').click( function(){

            $name = $('#name').val();

            $.ajax({
              type: "POST",
              url: "buscar.php",
              data:"user_id="+$name+"&id="+$id,
              success: function(data) {
                if (data!==""){
                  $('#name').val("");
                  $( ".inner-comment" ).empty();
                  $(".inner-comment").append(data);
                }
              }
            });
          });

          $('.btn-like').click( function(){

            $re_id = $(this).attr("data-noti");
            $user_id = $("body").attr("data-user");

            $.ajax({
              type: "POST",
              url: "like.php",
              data:"re_id="+$re_id+"&user_id="+$user_id,
              success: function(data) {
                if (data=="si"){
                  alert("Gracias");
                  location.reload();
                }
              }
            });
          });

      });
    </script>
  </body>
</html>