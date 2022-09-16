<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <title> Controlador </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body>
    <?php
      require 'funcionesBD.php';
      if (isset($_POST[ 'btningresar' ])) {
          $usu= $_POST[ 'txtusuario' ];
          $cont= $_POST[ 'txtpass' ];

          $status= validarUsuario($usu, $cont);


          if ($status === 1) {
              session_start();
              $_SESSION['usuarioS']= $usu;

              echo "<script> alert('Bienvenido a LANDEROS'); window.location='Landeros.php'</script>";
          } else {
              echo "<script> alert('Revisa tus credenciales'); window.location='index.html' </script>";
          }
      }

//-----------------------------------USUARIOS----------------------------------------------------------------------------//

      if (isset($_POST[ 'btnGusuario' ])) {
          $usu= $_POST[ 'txtnombre' ];
          $email= $_POST[ 'txtcorreo' ];
          $cont= $_POST[ 'txtpass' ];
          $confi= $_POST[ 'txtcpass' ];
          $per= $_POST[ 'selperfil' ];
          $hl= $_POST[ 'txthl' ];

          if ($cont === $confi) {
              $status= guardarUsuario($usu, $email, $cont, $per, $hl);

              if ($status === 1) {
                  echo "<script> alert('Usuario Guardado en BD'); window.location='formUsuarios.php'</script>";
              } else {
                  echo "<script> alert('Usuario NO Guardado en BD'); window.location='formUsuarios.php'</script>";
              }
          } else {
              echo "<script> alert('Contraseñas no coinciden'); window.location='formUsuarios.php' </script>";
          }
      }

      if (isset($_POST[ 'btnAusu' ])) {
          $idUsuario= $_POST[ 'txtidActualizar'];
          $nombre= $_POST[ 'txtnombre' ];
          $email= $_POST[ 'txtcorreo' ];
          $cont= $_POST[ 'txtpass' ];
          $confi= $_POST[ 'txtcpass' ];
          $per= $_POST[ 'selperfil' ];
          $hl= $_POST[ 'txthl' ];

          if ($cont === $confi) {
              $status= actualizarUsu($idUsuario, $nombre, $email, $cont, $per, $hl);

              if ($status === 1) {
                  echo "<script> alert('Usuario Actualizado en BD'); window.location='inicioUsuarios.php'</script>";
              } else {
                  echo "<script> alert('Usuario NO Actualizado en BD'); window.location='inicioUsuarios.php'</script>";
              }
          } else {
              echo "<script> alert('Contraseñas no coinciden'); window.location='inicioUsuarios.php' </script>";
          }
      }

      if (isset($_POST[ 'btnElimina'])) {
          $idE= $_POST[ 'txtidElimina'];

          $stat= eliminarU($idE);
          if ($stat === 1) {
              echo "<script> alert( 'Usuario eliminado en BD' ); </script>";
              echo "<script> window.location='inicioUsuarios.php ';</script>";
          } else {
              echo "<script> alert( 'Usuario no eliminado' ); </script>";
              echo "<script> window.location='inicioUsuarios.php'; </script>";
          }
      }

        if (isset($_POST[ 'btnRegreso'])) {
            echo "<script> alert( 'Regresando' ); </script>";
            echo "<script> window.location='inicioUsuarios.php'; </script>";
        }

        if (isset($_POST[ 'btncerrar'])) {
            session_start();
            session_destroy();
            echo '<script> window.location="index.html"; </script>';
        }

