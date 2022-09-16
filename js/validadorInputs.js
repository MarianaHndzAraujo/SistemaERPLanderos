
function vaciosLogin(){

var usuarioI = document.getElementById("txtusuario").value;
var contraI = document.getElementById("txtpass").value;

if(usuarioI == ""){
  alert("Escribe algo en campo usuario");
  return false;

}

if(contraI == ""){
  alert("Escribe algo en campo contraseña");
  return false;

}
}

function vaciosRegistrar(){

var correoI = document.getElementById("txtcorreo").value;
var contrarI = document.getElementById("txtpass").value;
var ccontrarI = document.getElementById("txtcpass").value;

if(correoI == ""){
  alert("Escribe algo en campo Correo Electronico");
  return false;
}

if(contrarI == ""){
  alert("Escribe algo en campo contraseña");
  return false;
}

if(ccontrarI == ""){
  alert("Escribe algo en campo confirmar contraseña");
  return false;
}

}

function vaciosVideojuegos(){

  var nombreVJ = document.getElementById("txtnombrev").value;
  var consolaVJ = document.getElementById("txtconsola").value;
  var precioaV = document.getElementById("txtprecioa").value;
  var preciovV = document.getElementById("txtpreciov").value;

  if(nombreVJ == ""){
    alert("Escribe algo en campo nombre del VideoJuego");
    return false;
  }

  if(consolaVJ == ""){
    alert("Escribe algo en campo consola");
    return false;
  }

  if(precioaV == ""){
    alert("Escribe algo en campo precio de Adquisición");
    return false;
  }

  if(preciovV == ""){
    alert("Escribe algo en campo precio de Venta");
    return false;
  }
}
