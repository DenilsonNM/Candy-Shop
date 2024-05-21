/*Agregar Productos*/
document.addEventListener("DOMContentLoaded", function(){
  document.getElementById("formulario").addEventListener('submit', validarFormulario)
});

function validarFormulario(ev){
  ev.preventDefault();
  var nombre = document.getElementById('nombre').value
  if (nombre.length == 0) {
    alert('Escribe un nombre')
    document.getElementById('nombre').focus()
    return
  }
  var precio = document.getElementById('precio').value
  if (precio.length == 0) {
    alert('Escibe un precio')
    document.getElementById('precio').focus()
    return
  }
  var dispo = document.getElementById('disponibles').value
  if (dispo.length == 0) {
    alert('Escibe la disponibilidad')
    document.getElementById('disponibles').focus()
    return
  }
  var desc = document.getElementById('descripcion').value
  if (desc.length == 0) {
    alert('Escibe una descripcion')
    document.getElementById('descripcion').focus()
    return
  }
  this.submit()
}

/*Registro*/
document.addEventListener("DOMContentLoaded", function(){
  document.getElementById("altas").addEventListener('submit', validar)
});

function validar(ev){
  ev.preventDefault();
  var nombre = document.getElementById('nombre').value
  if (nombre.length == 0) {
    alert('Escriba su usuario nombre')
    document.getElementById('nombre').focus()
    return
  }
  var nacimiento = document.getElementById('nacimiento').value
  if (nacimiento.length == 0) {
    alert('Esciba su fecha de nacimiento')
    document.getElementById('nacimiento').focus()
    return
  }
  var pass = document.getElementById('contrasena').value
  if (pass.length == 0) {
    alert('Esciba una contraseña')
    document.getElementById('contrasena').focus()
    return
  }
  this.submit()
}

/*Contacto*/
document.addEventListener("DOMContentLoaded", function(){
  document.getElementById("contacto").addEventListener('submit', validarContacto)
});

function validarContacto(ev){
  ev.preventDefault();
  var nombre = document.getElementById('nombre').value
  if (nombre.length == 0) {
    alert('Escriba su nombre')
    document.getElementById('nombre').focus()
    return
  }
  var email = document.getElementById('email').value
  if (email.length == 0) {
    alert('Esciba su correo electronico')
    document.getElementById('email').focus()
    return
  }
  var mensaje = document.getElementById('mensaje').value
  if (mensaje.length == 0) {
    alert('Esciba un mensaje')
    document.getElementById('mensaje').focus()
    return
  }
  this.submit()
}