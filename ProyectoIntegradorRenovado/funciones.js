// formulario = document.querySelector("form");
// apellido = document.querySelector("#apellido");
// nombre = document.querySelector("#nombre");
// genero = document.querySelector("#genero");
// correo = document.querySelector("#correo");
// contrasena= document.querySelector("#contrasena");
// repetirContrasena = document.querySelector("#repetirContrasena");
// submit= document.querySelector("#submit");



window.onload = function(){
//Ejercicio 2 del sprint
  document.getElementById("cambiar_tema").onclick = function(){
    if(document.getElementById("color").className == "container main"){
      document.getElementById("color").className = "container main_cambio";
    }
    else if (document.getElementById("color").className == "container main_cambio"){
      document.getElementById("color").className = "container main";
    }
  }

//ejercicio 3 del sprint
  var counter = 0;
  function add(){
    return counter += 1;
  }
  function myFunction(){
    document.getElementById("demo").innerHTML = add();
  }

  if (document.querySelector('.contar')) {
    checkUsers();

    setInterval(function() {
      checkUsers();
    }, 30000);

  }

  function checkUsers(){
      // function myFunction(){
        var numeroUsuario = new XMLHttpRequest();
          numeroUsuario.onreadystatechange= function(){
            if (numeroUsuario.readyState== 4 && numeroUsuario.status == 200){
                document.getElementById("contar").innerHTML = numeroUsuario.responseText;
            }
          };
           numeroUsuario.open("GET","connectados.json", true)
           numeroUsuario.send();
      // }
  }

  function surligne(campo, error)
  {
     if(error)
        campo.style.backgroundColor = "#fba";
     else
        campo.style.backgroundColor = "";
  }

  function validarApellido(campo)
  {
     if(campo.value.length < 2 || campo.value.length > 25)
     {
        surligne(campo, true);
        return false;
     }
     else
     {
        surligne(campo, false);
        return true;
     }
  }

  function validarMail(campo)
  {
     var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
     if(!regex.test(campo.value))
     {
        surligne(campo, true);
        return false;
     }
     else
     {
        surligne(campo, false);
        return true;
     }
  }

  function validarForm(f)
  {
     var pseudoOk = validarApellido(f.apellido);
     var mailOk = validarMail(f.email);


     if(pseudoOk && mailOk)
        return true;
     else
     {
        alert("Veuillez remplir correctement tous les champs");
        return false;
     }
  }
// <form action="page.php" onsubmit="return verifForm(this)"> //à mettre dans le formulaire
// var elemento = document.querySelector("#button");
// elemento.addEventListener("click", function(){
//   window.close();
// })
  function validar() {
    if (username.value == "") {
      username.style.border = "1px solid red";
      name_error.textContent = "se necesita el nombre"; //de donde viene name_error
      username.focus();
      return false;
    }
    if (email.value == "") {
      email.style.border = "1px solid red";
      email_error.textContent = "se necesita el mail";
      email.focus();
      return false;
    }
    if (password.value == "") {
      password.style.border = "1px solid red";
      password_error.textContent = "se necesita la contraseña";
      password.focus();
      return false;
    }
  }

  function verificarNombre() {
    if (username.value != "") {
      username.style.border = "1px solid #5E6E66 ";
      error_nombre.innerHTML = "";
      return true;
    }
  }

  function verificarEmail() {
    if (email.value != "") {
      email.style.border = "1px solid #5E6E66 ";
      error_email.innerHTML = "";
      return true;
    }
  }
  function verificarPassword() {
    if (password.value != "") {
      password.style.border = "1px solid #5E6E66 ";
      password_error.innerHTML = "";
      return true;
    }
  }
}

//esta es la validacion que cuenta

function validacionjs() {
    apellido = document.getElementsByName('apellido').value;
    nombre = document.getElementsByName('nombre').value;
    correo = document.getElementsByName('correo').value;
    contrasena = document.getElementsByName('contrasena').value;
    repetirContrasena = document.getElementsByName('repetirContrasena').value;
    var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;



}
function validar_apellido() {
  apellido = document.getElementsByName('apellido').value;
  if (apellido == null || !isNaN(apellido) ) {
    document.getElementById("error_apellido").innerHTML="el apellido no es valido";
    return false;
  }

}
function clear_apellido() {
  apellido = document.getElementsByName('apellido').value;

    document.getElementById("error_apellido").innerHTML="";
    return false;
}
function validar_nombre() {
  nombre = document.getElementsByName('nombre').value;
  if (nombre == null || !isNaN(nombre) ) {
    document.getElementById("error_nombre").innerHTML="el nombre no es valido";
    return false;
  }

}
function clear_nombre() {
  nombre = document.getElementsByName('nombre').value;

    document.getElementById("error_nombre").innerHTML="";
    return false;
}
//esto genera el error
/*
function validar_genero() {
   genero = document.getElementsByName('genero').value;
  if (genero == null ) {
    document.getElementById("error_genero").innerHTML="seleccione un genero";
    return false;
  }

}

function clear_genero() {
  genero = document.getElementsByName('genero').value;

    document.getElementById("error_genero").innerHTML="";
    return false;
}
*/
function validar_correo() {
  correo = document.getElementsByName('correo').value;
  if (correo == null ) {
    document.getElementById("error_mail").innerHTML="el correo no es valido";
    return false;
  }

}
function clear_correo() {
  correo = document.getElementsByName('correo').value;

    document.getElementById("error_mail").innerHTML="";
    return false;
}
function validar_contrasena() {
  contrasena = document.getElementsByName('contrasena').value;
  if (contrasena == null ) {
    document.getElementById("error_contrasena").innerHTML="ingrese una contraseña";
    return false;
  }

}
function clear_contrasena() {
  contrasena = document.getElementsByName('contrasena').value;

    document.getElementById("error_contrasena").innerHTML="";
    return false;
}
function validar_repetirContrasena() {
  repetirContrasena = document.getElementsByName('repetirContrasena').value;
  if (repetirContrasena == null ) {
    document.getElementById("error_repetirContrasena").innerHTML="ingrese la contraseña";
    return false;
  }

}
function clear_repetirContrasena() {
  repetirContrasena = document.getElementsByName('repetirContrasena').value;

    document.getElementById("error_repetirContrasena").innerHTML="";
    return false;
}
