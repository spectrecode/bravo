<?php
  ob_start("ob_gzhandler");
  session_start();
?>
<!DOCTYPE html>
<html lang="es" ng-app="bravo">
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
    <section class="Reconoce">
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
                <ul>
                  <li style="width: 33.3%;"><a href="reconoce-form.php?categoria=proactividad"><img src="./public/image/proactividad.jpg"></a><a href="reconoce-form.php?categoria=proactividad">PROACTIVIDAD</a><p style="text-align:center;margin-top: 10px;">Logró aportar de manera sobresaliente con nuevas ideas, identificó fallas clave o dio críticas constructivas que permitieron mejorar el trabajo. Actuó y tomó decisiones frente a diferentes problemas.</p></li>
                  <li style="width: 33.3%;"><a href="reconoce-form.php?categoria=compromiso"><img src="./public/image/compromiso.jpg"></a><a href="reconoce-form.php?categoria=compromiso">COMPROMISO</a><p style="text-align:center;margin-top: 10px;">Dejó de lado otras responsabilidades con tal de cumplir de manera excelente y a tiempo con su trabajo.</p></li>
                  <li style="width: 33.3%;"><a href="reconoce-form.php?categoria=versatilidad"><img src="./public/image/versatilidad.jpg"></a><a href="reconoce-form.php?categoria=versatilidad">PUNTUALIDAD</a><p style="text-align:center;margin-top: 10px;">Cumplió con los tiempos fijados y entregó un trabajo excelente. </p></li>
                </ul>
              </div>
            </div>
            <?php include("aside.php");?>
          </div>
        </div>
      </div>
    </section>
    <footer></footer>
    <script type="text/javascript">

      /* Iniciando jQuery */
      (function(){

        $("#m1").addClass("active");

      })()

    </script>
  </body>
</html>