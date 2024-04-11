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
            <h2 class="title">Crea una cuenta <span>personal</span></h2>
          </div>
        </div>
        <div class="col-md-12">
          <div class="features-area">
            <div class="row">
            <div class="contact-area">
            <fieldset>
            <?php include_once __DIR__ ."/../templates/alertas2.php" ?>
            <form action="" class="contact-form" method="post">
              <div class="form-group">
              <label>Nombre:</label>
              <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Nombre" value="<?php echo s($usuario->nombre); ?>">
              </div>
              <div class="form-group">
              <label>Apellido paterno:</label>
              <input class="form-control" type="text" name="apellido_pa" id="apellido_pa" placeholder="Apellido paterno" value="<?php echo s($usuario->apellido_pa); ?>">
              </div>
              <div class="form-group">
              <label>Apellido materno:</label>
              <input class="form-control" type="text" name="apellido_ma" id="apellido_ma" placeholder="Apellido materno" value="<?php echo s($usuario->apellido_ma); ?>">
              </div>
              <div class="form-group">
              <label>Fecha de nacimiento:</label>
              <input class="form-control" type="date" name="fecha_na" id="fecha_na" value="<?php echo s($usuario->fecha_na); ?>">
              </div>
              <div class="form-group">
              <label>Telefono:</label>
              <input class="form-control"  type="tel" name="telefono" id="telefono" placeholder="Tu telefono" value="<?php echo s($contacto->telefono); ?>">
              </div>
              <div class="form-group">
              <label>Email:</label>                  
              <input class="form-control" type="email" name="email" id="email" placeholder="Tu email" value="<?php echo s($auth->email); ?>">
              </div>
              <div class="form-group">
              <label>Direccion:</label>
              <input class="form-control" type="text" name="direccion" id="direccion" placeholder="Tu direccion" value="<?php echo s($contacto->direccion); ?>">
              </div>
              <div class="form-group">
              <label>Codigo postal</label>
              <input class="form-control" type="number" name="cp" id="cp" placeholder="Tu codigo postal" value="<?php echo s($contacto->cp); ?>">
              </div>
              <div class="form-group">                  
              <label>Contraseña</label>
              <input class="form-control" type="password" name="password" id="password" placeholder="Ingrese su contraseña" value="<?php echo s($auth->password); ?>">
              </div>
              <div class="send-area">
              <button type="submit" class="send-btn-form">Enviar</button>
              </div>  
            </form>
            </fieldset>
          <a href="/login" class="enlace">¿Ya tienes cuenta? Inicia sesion</a>
          <a href="/olvide" class="enlace">¿Olvidaste tu password?</a>
          </div>             
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Features -->


  

  <!-- Start footer -->
  <?php 
    require_once __DIR__ . '/../header/footer.php';
  ?>
  <!-- End -->