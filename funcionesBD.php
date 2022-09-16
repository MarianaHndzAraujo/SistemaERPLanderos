<?php

  function conectarBD()
  {
      $servidor="localhost";
      $baseDatos="bdlanderos";
      $usuario="root";
      $contra="";

      $conexion=mysqli_connect($servidor, $usuario, $contra, $baseDatos)or die("No se pudo conectar");
      return $conexion;
  }

  function validarUsuario($email, $cont)
  {
      $conex=conectarBD();
      $consulta="select pass from tbusuarios where correo='$email'";

      try {
          $rsval= mysqli_query($conex, $consulta);
          $numerg= mysqli_num_rows($rsval);
          $regBd= mysqli_fetch_array($rsval);
          mysqli_close($conex);

          if (($numerg == 1) && ($cont === $regBd['pass'])) {
              $status=1;
          } else {
              $status=0;
          }
          return $status;
      } catch (Exception $e) {
          die('exception captura:'. $e->getMessage());
      }
  }

//-----------------------------------Usuario----------------------------------------------------------------------------//
  function guardarUsuario($usu, $email, $cont, $per, $hl)
  {
      $conex= conectarBD();
      $insertU="insert into tbusuarios(usuario,correo,pass,perfil,HorasTrabajadas) values(?,?,?,?,?)";
      try {
          $stmt=$conex->prepare($insertU);
          $stmt->bind_param('ssssd', $usu, $email, $cont, $per, $hl);
          $stmt-> execute();

          $stmt->close();
          mysqli_close($conex);

          $status=1;
          return $status;
      } catch (Exception $e) {
          die('exception captura:'. $e->getMessage());
      }
  }

  function consultaUsuarios()
  {
      $conex= conectarBD();
      $selectU= "select * from tbusuarios";

      try {
          $rsUsuarios= mysqli_query($conex, $selectU);
          mysqli_close($conex);

          return $rsUsuarios;
      } catch (Exception $e) {
          die('exception captura:'. $e->getMessage());
      }
  }

  function actualizarUsu($idUsuario, $nombre, $email, $cont, $per, $hl)
  {
      $conex= conectarBD();
      $updateUsu="update tbusuarios set usuario='$nombre',correo='$email',pass='$cont',perfil='$per',HorasTrabajadas='$hl' where idUsuario='$idUsuario'";
      try {
          $stmt=$conex->prepare($updateUsu);
          $stmt-> execute();

          $stmt->close();
          mysqli_close($conex);

          $status=1;
          return $status;
      } catch (Exception $e) {
          die('exception captura:'. $e->getMessage());
      }
  }

  function consultaPerfil()
  {
      $conex= conectarBD();
      $selectP= "select perfil from tbperfil";

      try {
          $rsPerfil= mysqli_query($conex, $selectP);
          mysqli_close($conex);

          return $rsPerfil;
      } catch (Exception $e) {
          die('exception captura:'. $e->getMessage());
      }
  }

  function eliminarU($idE)
  {
      $conex= conectarBD();
      $deleteU="delete from tbusuarios where idUsuario= ?";

      try {
          $stmt = $conex->prepare($deleteU);
          $stmt -> bind_param('i', $idE);
          $stmt -> execute();
          $stmt -> close();
          mysqli_close($conex);

          $status=1;
          return $status;
      } catch (Exception $e) {
          die('exception al eliminar:'. $e->getMessage());
      }
  }

  //-----------------------------------PRODUCTOS----------------------------------------------------------------------------//

  function guardarProducto($producto, $precioVenta, $impuestoC, $CategoriaProducto, $CodigoBarras)
  {
      $conex= conectarBD();
      $insertPro="insert into tbproductos(producto,precioVenta,Cantidad,CategoriaProducto,CodigoBarras) values(?,?,?,?,?)";
      try {
          $stmt=$conex->prepare($insertPro);
          $stmt->bind_param('sddsd', $producto, $precioVenta, $impuestoC, $CategoriaProducto, $CodigoBarras);
          $stmt-> execute();

          $stmt->close();
          mysqli_close($conex);

          $status=1;
          return $status;
      } catch (Exception $e) {
          die('exception captura:'. $e->getMessage());
      }
  }

  function consultaProducto()
  {
      $conex= conectarBD();
      $selectPro= "select idProducto, Producto, PrecioVenta, Cantidad, CategoriaProducto, CodigoBarras FROM tbproductos";

      try {
          $rsProducto= mysqli_query($conex, $selectPro);
          mysqli_close($conex);

          return $rsProducto;
      } catch (Exception $e) {
          die('exception captura:'. $e->getMessage());
      }
  }

  function consultaCategoriaP()
  {
      $conex= conectarBD();
      $selectP= "select Categoria from tbcategorias";

      try {
          $rsCaP= mysqli_query($conex, $selectP);
          mysqli_close($conex);

          return $rsCaP;
      } catch (Exception $e) {
          die('exception captura:'. $e->getMessage());
      }
  }

  function eliminarProducto($idE)
  {
      $conex= conectarBD();
      $deleteV="delete from tbproductos where idProducto= ?";

      try {
          $stmt = $conex->prepare($deleteV);
          $stmt -> bind_param('i', $idE);
          $stmt -> execute();
          $stmt -> close();
          mysqli_close($conex);

          $status=1;
          return $status;
      } catch (Exception $e) {
          die('exception al eliminar:'. $e->getMessage());
      }
  }

  function actualizarProducto($idProducto, $producto, $precioVenta, $Stock, $CategoriaProducto, $CodigoBarras)
  {
      $conex= conectarBD();
      $updateV="update tbproductos set Producto='$producto',PrecioVenta='$precioVenta',Cantidad='$Stock',CategoriaProducto='$CategoriaProducto',CodigoBarras='$CodigoBarras' where idProducto='$idProducto'";
      try {
          $stmt=$conex->prepare($updateV);
          $stmt-> execute();

          $stmt->close();
          mysqli_close($conex);

          $status=1;
          return $status;
      } catch (Exception $e) {
          die('exception captura:'. $e->getMessage());
      }
  }


