function confirmarBaja(){
	var mensaje = 'Si pulsa el botón "Aceptar", se eliminará el producto seleccionado';
	if (confirm(mensaje)){
		return true;
	}
//Redirección 
	window.location= 'panel-productos.php';
	return false;
}

// var es para definir el ámbito de una variable, por ej en una función pero se definen variables directamente
//con el nombre