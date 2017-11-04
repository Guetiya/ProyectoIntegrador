formulario = document.querySelector("form");
apellido = document.querySelector("#apellido");
nombre = document.querySelector("#nombre");
genero = document.querySelector("#genero");
correo = document.querySelector("#correo");
contrasena= document.querySelector("#contrasena");
repetirContrasena = document.querySelector("#repetirContrasena");
submit= document.querySelector("#submit");

// window.onload = function(){
//   document.querySelector('#cambiar_tema').style.backgroundColor("red");
// }

//Ejercicio 2 del sprint
document.querySelector("#cambiar_tema").addEventListener("click", myFunction);
function myFunction() {
    document.querySelector("main").style.backgroundColor="green";
}

function removeHandler() {
    document.querySelector("#cambiar_tema").removeEventListener("click", myFunction);
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
<form action="page.php" onsubmit="return verifForm(this)"> //à mettre dans le formulaire
var elemento = document.querySelector("#button");
elemento.addEventListener("click", function(){
  window.close();
})
function varlidarusuario() {
    var x = document.forms["myForm"]["fname"].value;
    if (x == "" || x == ) {
        alert("debe llenar el nombre");
        return false;
    }
}
function validarformulario() {
    var x = document.forms["myForm"]["fname"].value;
    if (x == "") {
        alert("hay campos vacios por favor llenalos");
        return false;
    }
}
