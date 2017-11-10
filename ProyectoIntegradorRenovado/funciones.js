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
  var username = document.form["form"]["nombre"]; //para mi seria document.form ademas el username no existe en registarse.php
  var email = document.form["form"]["correo"]; //email no existe en registrarse.php
  var password = document.form["form"]["constrasena"]; //password no existe en registrarse.php
  var foto = document.form["form"]["imgPerfil"]; // foto no existe en registrarse.php

  var error_nombre = document.getElementById("error_nombre");
  var error_email = document.getElementById("error_email"); //error_emailno existe en registarse.php
  var error_password = document.getElementById("error_password");


  username.addEventListener("blur",nameVerify,true);
  email.addEventListener("blur",emailVerify,true);
  password.addEventListener("blur",passwordVerify,true);

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
