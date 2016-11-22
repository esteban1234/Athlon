<?php include 'head.php';?>
    <header>
        <div class="nav-header">
            <nav id="nav">
              <ul>
                <li><a href="../index.php"><span class="icon-home"></span>&nbsp;INICIO</a></li>
                <li><a href="QuienesSomos.php"><span class="icon-users"></span>&nbsp;QUIENES SOMOS</a></li>
                <li><a href="Servicios.php"><span class="icon-suitcase"></span>&nbsp;SERVICIOS</a></li>
                <li class="active"><a href="Contacto.php"><span class="icon-old-phone"></span>&nbsp;CONTACTO</a></li>
              </ul>
            </nav>
        </div>
      <!-- Logo -->
        <div id="logo">
          <img class="athlon" src="../img/ATHLON.png" alt="ATHLON PROFESIONALES EN ELECTRÓNICA">
        </div>

        <div id="header__icon" class="menu"><span class="icon-menu"></span></div>
    </header>

    <div class="img-fondo">
      <p class="contacto">Contáctanos</p>
    </div>

    <div class="cont-general">
      <div class="mapa">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d232.68913677158716!2d-89.6572816644002!3d21.07161622934872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f5675967ce781d1%3A0xdf47a108d1ae6ec8!2sCalle+57%2C+Fraccionamiento+Las+Am%C3%A9ricas%2C+M%C3%A9rida%2C+Yuc.!5e0!3m2!1ses-419!2smx!4v1477864507345"  frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <div class="direccion">
        <div class="texto-direccion">
          <span class="icon-location"></span>
          <div class="dir-text">
            <div>DIRECCION</div>
            <p>Calle 57B Num. 839 entre calle 100 Y 104, COL. Las Americas </p>
          </div>
        </div>
        <div class="texto-direccion">
          <span class="icon-phone"></span>
          <div class="dir-text">
            <div>TELEFONO</div>
            <p>9999308020 </p>
          </div>
        </div>
        <div class="texto-direccion">
          <span class="icon-clock"></span>
          <div class="dir-text">
            <div>HORARIO</div>
            <p>Lunes a Viernes de 9am a 6pm </p>
          </div>
        </div>
        <div class="texto-direccion">
          <span class="icon-mail"></span>
          <div class="dir-text">
            <div>CORREO</div>
            <p>informacion@athlon.mx</p>
          </div>
        </div>
      </div>
    </div>
    <div>
      <div class="img-fondo">
        <p class="contacto">Escríbenos</p>
      </div>
      <p class="texto_servicio"> Escribenos tus comentario, dudas o preguntas, estamos para servirte.</p>
      <form id="form" action="envia.php" method="post">
        <div class="group-input">
          <div class="input-group">
            <span id="msj"></span>
            <label class="label">Nombre:</label>
            <input type="text" name="nombre" placeholder="Nombre completo" required/>
          </div>
          <div class="input-group">
            <span id="msj"></span>
            <label class="label">Telefono:</label>
            <input type="text" name="telefono">
          </div>

          <div class="input-group">
            <span id="msj"></span>
            <label class="label">Correo:</label>
            <input type="text"  name="correo">
          </div>
          <div class="group-comentario">
            <span id="msj"></span>
            <label class="label" >Comentarios:</label>
            <textarea name="comentario" rows="8" cols="40"></textarea>
          </div>
        </div>
        <input type="submit" class="enviar" value="Enviar">
      </form>
    </div><br><br>
    <span class="ir-arriba icon-arrow-bold-up"></span>

    <?php include 'Pie.php';?>

    <script type="text/javascript" src="../js/jquery.js"></script>
    <script src="../js/menu.js"></script>
    <script type="text/javascript" src="../js/iconoarriba.js"></script>
  </body>
</html>
