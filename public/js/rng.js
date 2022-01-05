var cireg = document.getElementById("cireg");
var nombreest= document.getElementById("nomreg");

var  apellidoest = document.getElementById("apelreg");
var edad_est= document.getElementById("edadreg");

var correo = document.getElementById("mailreg");
var anio= document.getElementById("Areg");
var seccion = document.getElementById("seccreg");
var cirepresentante = document.getElementById("cirepreg");
var nomrepre= document.getElementById("nomrepreg");
var dicecion = document.getElementById("direc");
var cell = document.getElementById("telefono");
var lnac = document.getElementById("nacreg");


var error = document.getElementById("error");
var vcor = /\w+@\w+\.+[a-z]/;
error.style.color = "white";
error.style.background = "rgba(211, 10, 10, 0.801)";
error.style.font = "bold";
error.style.fontFamily = "monospace";
 
function m_filtro()
{
  alert(" funcion no se encuentra disponible");
}


function val_camp() {
  var mensaje = [];
  var envio =true;
  if (cireg.value == "" ||  nombreest.value == "" || apellidoest.value == "" || edad_est.value == "" ||  correo.value == "" || anio.value == "" || seccion.value == ""  || cirepreg.value == "" ||  nomrepreg.value == "" || dicecion.value == "" || cell.value == "" || lnac.value == "")
   {
    if ( cireg.value == "" &&  nombreest.value == "" && apellidoest.value == "" && edad_est.value == "" &&  correo.value == "" && anio.value == "" && seccion.value == ""  && cirepreg.value == "" &&  nomrepreg.value == "" && dicecion.value == "" && cell.value == "" && lnac.value =="" ) {
      mensaje.push(" todos los campo vacios");
      envio=false;
    }
    else if (cireg.value == "") {
      mensaje.push("campo  ci del estudiante vacio <br>");
      envio=false;
    }
    else if (cireg.value.length < 7 ) {
      mensaje.push("campo  ci  muy corto  <br>");
      envio=false;
    }
    else if (cireg.value.length > 9 ) {
      mensaje.push("campo  ci  incorrecta o no valida   <br>");
      envio=false;
    }
    
    
    else if (nombreest.value == "") {
      mensaje.push("campo nombre estudiante vacio <br>");
      envio=false;
    }
    else if (nombreest.value.length  <3) {
      mensaje.push("campo nombre muy corto<br>");
      envio=false;
    }
     
     else if (apellidoest.value == "") {
      mensaje.push("campo  apellido del estudiante vacio <br>");
      envio=false;
    }
    else if (apellidoest.value.length  <3 ) {
      mensaje.push("campo  apellido del estudiante muy corto <br>");
      envio=false;
    }
    
    
    else if (edad_est.value == "") {
      mensaje.push("campo edad estudiante vacio <br>");
      envio=false;
    }
    else if (edad_est.value.length > 2 ) {
      mensaje.push("campo  edad no valido  <br>");
      envio=false;
    }
    else if (edad_est.value >= -1000 && edad_est.value <= 0 ) {
      mensaje.push("campo  edad no puede ser negativo  <br>");
      envio=false;
    }
    else if (edad_est.value.length < 0 ) {
      mensaje.push("campo  edad no valido  <br>");
      envio=false;
    }

    else if (mailreg.value == "") {
      mensaje.push("campo  correo del estudiante vacio <br>");
      envio=false;
    }
    
    else if (!vcor.test(mailreg.value) && mailreg.value !== "") {
      mensaje.push("correo no valido <br>");
      envio=false;
    }
    
    else if (anio.value == "") {
      mensaje.push("campo año estudiante vacio <br>");
      envio=false;
    }
    else if (seccion.value == "") {
      mensaje.push("campo  seccion  del estudiante vacio <br>");
      envio=false;
    }
    
else if (cell.value == "") {
      mensaje.push("campo  telefono vacio <br>");
      envio=false;
    }
else if (cell.value.length > 12 ) {
      mensaje.push("campo  telefono invalido <br>");
      envio=false;
    }
    else if (cell.value.length < 7 ) {
      mensaje.push("campo  telefono invalido <br>");
      envio=false;
    }
else if (lnac.value == "") {
      mensaje.push("campo  lugar nacimiento vacio <br>");
      envio=false;
    }
    
    else if (cirepresentante.value == "") {
      mensaje.push("campo ci del representante vacio <br>");
      envio=false;
    }

    else if (cirepresentante.value.length <8 ) {
      mensaje.push("campo ci del representante no valido <br>");
      envio=false;
    }
    else if (cirepresentante.value.length > 9 ) {
      mensaje.push("campo ci del representante no valido <br>");
      envio=false;
    }
    else if (nomrepre.value == "") {
      mensaje.push("campo  nombre del representante vacio <br>");
      envio=false;
    }
    else if (nomrepre.value.length <3) {
      mensaje.push("campo  nombre del representante no valido(muy corto) <br>");
      envio=false;
    }
        
    
    
    else if (dicecion.value == "") {
      mensaje.push("campo direccion vacio <br>");
      envio=false;
    }
    else if (dicecion.value.length <4) {
      mensaje.push("campo direccion no valido(muy corto) <br>");
      envio=false;
    }
     
     
     
     

    envio=false;
    alert("COMPRUEBE LOS DATOS INGRESADOS");

  } 
  else {
    envio=true;
    alert("Estudiante registrado");
  }
 
    
    

  error.innerHTML = mensaje.join(" ");


  
 return envio;
  
}