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
