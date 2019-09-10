<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="img/favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Lapachos Servicios</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">
    <!-- alertify -->
    <link href="css/alertify/alertify.core.css" rel="stylesheet">
    <link href="css/alertify/alertify.default.css" rel="stylesheet">
  </head>
  <?php
  if (isset($_POST['name']) and isset($_POST['email']) and isset($_POST['message'])){
    ?><body id="page-top" onload="mostrar_mensaje()"><?php
  }else{
    ?><body id="page-top"><?php
  }
  ?>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Lapachos Servicios</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services"><strong>Servicios</strong></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio"><strong>Trabajos</strong></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact"><strong>Contacto</strong></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-heading text-uppercase">lapachos</div>
          <div class="intro-lead-in">servicio y mantenimiento para su empresa</div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Bienvenido</a>
        </div>
      </div>
    </header>
    <!-- Services -->
    <section class="page-section" id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Servicios</h2>
            <h3 class="section-subheading text-muted">Calidad, Responsabilidad y Seriedad</h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fab fa-envira fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Mantenimiento</h4>
            <p class="text-muted">Somos los socios perfectos para su empresa, ofreciendo una amplia variedad de servicios de limpieza y mantenimiento con soluciones integradas e integrales.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fab fa-pagelines fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Control de Plagas</h4>
            <p class="text-muted">Desarrollamos las soluciones más innovadoras, fiables y ecológicas para combatir cualquier problema ocasionado por plagas.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-tree fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Espacios Verdes</h4>
            <p class="text-muted">Contamos con procesos estandarizados, herramienras profesionales y cumplimos con todos los requisitos legales y reglamentarios que nuestra actividad requiere.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Portfolio Grid -->
    <section class="bg-light page-section" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Trabajos</h2>
            <h3 class="section-subheading text-muted">Algunos de nuestros trabajos.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-4 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/01-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Servicios</h4>
              <p class="text-muted">para industrias</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/02-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Servicios</h4>
              <p class="text-muted">para comercios</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/03-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Servicios</h4>
              <p class="text-muted">para hogares</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="col-lg-12 col-sm-12">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d28317.785566002432!2d-58.80723535910644!3d-27.477875683120722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sar!4v1499277251721" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <!-- Contact -->
    <section class="page-section" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Contacto</h2>
            <h3 class="section-subheading text-muted">Escribinos tus dudas o sugerencias</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form method="POST">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" name="name" type="text" placeholder="Nombre y Apellido *" required="required">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" name="email" type="email" placeholder="Correo Electrónico *" required="required">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" name="phone" type="tel" placeholder="Teléfono Celular">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" name="message" placeholder="Mensaje... *" required="required"></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button class="btn btn-primary btn-xl text-uppercase" type="submit">Enviar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Footer -->
    <footer class="footer">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-4">
            <script type="text/javascript">
                copyright=new Date();
                actualiza=copyright.getFullYear();
                document.write("<h6><em>Copyright © Lapachos Servicios "+ actualiza + "</em></h6>"); 
            </script>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://facebook.com">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://api.whatsapp.com/send?phone=5493794566859&text=" target="blank">
                  <i class="fab fa-whatsapp"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://instagram.com">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="mailto:lapachosjardineria@gmail.com">
                  <i class="far fa-envelope"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="http://sistemasctes.com.ar/">Power by Grasshoppers</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- Portfolio Modals -->
    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-7 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here 
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>-->
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/01-full.jpg" alt="">
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Cerrar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-7 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here 
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>-->
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/02-full.jpg" alt="">
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Cerrar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-7 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>-->
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/03-full.jpg" alt="">
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Cerrar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>
    <!-- alertify -->
    <script src="js/alertify/alertify.js"></script>
    <script type="text/javascript">
        function mostrar_mensaje() {
          alertify.success("El correo electrónico fue enviado...");
        }
    </script>
  </body>
  <?php
  if (isset($_REQUEST["name"]) and isset($_REQUEST["email"]) and isset($_REQUEST["message"])){
      $body = "
      <html> 
          <head> 
             <title>Consulta</title> 
          </head> 
          <body> 
              <h3>Consulta</h3> 
              <p> 
              ".$_REQUEST["message"]."
              </p> 
          </body> 
      </html>";
      $headers = "MIME-Version: 1.0\r\n"; 
      $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
      $headers .= "From: ".$_REQUEST["name"]." <".$_REQUEST["email"].">\r\n";
      $headers .= "Bcc: vergara_bruno@outlook.com\r\n"; 
      $mail = mail("vergara.bruben@gmail.com", "Enviadoalgun desde la pagina web", $body, $headers);
  }
  ?>
</html>