//-----------------------------------Proveedores----------------------------------------------------------------------------//

  function consultaProveedor()
  {
      $conex= conectarBD();
      $selectPv= "select * FROM tbproveedores";

      try {
          $rsPv= mysqli_query($conex, $selectPv);
          mysqli_close($conex);

          return $rsPv;
      } catch (Exception $e) {
          die('exception captura:'. $e->getMessage());
      }
  }

  function guardarProveedor($Tipo, $Nombre, $Colonia, $Ciudad, $Estado, $CP, $Pais, $Telefono, $Correo, $SitioWeb)
  {
      $conex= conectarBD();
      $insertProveedor="insert into tbproveedores(Tipo,Nombre,Colonia,Ciudad,Estado, CP, Pais, Telefono, Correo, SitioWeb) values(?,?,?,?,?,?,?,?,?,?)";
      try {
          $stmt=$conex->prepare($insertProveedor);
          $stmt->bind_param('sssssdsdss', $Tipo, $Nombre, $Colonia, $Ciudad, $Estado, $CP, $Pais, $Telefono, $Correo, $SitioWeb);
          $stmt-> execute();

          $stmt->close();
          mysqli_close($conex);

          $status=1;
          return $status;
      } catch (Exception $e) {
          die('exception captura:'. $e->getMessage());
      }
  }

  function actualizarProveedor($idProveedor, $Tipo, $Nombre, $Colonia, $Ciudad, $Estado, $CP, $Pais, $Telefono, $Correo, $SitioWeb)
  {
      $conex= conectarBD();
      $updateProveedor="update tbproveedores set Tipo='$Tipo',Nombre='$Nombre',Colonia='$Colonia',Ciudad='$Ciudad',Estado='$Estado'
    ,CP='$CP',Pais='$Pais',Telefono='$Telefono',Correo='$Correo',SitioWeb='$SitioWeb' where idProveedor='$idProveedor'";
      try {
          $stmt=$conex->prepare($updateProveedor);
          $stmt-> execute();

          $stmt->close();
          mysqli_close($conex);

          $status=1;
          return $status;
      } catch (Exception $e) {
          die('exception captura:'. $e->getMessage());
      }
  }

  function eliminarProveedor($idE)
  {
      $conex= conectarBD();
      $deleteV="delete from tbproveedores where idProveedor= ?";

      try {
          $stmt = $conex->prepare($deleteV);
          $stmt -> bind_param('i', $idE);
          $stmt -> execute();
          $stmt -> close();
          mysqli_close($conex);

          $status=1;
          return $status;
      } catch (Exception $e) {
          die('exception al eliminar:'. $e->getMessage());
      }
  }

