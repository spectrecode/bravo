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
    <script src="./bower_components/angular/angular.min.js"></script>
    <!--script(src="./bower_components/angular-sanitize/angular-sanitize.min.js")-->
    <script src="./public/script/init.js"></script>
    <!--script(src="./public/script/service/services.js")-->
    <script src="./public/script/controller/controller.js"></script>
    <!--script(src="./public/script/jquery.validate.min.js")-->
  </head>
  <body ng-controller="bodyCrtl">
    <section class="login">
      <div class="line-01"></div>
      <div class="line-04"></div>
      <div class="inner-content">
        <div class="box box-title">
          <h2>PROGRAMA <br>DE RECONOCIMIENTO</h2>
          <h1>MEDIA IMPACT</h1>
        </div>
        <div class="box box-image">
          <figure><img src="./public/image/login.jpg" alt="Programa Bravo"></figure>
          <div class="line-02"></div>
          <div class="line-03"></div>
        </div>
        <div class="box box-login"> 
          <form>
            <div class="form-col">
              <div class="form-group">
                <input type="text" name="user" placeholder="Ingresu su usuario" id="nomuser">
              </div>
              <div class="form-group">
                <input type="password" name="pass" placeholder="Ingrese su contraseña" id="passuser">
              </div>
              <div class="form-group">
                <button id="btn-enviar">Iniciar sesión</button>
              </div>
              <div class="form-group">
                <p>Si olvidaste tu clave, ingresa <a href="javascript:void(0)">aquí</a></p>
              </div>
              <div class="form-group">
                <div id="result" style="text-align:center;"></div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
    <script type="text/javascript">

      /* Iniciando jQuery */
      (function(){
        function fLogin(){
          $.post("query-valida.php",{
            "user" : $('#nomuser').val(),
            "pass" : $('#passuser').val(),
          },
            function (data){
              console.log(data)
              if(data==1){
                var url = 'reconoce.php';
                $(location).attr('href',url);
              }else{
                $('#result').fadeIn(500);//.fadeOut(6000)
                $('#result').html(data)
              }
            }
          )
        }

        $("#btn-enviar").on("click",function(){
          fLogin();
        })
      })()

    </script>
  </body>
</html>