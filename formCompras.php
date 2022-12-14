<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>Registro de Pedidos</title>

  <!-- Mobile Specific Metas
================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

  <!-- Favicon
================================================== -->
  <link rel="icon" type="image/png" href="images/favicon.png">

  <!-- CSS
================================================== -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
  <!-- Animation -->
  <link rel="stylesheet" href="plugins/animate-css/animate.css">
  <!-- slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <!-- Colorbox -->
  <link rel="stylesheet" href="plugins/colorbox/colorbox.css">
  <!-- Template styles-->
  <link rel="stylesheet" href="css/style.css">

  <?php
    session_start();
    $Usession= $_SESSION['usuarioS'];

    if ($Usession == null || $Usession == '') {
        echo '<script> alert("Acceso denegado: Inicia Sesion"); window.location="index.html"</script>';
    }
   ?>
   <script src="js/validadorInputs.js"></script>

</head>
<body>
  <div class="body-inner">
    <div id="top-bar" class="top-bar">
        <div class="container">
          <div class="row">
              <div class="col-lg-8 col-md-8">
                <ul class="top-info text-center text-md-left">
                    <li><i class="fas fa-map-marker-alt"></i> <p class="info-text">76036 Empresa LANDEROS, MX</p>
                    </li>
                </ul>
              </div>
              <!--/ Top info end -->

              <div class="col-lg-4 col-md-4 top-social text-center text-md-right">
                <ul class="list-unstyled">
                    <li>
                      <a title="Facebook" href="https://facebbok.com/themefisher.com">
                          <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                      </a>
                      <a title="Twitter" href="https://twitter.com/themefisher.com">
                          <span class="social-icon"><i class="fab fa-twitter"></i></span>
                      </a>
                      <a title="Instagram" href="https://instagram.com/themefisher.com">
                          <span class="social-icon"><i class="fab fa-instagram"></i></span>
                      </a>
                      <a title="Linkdin" href="https://github.com/themefisher.com">
                          <span class="social-icon"><i class="fab fa-github"></i></span>
                      </a>
                    </li>
                </ul>
              </div>
              <!--/ Top social end -->
          </div>
          <!--/ Content row end -->
        </div>
        <!--/ Container end -->
    </div>
    <!--/ Topbar end -->
    <!-- Header start -->
    <header id="header" class="header-one">
    <div class="bg-white">
    <div class="container">
      <div class="logo-area">
          <div class="row align-items-center">
            <div class="logo col-lg-3 text-center text-lg-left mb-3 mb-md-5 mb-lg-0">
                <a class="d-block">
                  <img loading="lazy" src="images/logo.png" alt="Constra">
                </a>
            </div><!-- logo end -->

            <div class="col-lg-9 header-right">
                <ul class="top-info-box">
                  <li>
                    <div class="info-box">
                      <div class="info-box-content">
                          <p class="info-box-title">Tel??fono</p>
                          <p class="info-box-subtitle"><a href="tel:(+9) 847-291-4353">(+52) 847-291-4353</a></p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="info-box">
                      <div class="info-box-content">
                          <p class="info-box-title">Email</p>
                          <p class="info-box-subtitle"><a href="mailto:office@Constra.com">office@landeros.com</a></p>
                      </div>
                    </div>
                  </li>
                  <li class="last">
                    <div class="info-box last">
                      <div class="info-box-content">
                          <p class="info-box-title">Certificado Global</p>
                          <p class="info-box-subtitle">ISO 9001:2017</p>
                      </div>
                    </div>
                  </li>
                  <li class="header-get-a-quote">
                    <a class="btn btn-primary" href="contact.html">Cotizaci??n</a>
                  </li>
                </ul><!-- Ul end -->
            </div><!-- header right end -->
          </div><!-- logo area end -->

      </div><!-- Row end -->
    </div><!-- Container end -->
    </div>

    <div class="site-navigation">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div id="navbar-collapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav mr-auto">
                      <li class="nav-item dropdown active">
                          <a href="Landeros.php" class="nav-link dropdown-toggle">Inicio</a>

                      </li>

                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Empresa <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="about.html">Acerca de Nosotros</a></li>
                            <li><a href="team.html">Nuestra Gente</a></li>
                            <li><a href="testimonials.html">Referencias</a></li>
                          </ul>
                      </li>

                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Servicios <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="Landeros.php">Todos los Servicios</a></li>
                            <li><a href="inicioUsuarios.php">Usuarios</a></li>
                            <li><a href="inicioProductos.php">Productos</a></li>
                            <li><a href="inicioProveedores.php">Proveedores</a></li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item dropdown-toggle" href="inicioVentas.php">Ventas</a>
                              <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="inicioFactura.php">Facturaci??n</a></li>
                            </ul>
                          </li>
                            <li><a href="inicioCLientes.php">CLientes</a></li>
                            <li><a href="inicioCompras.php">Pedidos</a></li>
                          </ul>
                      </li>

                      <li class="nav-item"><a class="nav-link" href="contact.html">Contactos</a></li>

                    </ul>
                </div>
              </nav>
          </div>
          <!--/ Col end -->
        </div>
        <!--/ Row end -->
        <div class="nav-search">
          <form class="form-inline my-2 my-lg-0" method="post" action="controlador.php">
           <label class="text-light"> <?php echo $_SESSION['usuarioS'] ?> </label>
            <button class="btn btn-outline-warning my-2 my-sm-0" type="submit" name="btncerrar">Cerrar Sesi??n</button>
          </form>


        </div><!-- Search end -->

        <div class="search-block" style="display: none;">
          <label for="search-field" class="w-100 mb-0">
            <input type="text" class="form-control" id="search-field" placeholder="Type what you want and enter">
          </label>
          <span class="search-close">&times;</span>
        </div><!-- Site search end -->
    </div>
    <!--/ Container end -->

    </div>
    <!--/ Navigation end -->
    </header>