//-----------------------------------VENTAS----------------------------------------------------------------------------//

  function consultaVentas()
  {
      $conex= conectarBD();
      $selectV= "select idVenta, tbventas.Cliente , tbventas.Producto, tbventas.Descripcion, Cantidad, PrecioUnitario, Importe, Impuesto, SubTotal, Expiracion, PlazoPago FROM tbventas";

      try {
          $rsV= mysqli_query($conex, $selectV);
          mysqli_close($conex);

          return $rsV;
      } catch (Exception $e) {
          die('exception captura:'. $e->getMessage());
      }
  }


  function guardarV($Cliente, $Producto, $Descripcion, $Cantidad, $PrecioUnitario, $Impuesto, $Importe, $SubTotal, $Expiracion, $PlazoPago)
  {
      $conex= conectarBD();
      $insertV="insert into tbventas(tbventas.Cliente, tbventas.Producto, Descripcion, Cantidad, PrecioUnitario, Importe, Impuesto, SubTotal, Expiracion, PlazoPago
      ) values(?,?,?,?,?,?,?,?,?,?)";
      try {
          $stmt=$conex->prepare($insertV);
          $stmt->bind_param('sssdddddss', $Cliente, $Producto, $Descripcion, $Cantidad, $PrecioUnitario, $Importe, $Impuesto, $SubTotal, $Expiracion, $PlazoPago);
          $stmt-> execute();

          $stmt->close();
          mysqli_close($conex);

          $status=1;
          return $status;
      } catch (Exception $e) {
          die('exception captura:'. $e->getMessage());
      }
  }

  function guardarAlmacenVentas($Producto, $Cantidad){
    $conex= conectarBD();
    $updateProducto="UPDATE tbproductos SET Cantidad = Cantidad - '$Cantidad' WHERE Producto = '$Producto'";
    try {
        $stmt=$conex->prepare($updateProducto);
        $stmt-> execute();

        $stmt->close();
        mysqli_close($conex);

        $status=1;
        return $status;
    } catch (Exception $e) {
        die('exception captura:'. $e->getMessage());
    }
  }

  function actualizarV($idVenta, $Cliente, $Producto, $Descripcion, $Cantidad, $PrecioUnitario, $Importe, $Impuesto, $SubTotal, $Expiracion, $PlazoPago)
  {
      $conex= conectarBD();
      $updateV="update tbventas set Cliente='$Cliente',Producto='$Producto',Descripcion='$Descripcion',Cantidad='$Cantidad',PrecioUnitario='$PrecioUnitario'
    ,Importe= '$Importe',Impuesto='$Impuesto',SubTotal='$SubTotal',Expiracion='$Expiracion',PlazoPago='$PlazoPago' where idVenta='$idVenta'";
      try {
          $stmt=$conex->prepare($updateV);
          $stmt-> execute();

          $stmt->close();
          mysqli_close($conex);

          $status=1;
          return $status;
      } catch (Exception $e) {
          die('exception captura:'. $e->getMessage());
      }
  }

  function eliminarVenta($idE)
  {
      $conex= conectarBD();
      $deleteV="delete from tbventas where idVenta= ?";

      try {
          $stmt = $conex->prepare($deleteV);
          $stmt -> bind_param('i', $idE);
          $stmt -> execute();
          $stmt -> close();
          mysqli_close($conex);

          $status=1;
          return $status;
      } catch (Exception $e) {
          die('exception al eliminar:'. $e->getMessage());
      }
  }

