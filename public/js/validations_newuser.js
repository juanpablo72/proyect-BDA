
var usuario = document.getElementById("usuarioreg");
var correoreg = document.getElementById("correoreg");
var contraseña = document.getElementById("passw1");
var valcontra = document.getElementById("passw2");
var error = document.getElementById("error");
error.style.color = "white";
error.style.background = "rgba(211, 10, 10, 0.801)";
error.style.font = "bold";
error.style.fontFamily = "monospace";



var vcor = /\w+@\w+\.+[a-z]/;
var vpass = valcontra.value;



function valreg() {
  var mensaje = [];
  var envio =true;
  if (usuario.value === "" || correoreg.value === "" || contraseña.value === "" ||valcontra.value === "")
   {
    if (usuario.value === "" && correoreg.value === "" && contraseña.value === "" && valcontra.value === "" ) {
      mensaje.push(" todos los campo vacios");
      envio=false;
    }
    else if (usuario.value === "") {
      mensaje.push("campo  usuario vacios <br>");
      envio=false;
    }

else if (usuario.value.length < 3) {
      mensaje.push("campo  usuario menor a 3 caracteres <br>");
      envio=false;
    }

    else if (correoreg.value === "") {
      mensaje.push("campo  correo vacios <br>");
      envio=false;
    }
    else if (!vcor.test(correoreg.value) && correoreg.value !== "") {
      mensaje.push("correo no valido <br>");
      envio=false;
    }
    else if (contraseña.value === "") {
      mensaje.push("campo  contraseña vacios <br>");
      envio=false;
    }
    else if (contraseña.value.length < 5) {
      mensaje.push("campo  contraseña muy corto <br>");
      envio=false;
    }
     else if (valcontra.value === "") {
      mensaje.push("campo  de validar contraseña vacios o no son iguales <br>");
      
      envio=false;
    }

    envio=false;

  } 
  else {
    envio=true;
  }
  if((contraseña.value)!==(valcontra.value))
  {
    mensaje.push("campo  de contraseñas no son iguales <br>");
    envio=false;

  }
    
    

  error.innerHTML = mensaje.join(" ");


  
 return envio;
  
}


function valreguser() {
  var mensaje = [];
  var envio =true;
  if (usuario.value === "" || correoreg.value === "" || contraseña.value === "" )
   {
    if (usuario.value === "" && correoreg.value === "" && contraseña.value === "" ) {
      mensaje.push(" todos los campo vacios");
      envio=false;
    }
    else if (usuario.value === "") {
      mensaje.push("campo  usuario vacios <br>");
      envio=false;
    }

else if (usuario.value.length < 3) {
      mensaje.push("campo  usuario menor a 3 caracteres <br>");
      envio=false;
    }

    else if (correoreg.value === "") {
      mensaje.push("campo  correo vacios <br>");
      envio=false;
    }
    else if (!vcor.test(correoreg.value) && correoreg.value !== "") {
      mensaje.push("correo no valido <br>");
      envio=false;
    }
    else if (contraseña.value === "") {
      mensaje.push("campo  contraseña vacios <br>");
      envio=false;
    }
    else if (contraseña.value.length < 5) {
      mensaje.push("campo  contraseña muy corto <br>");
      envio=false;
    }
     

    envio=false;

  } 
  else {
    envio=true;
  }
  
    
    

  error.innerHTML = mensaje.join(" ");


  
 return envio;
  
}