<!--/ Header end -->
<div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner1.jpg)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Registro de Pedidos</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="Landeros.php">Inicio</a></li>
                      <li class="breadcrumb-item"><a href="inicioCompras.php">Pedidos</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Registro de Pedidos</li>
                    </ol>
                </nav>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end -->

<section id="main-container" class="main-container">
  <div class="container">

    <div class="row text-center">
      <div class="col-12">
        <h2 class="section-title">Registrar nuevos Pedidos</h2>
        <h3 class="section-sub-title">Registrar</h3>
      </div>
</div>

    <form class="" action="controlador.php"  method="POST" onsubmit="return vaciosRegistrar();">
      <div class="card mb-3" style="max-width: 1045px;">
        <div class="row no-gutters">
            <div class="col-md-7">
              &nbsp;
                <div class="card-body">
                  <h5 class="card-title">Proveedor:</h5>
                  <select class="form-control" name="txtproveedor" required >
                    <option value>Elije Proveedor...</option>
                    <?php
                    require 'funcionesBD.php';
                    $rsProveedor= consultaProveedorUnico();

                    while ($valores = mysqli_fetch_array($rsProveedor)) {
                      echo "<option value='".$valores['Nombre']."'>".$valores['Nombre']."</option>";
                    }
                    echo "</select>";
                    ?>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="card-body">
                    <div class="form-group">
                      <h5 class="card-title">Fecha l??mite de pedido:</h5>
                      <input type="date" class="form-control" id="txtfl" name="txtfl">
                      <p class="card-text"><small class="text-muted"></small></p>
                    </div>
                    <div class="form-group">
                      <h5 class="card-title">Fecha de recepci??n:</h5>
                      <input type="date" class="form-control" id="txtfr" name="txtfr">
                      <p class="card-text"><small class="text-muted"></small></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

        <div class="form-group">
          <label> Producto:</label>
          <select class="form-control" name="txtproducto" required >
          <option value>Elije Producto...</option>
          <?php

            $rsProducto= consultaProductoUnico();

              while ($valores = mysqli_fetch_array($rsProducto)) {
                  echo "<option value='".$valores['Producto']."'>".$valores['Producto']."</option>";
              }
              echo "</select>";
              ?>
        </div>

      <div class="form-group">
        <label> Descripion:</label>
        <input type="text" class="form-control" id="txtdescripcion" name="txtdescripcion">
      </div>

      <div class="form-group">
        <label> Cantidad:</label>
        <input type="number" placeholder="0.0" step="any" class="form-control" onchange="impuesto();" id="txtcantidad" name="txtcantidad">
      </div>

      <div class="form-group">
        <label>Precio Unitario:</label>
        <input type="number" placeholder="0.0" step="any" class="form-control" onchange="impuesto();" id="txtpu" name="txtpu">
      </div>

      <div class="form-group">
        <label>Importe:</label>
        <input type="number" placeholder="0.0" step="any" class="form-control" onchange="impuesto();" id="txtimporte" name="txtimporte">
      </div>

      <div class="form-group">
        <label> Impuestos:</label>
        <input type="number" placeholder="0.0" step="any" class="form-control" id="txtimpuesto" name="txtimpuesto">
      </div>

      <div class="form-group">
        <label> Subtotal:</label>
        <input type="number" placeholder="0.0" step="any" class="form-control" id="txtsub" name="txtsub">
      </div>

        <button type="submit" name="btnGcompra" class="btn btn-warning btn-block">Guardar Pedidos</button>
    </form>

    <script>
    // si la respuesta que se espera es sumar
    function impuesto(){
        var numero1 = document.getElementById('txtpu').value;
        var numero2 = document.getElementById('txtcantidad').value;



        var importe = parseInt(numero1)* parseInt(numero2);
        document.getElementById('txtimporte').value = importe;

        var Impuesto = importe * 0.16;
        document.getElementById('txtimpuesto').value = Impuesto;

        var total = Impuesto + importe;
        document.getElementById('txtsub').value = total;
    }

    </script>

  </div><!-- Conatiner end -->
