function validar(url){
    var eliminar = confirm('¿Deseas eliminar los datos?')
    if (eliminar == true) {
        window.location = url
    }
}