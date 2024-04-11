<?php 
    require_once __DIR__ . '/../header/header.php';
  ?>  

<link href="build/css/app.css" rel="stylesheet">
 

  <!-- Start Features -->
  <section id="features">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-area">
            <h2 class="title">Iniciar <span>Sesion</span></h2>
          </div>
        </div>
        <div class="col-md-12">
          <div class="features-area">
            <div class="row">
            <div class="contact-area">
            <fieldset>
            <?php include_once __DIR__ ."/../templates/alertas.php" ?>
            <form action="" class="contact-form" method="post">
              <div class="form-group">
              <label>Email:</label>                  
              <input class="form-control" type="email" name="email" id="email" placeholder="Tu email" value="<?php echo s($auth->email); ?>">
              </div>
              <div class="form-group">                  
              <label>Contraseña</label>
              <input class="form-control" type="password" name="password" id="password" placeholder="Ingrese su contraseña" value="<?php echo s($auth->password); ?>">
              </div>
              <div class="send-area">
                <button type="submit" class="send-btn-form">Ingresar</button>
              </div>  
            </form>
            </fieldset>
            <a href="/productos" class="enlace">¿Aun no tienes una cuenta? Crea una</a>
          <a href="/olvide" class="enlace">¿Olvidaste tu password?</a>
          </div>             
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Features -->


  

  <?php 
    require_once __DIR__ . '/../header/footer.php';
  ?>  