//-----------------------------------PRODUCTOS----------------------------------------------------------------------------//
        if (isset($_POST[ 'btnGProducto' ])) {
            $producto= $_POST[ 'txtproducto' ];
            $precioVenta= $_POST[ 'txtpreciov' ];
            $Stock= $_POST[ 'txtimpuesto' ];
            $CategoriaProducto= $_POST[ 'txtcategoria' ];
            $CodigoBarras= $_POST[ 'txtcodigobarrar' ];


            $status= guardarProducto($producto, $precioVenta, $Stock, $CategoriaProducto, $CodigoBarras);

            if ($status === 1) {
                echo "<script> alert('Producto Guardado en BD'); window.location='inicioProductos.php'</script>";
            } else {
                echo "<script> alert('Producto NO Guardado en BD'); window.location='inicioProductos.php'</script>";
            }
        }

        if (isset($_POST[ 'btnEliminaProducto'])) {
            $idE= $_POST[ 'txtidElimina'];

            $stat= eliminarProducto($idE);
            if ($stat === 1) {
                echo "<script> alert( 'Producto eliminado en BD' ); </script>";
                echo "<script> window.location='inicioProductos.php ';</script>";
            } else {
                echo "<script> alert( 'Producto no eliminado' ); </script>";
                echo "<script> window.location='inicioProductos.php'; </script>";
            }
        }

          if (isset($_POST[ 'btnRegresoProducto'])) {
              echo "<script> alert( 'Regresando' ); </script>";
              echo "<script> window.location='inicioProductos.php'; </script>";
          }

          if (isset($_POST[ 'btnAproducto' ])) {
              $idProducto= $_POST[ 'txtidPActualizar'];
              $producto= $_POST[ 'txtproducto' ];
              $precioVenta= $_POST[ 'txtpreciov' ];
              $Stock= $_POST[ 'txtimpuesto' ];
              $CategoriaProducto= $_POST[ 'txtcategoria' ];
              $CodigoBarras= $_POST[ 'txtcodigobarrar' ];


              $status= actualizarProducto($idProducto, $producto, $precioVenta, $Stock, $CategoriaProducto, $CodigoBarras);

              if ($status === 1) {
                  echo "<script> alert('Producto Actualizado correctamente en BD'); window.location='inicioProductos.php'</script>";
              } else {
                  echo "<script> alert('Producto NO Actualizado en BD'); window.location='inicioProductos.php'</script>";
              }
          }

//-----------------------------------VENTAS----------------------------------------------------------------------------//

          if (isset($_POST[ 'btnGventas' ])) {
              $Cliente= $_POST[ 'txtcliente' ];
              $Producto= $_POST[ 'txtproducto' ];
              $Descripcion= $_POST[ 'txtdescripcion' ];
              $Cantidad= $_POST[ 'txtcantidad' ];
              $PrecioUnitario= $_POST[ 'txtpreciou' ];
              $Importe= $_POST[ 'txtimporte' ];
              $Impuesto= $_POST[ 'txtimpuesto' ];
              $SubTotal= $_POST[ 'txtsub' ];
              $Expiracion= $_POST[ 'txtexpiracion' ];
              $PlazoPago= $_POST[ 'txtplazo' ];

              $status= guardarV($Cliente, $Producto, $Descripcion, $Cantidad, $PrecioUnitario, $Importe, $Impuesto, $SubTotal, $Expiracion, $PlazoPago);


              if ($status === 1) {
                  $status2 = guardarAlmacenVentas($Producto, $Cantidad);
                  if($status2 === 1){
                    echo "<script> alert('Venta Guardado en BD'); window.location='inicioVentas.php'</script>";
                  }
                  /*$conex=conectarBD();
                  $consulta = mysql_query("UPDATE tbproductos SET Cantidad = Cantidad + '$Cantidad' WHERE Producto = '$Producto'");*/

              } else {
                  echo "<script> alert('Venta NO Guardado en BD'); window.location='inicioVentas.php'</script>";
              }
          }

          if (isset($_POST[ 'btnAventa' ])) {
              $idVenta= $_POST[ 'txtidActualizar'];
              $Cliente= $_POST[ 'txtcliente' ];
              $Producto= $_POST[ 'txtproducto' ];
              $Descripcion= $_POST[ 'txtdescripcion' ];
              $Cantidad= $_POST[ 'txtcantidad' ];
              $PrecioUnitario= $_POST[ 'txtpreciou' ];
              $Importe= $_POST[ 'txtimporte' ];
              $Impuesto= $_POST[ 'txtimpuesto' ];
              $SubTotal= $_POST[ 'txtsub' ];
              $Expiracion= $_POST[ 'txtexpiracion' ];
              $PlazoPago= $_POST[ 'txtplazo' ];

              $status= actualizarV($idVenta, $Cliente, $Producto, $Descripcion, $Cantidad, $PrecioUnitario, $Importe, $Impuesto, $SubTotal, $Expiracion, $PlazoPago);

              if ($status === 1) {
                $status2 = guardarAlmacenVentas($Producto, $Cantidad);
                if($status2 === 1){
                  echo "<script> alert('Venta Actualizado correctamente en BD'); window.location='inicioVentas.php'</script>";
                }

              } else {
                  echo "<script> alert('Venta NO Actualizado en BD'); window.location='inicioVentas.php'</script>";
              }
          }

          if (isset($_POST[ 'btnEliminaVenta'])) {
              $idE= $_POST[ 'txtidEliminaVenta'];

              $stat= eliminarVenta($idE);
              if ($stat === 1) {
                  echo "<script> alert( 'Venta eliminada en BD' ); </script>";
                  echo "<script> window.location='inicioVentas.php ';</script>";
              } else {
                  echo "<script> alert( 'Venta no eliminado' ); </script>";
                  echo "<script> window.location='inicioVentas.php'; </script>";
              }
          }

            if (isset($_POST[ 'btnRegresoVenta'])) {
                echo "<script> alert( 'Regresando' ); </script>";
                echo "<script> window.location='inicioVentas.php'; </script>";
            }

            if (isset($_POST[ 'btnGFactura'])) {
                echo "<script> alert( 'Regresando' ); </script>";
                echo "<script> window.location='inicioVentas.php'; </script>";
            }


