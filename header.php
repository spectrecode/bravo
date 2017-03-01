    <header class="headerMain">
      <div class="container">
        <div class="inner-main">
          <div class="block-item">
            <figure><img src="./public/image/logo.jpg" alt="Media Impact - Bravo"></figure>
            <hgroup>
              <h1>PROGRAMA DE  </h1>
              <h1>RECONOCIMIENTO </h1>
              <h1 class="rojo">MEDIA IMPACT</h1>
            </hgroup>
          </div>
          <div class="block-item">
            <p>
              Hola, <?php echo utf8_encode($_SESSION['nombre']);?> 
            </p>
            <?php 
              if(isset($_SESSION['user'])){
                echo "<a href='logout.php'>Cerrar sesión</a>";
              }else{
                header("Location:logout.php");
            }?>
          </div>
        </div>
        <nav>
          <ul>
            <li><a href="reconoce.php" id="m1">¡RECONOCE AHORA!</a></li>
            <li><a href="espiritu-mi.php" id="m2">MIRA LOS RECONOCIMIENTOS <br>+ RECIENTES</a></li>
            <!--<li><a href="#" id="m3">TOP 10 ESPÍRITU<br>DE SERVICIO</a></li>-->
          </ul>
        </nav>
      </div>
    </header>