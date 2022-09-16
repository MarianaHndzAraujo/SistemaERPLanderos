<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>Facturación Venta</title>

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
   <script type="text/javascript" src="jquery-2.1.4.min.js"></script>

</head>
<body>
  <div class="body-inner">

        <!--/ Container end -->

    <!--/ Topbar end -->
    <!-- Header start -->
    <header id="header" class="header-one">
    <div class="bg-white">

      <div class="logo-area">
          <div class="align-items-center">
            <div align="center">
                <a class="d-block" href="">
                  <img loading="lazy" src="images/logo.png" alt="Constra">
                </a>
            </div><!-- logo end -->

          </div><!-- logo area end -->

      </div><!-- Row end -->

    </div>

    <!--/ Navigation end -->
    </header>
<!--/ Header end -->



  <div class="container">

    <div class="row text-center">
      <div class="col-12">
        <h2 class="">Facturación</h2>
      </div>
</div>

    <form class="" action="controlador.php"  method="POST" onsubmit="return vaciosRegistrar();">
      <div class="card mb-3" style="max-width: 1045px;">
        <div class="row no-gutters">
            <div class="col-md-7">
              &nbsp;
              <div class="card-body">
              <h5 class="card-title">Dirección:</h5>
              <input type="text" value="76036 Empresa LANDEROS, MX" style="max-width: 350px;" class="form-control" id="txtnombre" name="txtnombre">
              <h5 class="card-title">Teléfono:</h5>
              <input type="text" value="(+52) 847-291-4353" style="max-width: 350px;" class="form-control" id="txtnombre" name="txtnombre">
              <h5 class="card-title">Email:</h5>
              <input type="text" value="office@landeros.com" style="max-width: 350px;" class="form-control" id="txtnombre" name="txtnombre">
              </div>
            </div>
          <div class="col-md-5">
            <div class="card-body">
              <div class="form-group">
              <h5 class="card-title">Fecha:</h5>
              <input type="date" class="form-control" id="txtexpiracion" name="txtexpiracion" value="<?php echo $_REQUEST['vE'];?>">
              <p class="card-text"><small class="text-muted"></small></p>
              </div>
              <div class="form-group">
              <h5 class="card-title">Folio:</h5>
              <input type="number" class="form-control" id="txtfolio" name="txtfolio" value="<?php echo $_REQUEST['idR'];?>">
              <p class="card-text"><small class="text-muted"></small></p>
              </div>
              <div class="form-group">
              <h5 class="card-title">Fecha Vencimiento:</h5>
              <input type="date" class="form-control" id="txtplazo" name="txtplazo" value="<?php echo $_REQUEST['vPlz'];?>">
              <p class="card-text"><small class="text-muted"></small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <h4>FACTURAR A:</h4>
        <div class="form-group">
          <label >Nombre:</label>
          <input type="text" class="form-control"  value="<?php echo $_REQUEST['vCliente'];?>">
        </div>

      <div class="form-group">
        <label> Nombre de la Empresa:</label>
        <input type="text" class="form-control">
      </div>

      <div class="form-group">
        <label> Dirección:</label>
        <input type="text" class="form-control">
      </div>

      <div class="form-group">
        <label>Telefono:</label>
        <input type="text" class="form-control" >
      </div>

      <table class="table table-hover">
        <thead class="thead-light">
          <tr>
            <th scope="col">Producto</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Descripción</th>
            <th scope="col">Precio Unitario</th>
            <th scope="col">Importe</th>

          </tr>
        </thead>

        <tbody>
          <td><?php echo $_REQUEST['vProducto'];?></td>
          <td><?php echo $_REQUEST['vCA'];?></td>
          <td><?php echo $_REQUEST['vD'];?></td>
          <td><?php echo $_REQUEST['vPU'];?></td>
          <td><?php echo $_REQUEST['vImp'];?></td>
        </tbody>
        </table>





        <div class="card mb-3" style="max-width: 1155px;">
          <div class="row no-gutters">
              <div class="col-md-8">
                &nbsp;
                <div class="card-body">

                </div>
              </div>
            <div class="col-md-4">
              <div class="card-body">
                <div class="form-group">
                <h5 class="card-title">Impuesto:</h5>
                <input type="number" class="form-control" id="txtimporte" value="<?php echo $_REQUEST['vI'];?>">
                <p class="card-text"><small class="text-muted"></small></p>
                </div>
                <div class="form-group">
                <h5 class="card-title">Total:</h5>
                <input type="number" placeholder="0.0" step="any" class="form-control" id="txtnombre" name="txtnombre" value="<?php echo $_REQUEST['vST'];?>">
                <p class="card-text"><small class="text-muted"></small></p>
                </div>
              </div>
            </div>
          </div>
        </div>



        <button onclick="imprimirFactura();" name="btnGFactura" class="btn btn-warning btn-block">Generar Facturación</button>
        <script>
          function imprimirFactura(){
            window.print();
          }
        </script>
    </form>
</script>

<p></p>
  </div><!-- Conatiner end -->
  </div>



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