//-----------------------------------Pedidos----------------------------------------------------------------------------//
            if (isset($_POST[ 'btnGcompra' ])) {
                $Proveedor= $_POST[ 'txtproveedor' ];
                $FechaLimite= $_POST[ 'txtfl' ];
                $FechaRecepcion= $_POST[ 'txtfr' ];
                $Producto= $_POST[ 'txtproducto' ];
                $Descripcion= $_POST[ 'txtdescripcion' ];
                $Cantidad= $_POST[ 'txtcantidad' ];
                $PrecioUnitario= $_POST[ 'txtpu' ];
                $Importe= $_POST[ 'txtimporte' ];
                $Impuesto= $_POST[ 'txtimpuesto' ];
                $SubTotal= $_POST[ 'txtsub' ];

                $status= guardarCompra($Proveedor, $FechaLimite, $FechaRecepcion, $Producto, $Descripcion, $Cantidad, $PrecioUnitario, $Importe, $Impuesto, $SubTotal);

                if ($status === 1) {
                    $status2 = guardarAlmacenCompra($Producto, $Cantidad);
                    if($status2 === 1){
                    echo "<script> alert('Pedido Guardada en BD'); window.location='inicioCompras.php'</script>";
                    }

                } else {
                    echo "<script> alert('Pedido NO Guardada en BD'); window.location='inicioCompras.php'</script>";
                }
            }

            if (isset($_POST[ 'btnAcompra' ])) {
                $idCompra= $_POST[ 'txtidActualizar'];
                $Proveedor= $_POST[ 'txtproveedor' ];
                $FechaLimite= $_POST[ 'txtfl' ];
                $FechaRecepcion= $_POST[ 'txtfr' ];
                $Producto= $_POST[ 'txtproducto' ];
                $Descripcion= $_POST[ 'txtdescripcion' ];
                $Cantidad= $_POST[ 'txtcantidad' ];
                $PrecioUnitario= $_POST[ 'txtpu' ];
                $Importe= $_POST[ 'txtimporte' ];
                $Impuesto= $_POST[ 'txtimpuesto' ];
                $SubTotal= $_POST[ 'txtsub' ];

                $status= actualizarCompra($idCompra, $Proveedor, $FechaLimite, $FechaRecepcion, $Producto, $Descripcion, $Cantidad, $PrecioUnitario, $Importe, $Impuesto, $SubTotal);

                if ($status === 1) {
                  $status2 = guardarAlmacenCompra($Producto, $Cantidad);
                  if($status2 === 1){
                  echo "<script> alert('Pedidos Actualizado correctamente en BD'); window.location='inicioCompras.php'</script>";
                  }

                } else {
                    echo "<script> alert('Pedidos NO Actualizado en BD'); window.location='inicioCompras.php'</script>";
                }
            }

            if (isset($_POST[ 'btnEliminaCompra'])) {
                $idE= $_POST[ 'txtidEliminaCompra'];

                $stat= eliminarCompra($idE);
                if ($stat === 1) {
                    echo "<script> alert( 'Pedidos eliminada en BD' ); </script>";
                    echo "<script> window.location='inicioCompras.php ';</script>";
                } else {
                    echo "<script> alert( 'Pedidos no eliminado' ); </script>";
                    echo "<script> window.location='inicioCompras.php'; </script>";
                }
            }

              if (isset($_POST[ 'btnRegresoCompra'])) {
                  echo "<script> alert( 'Regresando' ); </script>";
                  echo "<script> window.location='inicioCompras.php'; </script>";
              }

