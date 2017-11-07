// formulario = document.querySelector("form");
// apellido = document.querySelector("#apellido");
// nombre = document.querySelector("#nombre");
// genero = document.querySelector("#genero");
// correo = document.querySelector("#correo");
// contrasena= document.querySelector("#contrasena");
// repetirContrasena = document.querySelector("#repetirContrasena");
// submit= document.querySelector("#submit");

// window.onload = function(){
//   document.querySelector('#cambiar_tema').style.backgroundColor("red");
// }


window.onload = function(){
//Ejercicio 2 del sprint
  document.getElementById("cambiar_tema").onclick = function(){
    console.log('test');
    if(document.getElementById("color").className == "container main"){
      document.getElementById("color").className = "container otro";
    }
    else if (document.getElementById("color").className == "container otro"){
      document.getElementById("color").className = "container main";
    }
  };

function removeHandler() {
    document.querySelector("#cambiar_tema").removeEventListener("click", myFunction);
        document.getElementById("cambioColor").href='css/styles-main.css';
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
function varlidarusuario() {
    var x = document.forms["myForm"]["fname"].value;
    if (x == "" || x == "") {
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
function chequearFormulario(form)
{
  if(this.nombre.value == "") {
    alert("por favor ingrese su nombre");
    this.name.focus();
    return false;
  }
  if(this.email.value == "" || !this.correo.checked) {
    alert("Por favor ingrese un mail valido");
    this.email.focus();
    return false;
  }
  /*if(this.age.value == "" || !this.valid_age.checked) {
    alert("por favor ingrese");
    this.age.focus();
    return false;
  }*/
  alert("Success!  The form has been completed, validated and is ready to be submitted...");
  return false;
}

}