</section><!-- Main container end -->

<footer id="footer" class="footer bg-overlay">
  <div class="footer-main">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-4 col-md-6 footer-widget footer-about">
          <h3 class="widget-title">Acerca de Nosotros</h3>
          <img loading="lazy" width="200px" class="footer-logo" src="images/footer-logo.png" alt="Constra">
          <p>Somos una distribuidora de Materiales de Construcci??n, que con ayuda de nuestro Sistema ERP, nos permite
            agilizar nuestras compras y ventas, de esta manera hacer que nuestros clientes esten satisfechos.</p>
          <div class="footer-social">
            <ul>
              <li><a href="https://facebook.com/themefisher" aria-label="Facebook"><i
                    class="fab fa-facebook-f"></i></a></li>
              <li><a href="https://twitter.com/themefisher" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
              </li>
              <li><a href="https://instagram.com/themefisher" aria-label="Instagram"><i
                    class="fab fa-instagram"></i></a></li>
              <li><a href="https://github.com/themefisher" aria-label="Github"><i class="fab fa-github"></i></a></li>
            </ul>
          </div><!-- Footer social end -->
        </div><!-- Col end -->

        <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
          <h3 class="widget-title">Horas Laborales</h3>
          <div class="working-hours">
            Trabajamos los 7 d??as de la semana, todos los d??as excepto los d??as festivos m??s importantes. Cont??ctenos si tiene una emergencia, con nuestro
            L??nea directa y formulario de contacto.
            <br><br> Lunes - Viernes: <span class="text-right">10:00 - 16:00 </span>
            <br> S??bado: <span class="text-right">12:00 - 15:00</span>
            <br> Domingo y festivos: <span class="text-right">09:00 - 12:00</span>
          </div>
        </div><!-- Col end -->

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
          <h3 class="widget-title">Servicios</h3>
          <ul class="list-arrow">
            <li><a href="service-single.html">Usuarios</a></li>
            <li><a href="service-single.html">Productos</a></li>
            <li><a href="service-single.html">Proveedores</a></li>
            <li><a href="service-single.html">Ventas</a></li>
            <li><a href="service-single.html">Clientes</a></li>
            <li><a href="service-single.html">Pedidos</a></li>
          </ul>
        </div><!-- Col end -->
      </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Footer main end -->

  <div class="copyright">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="copyright-info text-center text-md-left">
            <span>Copyright &copy; <script>
                document.write(new Date().getFullYear())
              </script>, Designed &amp; Developed by <a href="https://themefisher.com">Themefisher</a></span>
          </div>
        </div>

        <div class="col-md-6">
          <div class="footer-menu text-center text-md-right">
            <ul class="list-unstyled">
              <li><a href="about.html">About</a></li>
              <li><a href="team.html">Our people</a></li>
              <li><a href="faq.html">Faq</a></li>
              <li><a href="news-left-sidebar.html">Blog</a></li>
              <li><a href="pricing.html">Pricing</a></li>
            </ul>
          </div>
        </div>
      </div><!-- Row end -->

      <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
        <button class="btn btn-primary" title="Back to Top">
          <i class="fa fa-angle-double-up"></i>
        </button>
      </div>

    </div><!-- Container end -->
  </div><!-- Copyright end -->
</footer><!-- Footer end -->


  <!-- Javascript Files
  ================================================== -->

  <!-- initialize jQuery Library -->
  <script src="plugins/jQuery/jquery.min.js"></script>
  <!-- Bootstrap jQuery -->
  <script src="plugins/bootstrap/bootstrap.min.js" defer></script>
  <!-- Slick Carousel -->
  <script src="plugins/slick/slick.min.js"></script>
  <script src="plugins/slick/slick-animation.min.js"></script>
  <!-- Color box -->
  <script src="plugins/colorbox/jquery.colorbox.js"></script>
  <!-- shuffle -->
  <script src="plugins/shuffle/shuffle.min.js" defer></script>


  <!-- Google Map API Key-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
  <!-- Google Map Plugin-->
  <script src="plugins/google-map/map.js" defer></script>

  <!-- Template custom -->
  <script src="js/script.js"></script>

  </div><!-- Body inner end -->



  </body>

  </html>