//-----------------------------------Proveedores----------------------------------------------------------------------------//
              if (isset($_POST[ 'btnGProveedor' ])) {
                  $Tipo= $_POST[ 'selperfil' ];
                  $Nombre= $_POST[ 'txtproveedor' ];
                  $Colonia= $_POST[ 'txtcolonia' ];
                  $Ciudad= $_POST[ 'txtciudad' ];
                  $Estado= $_POST[ 'txtestado' ];
                  $CP= $_POST[ 'txtcp' ];
                  $Pais= $_POST[ 'txtpais' ];
                  $Telefono= $_POST[ 'txttelefono' ];
                  $Correo= $_POST[ 'txtcorreo' ];
                  $SitioWeb= $_POST[ 'txtsitio' ];

                  $status= guardarProveedor($Tipo, $Nombre, $Colonia, $Ciudad, $Estado, $CP, $Pais, $Telefono, $Correo, $SitioWeb);

                  if ($status === 1) {
                      echo "<script> alert('Proveedor Guardado en BD'); window.location='inicioProveedores.php'</script>";
                  } else {
                      echo "<script> alert('Proveedor NO Guardado en BD'); window.location='inicioProveedores.php'</script>";
                  }
              }

              if (isset($_POST[ 'btnAProveedor' ])) {
                  $idProveedor= $_POST[ 'txtidActualizar'];
                  $Tipo= $_POST[ 'selperfil' ];
                  $Nombre= $_POST[ 'txtproveedor' ];
                  $Colonia= $_POST[ 'txtcolonia' ];
                  $Ciudad= $_POST[ 'txtciudad' ];
                  $Estado= $_POST[ 'txtestado' ];
                  $CP= $_POST[ 'txtcp' ];
                  $Pais= $_POST[ 'txtpais' ];
                  $Telefono= $_POST[ 'txttelefono' ];
                  $Correo= $_POST[ 'txtcorreo' ];
                  $SitioWeb= $_POST[ 'txtsitio' ];

                  $status= actualizarProveedor($idProveedor, $Tipo, $Nombre, $Colonia, $Ciudad, $Estado, $CP, $Pais, $Telefono, $Correo, $SitioWeb);

                  if ($status === 1) {
                      echo "<script> alert('Proveedor Actualizado correctamente en BD'); window.location='inicioProveedores.php'</script>";
                  } else {
                      echo "<script> alert('Proveedor NO Actualizado en BD'); window.location='inicioProveedores.php'</script>";
                  }
              }

              if (isset($_POST[ 'btnEliminaProveedor'])) {
                  $idE= $_POST[ 'txtidEliminaProveedor'];

                  $stat= eliminarProveedor($idE);
                  if ($stat === 1) {
                      echo "<script> alert( 'Proveedor eliminado en BD' ); </script>";
                      echo "<script> window.location='inicioProveedores.php ';</script>";
                  } else {
                      echo "<script> alert( 'Proveedor no eliminado' ); </script>";
                      echo "<script> window.location='inicioProveedores.php'; </script>";
                  }
              }

                if (isset($_POST[ 'btnRegresoProveedor'])) {
                    echo "<script> alert( 'Regresando' ); </script>";
                    echo "<script> window.location='inicioProveedores.php'; </script>";
                }

