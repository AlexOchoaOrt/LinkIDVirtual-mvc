  <head>
     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
     <title>App Landy : Home</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="build/css/assets/images/favicon.ico"/>
    <!-- Font Awesome -->
    <link href="build/css/assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="build/css/assets/css/bootstrap.css" rel="stylesheet">    
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="build/css/assets/css/slick.css"/> 
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="build/css/assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="build/css/assets/css/animate.css"/>  
     <!-- Theme color -->
    <link id="switcher" href="build/css/assets/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="build/css/style.css" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Cabin for Title -->
    <link href='https://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>
    <!-- Pacifico for Logo   -->
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <!-- BEGAIN PRELOADER -->
  
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
  <!-- END PRELOADER -->

  
  <!-- Start menu area -->
  <div class="nav-area">      
    <a id="menu-btn" href="#"><i class="fa fa-bars"></i></a>
    <nav class="main-nav" id="main-menu">
      <span class="fa fa-remove" id="close"></span>
      <ul>  
        <li> <a href="#header"><i class="fa fa-home"></i><span>Inicio</span></a></li>
		    <li><a href="/login" onclick="window.location.href='/login';"><i class="fa fa-user-circle"></i><span>Iniciar Sesión</span></a></li>
        <li><a href="#features"><i class="fa fa-cogs"></i><span>¿Como funciona?</span></a></li>
        <li><a href="#download-app"><i class="fa fa-search-plus"></i><span>Servicios</span></a></li>
        <li><a href="#screenshot"><i class="fa fa-image"></i><span>Modelos</span></a></li>
        <li><a href="#contact"><i class="fa fa-envelope-o"></i><span>Contacto</span></a></li>    
      </ul>      
    </nav>
  </div>  
  <!-- End menu area -->

  <!-- Start header section --> 
  <header id="header">
    <div class="header-inner">
      <!-- Header image -->
      <img src="build/css/assets/images/header-bg.jpg" alt="img">
      <div class="overlay">
        <div class="header-content">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="header-top">
                  <!-- Start logo area -->
                  <div class="logo-area">
                    <!-- Image based logo -->
                    <a class="logo" href="/"><img src="build/css/assets/images/logo.png" alt="logo"></a>
                    <!-- Text based logo -->
                    <!-- <a class="logo" href="index.html">App Landy.</a> -->
                  </div>
                  <!-- End logo area -->                 
                </div>
              </div>
              <div class="col-md-12">
                <div class="header-bottom">
                <div class="row">
                  <div class="col-md-6 col-sm-6">
                    <div class="header-bottom-left">
                      <h1>LA TARJETA DIGITAL <br> MAS VERSATIL
                      Y FACIL DE COMPARTIR</h1>
                      <p>Maximiza tus relaciones profesionales
                       y genera contactos de forma mas eficiente</p>
                      <a class="download-btn" style="padding: 0px;margin: 8px;" href="/personal">Personal</a>
                      <a class="download-btn" style="padding: 0px;margin: 8px;" href="/empresa">Empresa</a>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="header-bottom-right">
                      <!-- <img src="build/css/assets/images/iphone-group1.png" alt="iphone grpup img"> -->
                      <img src="build/css/assets/images/Nexus-6-MockUp-group.png" alt="iphone grpup img">
                    </div>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>      
    </div>
  </header>
  <!-- End header section --> 

  <!-- Start Features -->
  <section id="features">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-area">
            <h2 class="title">¿Como <span>funciona?</span></h2>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
          </div>
        </div>
        <div class="col-md-12">
          <div class="features-area">
            <div class="row">
              <!-- Start features left -->
              <div class="col-md-4">
                <div class="features-left">
                  <ul class="features-list features-list-left">
                    <li class="wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">
                      <i class="fa fa-desktop"></i>
                      <div class="features-content">
                        <h4>Bootstrap 3.3</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                      </div>
                    </li>
                    <li class="wow fadeInLeft" data-wow-duration="0.75s" data-wow-delay="0.75s">
                      <i class="fa fa-edit"></i>
                      <div class="features-content">
                        <h4>Easy to Customize</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                      </div>
                    </li>
                    <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                      <i class="fa fa-object-ungroup"></i>
                      <div class="features-content">
                        <h4>Creative Design</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                      </div>
                    </li>
                    <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                      <i class="fa fa-flask"></i>
                      <div class="features-content">
                        <h4>Easy to Use</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- End features left -->
              <!-- Start features img -->
              <div class="col-md-4">
                <div class="feature-img wow fadeInUp">
                  <img src="build/css/assets/images/nexus-6-single.png" alt="iPhone mockup">
                </div>
              </div>
              <!-- End features img -->
              <!-- Start features right -->
              <div class="col-md-4">
                <div class="features-right">
                  <ul class="features-list features-list-right">
                    <li class="wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.5s">
                      <i class="fa fa-rocket"></i>
                      <div class="features-content">
                        <h4>Premium Quality</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                      </div>
                    </li>
                    <li class="wow fadeInRight" data-wow-duration="0.75s" data-wow-delay="0.75s">
                      <i class="fa fa-cogs"></i>
                      <div class="features-content">
                        <h4>Different Colors</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                      </div>
                    </li>
                    <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s">
                      <i class="fa fa-heart"></i>
                      <div class="features-content">
                        <h4>User Friendly</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                      </div>
                    </li>
                    <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s">
                      <i class="fa fa-support"></i>
                      <div class="features-content">
                        <h4>24/7 Support</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>   
              <!-- End features right -->                 
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Features -->


  <!-- start pricing table -->
  <section id="download-app">
    <div class="download-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-area wow fadeInUp">
              <h2 class="title">Servicios <span></span></h2>
              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
            </div>
          </div>
          <!-- Start download app content -->
          <div class="col-md-12">
            <div class="download-app-content">
              <!-- Start single download -->
              <a class="single-download wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s" href="#">
                <div class="download-icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="download-content">
                  <p>Cuenta</p>
                  <span>Personal</span>
                </div>
              </a>
              <!-- Start single download -->
              <a class="single-download wow fadeInLeft" data-wow-duration="0.75s" data-wow-delay="0.75s" href="#">
                <div class="download-icon">
                  <i class="fa fa-building"></i>
                </div>
                <div class="download-content">
                  <p>Cuenta</p>
                  <span>Empresarial</span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End pricing table -->

  <!-- Start screenshot -->
  <section id="screenshot">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-area wow fadeInUp">
            <h2 class="title">Modelos <span></span></h2>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
          </div>
        </div>
        <div class="col-md-12">
          <div class="screenshots-area">
            <ul class="screenshots-slide">
              <li class="col-md-3 wow fadeInLeft">
               <a class="fancybox" data-fancybox-group="gallery" href="assets/images/app-screenshot-popup.jpg"><img src="build/css/assets/images/app-screenshot.jpg" alt="app screenshot">
                  <div class="view-btn-area">
                    <span class="fa fa-search view-btn"></span>
                  </div>
               </a>
              </li>
               <li class="col-md-3 wow fadeInLeft">
                 <a class="fancybox" data-fancybox-group="gallery" href="assets/images/app-screenshot-popup.jpg"><img src="build/css/assets/images/app-screenshot.jpg" alt="app screenshot">
                    <div class="view-btn-area">
                      <span class="fa fa-search view-btn"></span>
                    </div>
                 </a>
              </li>
               <li class="col-md-3 wow fadeInLeft">
                 <a class="fancybox" data-fancybox-group="gallery" href="assets/images/app-screenshot-popup.jpg"><img src="build/css/assets/images/app-screenshot.jpg" alt="app screenshot">
                  <div class="view-btn-area">
                    <span class="fa fa-search view-btn"></span>
                  </div>
               </a>
              </li>
               <li class="col-md-3 wow fadeInLeft">
                 <a class="fancybox" data-fancybox-group="gallery" href="assets/images/app-screenshot-popup.jpg"><img src="build/css/assets/images/app-screenshot.jpg" alt="app screenshot">
                  <div class="view-btn-area">
                    <span class="fa fa-search view-btn"></span>
                  </div>
               </a>
              </li>
              <li class="col-md-3 wow fadeInLeft">
                 <a class="fancybox" data-fancybox-group="gallery" href="assets/images/app-screenshot-popup.jpg"><img src="build/css/assets/images/app-screenshot.jpg" alt="app screenshot">
                  <div class="view-btn-area">
                    <span class="fa fa-search view-btn"></span>
                  </div>
               </a>
              </li>
               <li class="col-md-3 wow fadeInLeft">
                 <a class="fancybox" data-fancybox-group="gallery" href="assets/images/app-screenshot-popup.jpg"><img src="build/css/assets/images/app-screenshot.jpg" alt="app screenshot">
                  <div class="view-btn-area">
                    <span class="fa fa-search view-btn"></span>
                  </div>
               </a>
              </li>
               <li class="col-md-3 wow fadeInLeft">
                 <a class="fancybox" data-fancybox-group="gallery" href="assets/images/app-screenshot-popup.jpg"><img src="build/css/assets/images/app-screenshot.jpg" alt="app screenshot">
                  <div class="view-btn-area">
                    <span class="fa fa-search view-btn"></span>
                  </div>
               </a>
              </li>
               <li class="col-md-3 wow fadeInLeft">
                 <a class="fancybox" data-fancybox-group="gallery" href="assets/images/app-screenshot-popup.jpg"><img src="build/css/assets/images/app-screenshot.jpg" alt="app screenshot">
                  <div class="view-btn-area">
                    <span class="fa fa-search view-btn"></span>
                  </div>
               </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End screenshot -->

  <!-- Start contact -->
  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-area">
              <h2 class="title"><span>Contacto</span></h2>
              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered</p>
          </div>
        </div>
        <div class="col-md-12">
          <div class="contact-area">
            <form action="" class="contact-form">
              <div class="form-group">                  
                <input type="text" class="form-control" placeholder="Tu nombree">
              </div>
              <div class="form-group">                  
                <input type="email" class="form-control" placeholder="Email">
              </div>
              <div class="form-group">                  
                <textarea class="form-control" rows="3" placeholder="Tu mensaje"></textarea>
              </div>
              <div class="send-area">
                <button type="submit" class="send-btn">Enviar mensaje</button>
              </div>  
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End contact -->
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>    
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!-- Bootstrap -->
  <script src="build/css/assets/js/bootstrap.js"></script>
  <!-- Slick Slider -->
  <script type="text/javascript" src="build/css/assets/js/slick.js"></script>   
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="build/css/assets/js/jquery.fancybox.pack.js"></script>
  <!-- Wow animation -->
  <script type="text/javascript" src="build/css/assets/js/wow.js"></script> 
  <!-- Off-canvas Menu -->   
  <script src="build/css/assets/js/classie.js"></script>
 
  <!-- Custom js -->
  <script type="text/javascript" src="build/css/assets/js/custom.js"></script>
  <!-- Start footer -->
  <?php 
    require_once __DIR__ . '/../header/footer.php';
  ?>
  <!-- End -->