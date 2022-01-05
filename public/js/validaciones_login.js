var usuario = document.getElementById("user");

var contra = document.getElementById("pass");

var error = document.getElementById("error");

error.style.color = "white";
error.style.background = "rgba(211, 10, 10, 0.801)";
error.style.font = "bold";
error.style.fontFamily = "monospace";







function val_login() {
  var mensaje = [];
  var envio =true;
  if (usuario.value == "" ||  contra.value == "" )
   {
    if (usuario.value == ""  && contra.value == ""  ) {
      mensaje.push(" todos los campo vacios");
      envio=false;
    }
    else if (usuario.value == "") {
      mensaje.push("campo  usuario vacios <br>");
      envio=false;
    }
    
    
    else if (contra.value == "") {
      mensaje.push("campo  contraseña vacios <br>");
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