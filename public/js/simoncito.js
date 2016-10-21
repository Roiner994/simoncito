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

$(function(){
	console.log("hola");
	var niño=$('#con_niño').attr('class');
	var colaborar=$('#si_colabora').attr('class');
	console.log(colaborar);

	if (niño=='si'){
		$("#con_niño").prop("checked","true");
	}else{
		$("#sin_niño").prop("checked","true");
	}

	if(colaborar=='si'){
		$("#si_colabora").prop("checked","true");
	}else{
		$("#no_colabora").prop("checked","true");
	}

});