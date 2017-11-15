function confirmarBaja(){
	var mensaje = 'Si pulsa el botón "Aceptar", se eliminará la categoría seleccionada';
	if (confirm(mensaje)){
		return true;
	}
//Redirección 
	window.location= 'panel-categorias.php';
	return false;
}