//-----------------------------------CLientes----------------------------------------------------------------------------//

  function consultaClientes()
  {
      $conex= conectarBD();
      $selectCl= "select * from tbclientes";

      try {
          $rsCl= mysqli_query($conex, $selectCl);
          mysqli_close($conex);

          return $rsCl;
      } catch (Exception $e) {
          die('exception captura:'. $e->getMessage());
      }
  }

  function consultaClienteUnico()
  {
      $conex= conectarBD();
      $selectP= "select Cliente from tbclientes";

      try {
          $rsCliente= mysqli_query($conex, $selectP);
          mysqli_close($conex);

          return $rsCliente;
      } catch (Exception $e) {
          die('exception captura:'. $e->getMessage());
      }
  }

  function guardarCliente($Tipo, $Cliente, $Colonia, $Ciudad, $Estado, $CP, $Pais, $Telefono, $Correo, $SitioWeb)
  {
      $conex= conectarBD();
      $insertCliente="insert into tbclientes(Tipo,Cliente,Colonia,Ciudad,Estado, CP, Pais, Telefono, Correo, SitioWeb) values(?,?,?,?,?,?,?,?,?,?)";
      try {
          $stmt=$conex->prepare($insertCliente);
          $stmt->bind_param('sssssdsdss', $Tipo, $Cliente, $Colonia, $Ciudad, $Estado, $CP, $Pais, $Telefono, $Correo, $SitioWeb);
          $stmt-> execute();

          $stmt->close();
          mysqli_close($conex);

          $status=1;
          return $status;
      } catch (Exception $e) {
          die('exception captura:'. $e->getMessage());
      }
  }

  function actualizarCliente($idCliente, $Tipo, $Cliente, $Colonia, $Ciudad, $Estado, $CP, $Pais, $Telefono, $Correo, $SitioWeb)
  {
      $conex= conectarBD();
      $updateCliente="update tbclientes set Tipo='$Tipo',Cliente='$Cliente',Colonia='$Colonia',Ciudad='$Ciudad',Estado='$Estado'
    ,CP='$CP',Pais='$Pais',Telefono='$Telefono',Correo='$Correo',SitioWeb='$SitioWeb' where idCliente='$idCliente'";
      try {
          $stmt=$conex->prepare($updateCliente);
          $stmt-> execute();

          $stmt->close();
          mysqli_close($conex);

          $status=1;
          return $status;
      } catch (Exception $e) {
          die('exception captura:'. $e->getMessage());
      }
  }

  function eliminarCliente($idE)
  {
      $conex= conectarBD();
      $deleteV="delete from tbclientes where idCliente= ?";

      try {
          $stmt = $conex->prepare($deleteV);
          $stmt -> bind_param('i', $idE);
          $stmt -> execute();
          $stmt -> close();
          mysqli_close($conex);

          $status=1;
          return $status;
      } catch (Exception $e) {
          die('exception al eliminar:'. $e->getMessage());
      }
  }

  //-----------------------------------Compras----------------------------------------------------------------------------//

  function consultaCompras()
  {
      $conex= conectarBD();
      $selectC= "select * from tbcompras";

      try {
          $rsC= mysqli_query($conex, $selectC);
          mysqli_close($conex);

          return $rsC;
      } catch (Exception $e) {
          die('exception captura:'. $e->getMessage());
      }
  }

  function consultaProductoUnico()
  {
      $conex= conectarBD();
      $selectP= "select Producto from tbproductos";

      try {
          $rsProducto= mysqli_query($conex, $selectP);
          mysqli_close($conex);

          return $rsProducto;
      } catch (Exception $e) {
          die('exception captura:'. $e->getMessage());
      }
  }

  function consultaProveedorUnico()
  {
      $conex= conectarBD();
      $selectProveedor= "select Nombre from tbproveedores";

      try {
          $rsProveedor= mysqli_query($conex, $selectProveedor);
          mysqli_close($conex);

          return $rsProveedor;
      } catch (Exception $e) {
          die('exception captura:'. $e->getMessage());
      }
  }

  function guardarCompra($Proveedor, $FechaLimite, $FechaRecepcion, $Producto, $Descripcion, $Cantidad, $PrecioUnitario, $Importe, $Impuesto, $SubTotal)
  {
      $conex= conectarBD();
      $insertV="insert into `tbcompras` (`Proveedor`, `FechaLimite`, `FechaRecepcion`, `Producto`, `Descripcion`, `Cantidad`, `PrecioUnitario`, `Importe`, `Impuesto`, `SubTotal`
      ) values(?,?,?,?,?,?,?,?,?,?)";
      try {
          $stmt=$conex->prepare($insertV);
          $stmt->bind_param('sssssddddd', $Proveedor, $FechaLimite, $FechaRecepcion, $Producto, $Descripcion, $Cantidad, $PrecioUnitario, $Importe, $Impuesto, $SubTotal);
          $stmt-> execute();

          $stmt->close();
          mysqli_close($conex);

          $status=1;
          return $status;
      } catch (Exception $e) {
          die('exception captura:'. $e->getMessage());
      }
  }

  function guardarAlmacenCompra($Producto, $Cantidad){
    $conex= conectarBD();
    $updateProducto="UPDATE tbproductos SET Cantidad = Cantidad + '$Cantidad' WHERE Producto = '$Producto'";
    try {
        $stmt=$conex->prepare($updateProducto);
        $stmt-> execute();

        $stmt->close();
        mysqli_close($conex);

        $status=1;
        return $status;
    } catch (Exception $e) {
        die('exception captura:'. $e->getMessage());
    }
  }

  function actualizarCompra($idCompra, $Proveedor, $FechaLimite, $FechaRecepcion, $Producto, $Descripcion, $Cantidad, $PrecioUnitario, $Importe, $Impuesto, $SubTotal)
  {
      $conex= conectarBD();
      $updateV="update tbcompras set Proveedor='$Proveedor',FechaLimite='$FechaLimite',FechaRecepcion='$FechaRecepcion',Producto='$Producto',Descripcion='$Descripcion'
    ,Cantidad='$Cantidad',PrecioUnitario='$PrecioUnitario',Importe='$Importe',Impuesto='$Impuesto',SubTotal='$SubTotal' where idCompra='$idCompra'";
      try {
          $stmt=$conex->prepare($updateV);
          $stmt-> execute();

          $stmt->close();
          mysqli_close($conex);

          $status=1;
          return $status;
      } catch (Exception $e) {
          die('exception captura:'. $e->getMessage());
      }
  }

  function eliminarCompra($idE)
  {
      $conex= conectarBD();
      $deleteV="delete from tbcompras where idCompra= ?";

      try {
          $stmt = $conex->prepare($deleteV);
          $stmt -> bind_param('i', $idE);
          $stmt -> execute();
          $stmt -> close();
          mysqli_close($conex);

          $status=1;
          return $status;
      } catch (Exception $e) {
          die('exception al eliminar:'. $e->getMessage());
      }
  }
