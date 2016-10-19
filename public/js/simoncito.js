$(function () {

	var cadena;
	var i= $('.numero').attr('id');
	var i= i.replace(/\D/g,'');
	var estado;
	for (i; i >= 0; i--) {
		cadena='#empleado'+(i);
		estado=$(cadena).html();
		if (estado=='activo') {
			$(cadena).addClass("label label-success");
		} else if (estado=='inactivo'){
			$(cadena).addClass("label label-danger");
		}else{
			$(cadena).addClass("label label-default");
		}
	}

	
});