//-----------------------------------CLientes----------------------------------------------------------------------------//

              if (isset($_POST[ 'btnGCliente' ])) {
                  $Tipo= $_POST[ 'selperfil' ];
                  $Cliente= $_POST[ 'txtCliente' ];
                  $Colonia= $_POST[ 'txtcolonia' ];
                  $Ciudad= $_POST[ 'txtciudad' ];
                  $Estado= $_POST[ 'txtestado' ];
                  $CP= $_POST[ 'txtcp' ];
                  $Pais= $_POST[ 'txtpais' ];
                  $Telefono= $_POST[ 'txttelefono' ];
                  $Correo= $_POST[ 'txtcorreo' ];
                  $SitioWeb= $_POST[ 'txtsitio' ];

                  $status= guardarCliente($Tipo, $Cliente, $Colonia, $Ciudad, $Estado, $CP, $Pais, $Telefono, $Correo, $SitioWeb);

                  if ($status === 1) {
                      echo "<script> alert('ClienteCliente Guardado en BD'); window.location='inicioClientes.php'</script>";
                  } else {
                      echo "<script> alert('Cliente NO Guardado en BD'); window.location='inicioClientes.php'</script>";
                  }
              }

              if (isset($_POST[ 'btnACliente' ])) {
                  $idCliente= $_POST[ 'txtidActualizar'];
                  $Tipo= $_POST[ 'selperfil' ];
                  $Cliente= $_POST[ 'txtCliente' ];
                  $Colonia= $_POST[ 'txtcolonia' ];
                  $Ciudad= $_POST[ 'txtciudad' ];
                  $Estado= $_POST[ 'txtestado' ];
                  $CP= $_POST[ 'txtcp' ];
                  $Pais= $_POST[ 'txtpais' ];
                  $Telefono= $_POST[ 'txttelefono' ];
                  $Correo= $_POST[ 'txtcorreo' ];
                  $SitioWeb= $_POST[ 'txtsitio' ];

                  $status= actualizarCliente($idCliente, $Tipo, $Cliente, $Colonia, $Ciudad, $Estado, $CP, $Pais, $Telefono, $Correo, $SitioWeb);

                  if ($status === 1) {
                      echo "<script> alert('Cliente Actualizado correctamente en BD'); window.location='inicioClientes.php'</script>";
                  } else {
                      echo "<script> alert('Cliente NO Actualizado en BD'); window.location='inicioClientes.php'</script>";
                  }
              }

              if (isset($_POST[ 'btnEliminaCliente'])) {
                  $idE= $_POST[ 'txtidEliminaCliente'];

                  $stat= eliminarCliente($idE);
                  if ($stat === 1) {
                      echo "<script> alert( 'Cliente eliminado en BD' ); </script>";
                      echo "<script> window.location='inicioClientes.php ';</script>";
                  } else {
                      echo "<script> alert( 'Cliente no eliminado' ); </script>";
                      echo "<script> window.location='inicioClientes.php'; </script>";
                  }
              }

                if (isset($_POST[ 'btnRegresoCliente'])) {
                    echo "<script> alert( 'Regresando' ); </script>";
                    echo "<script> window.location='inicioClientes.php'; </script>";
                }

     ?>
  </body>
</html>
