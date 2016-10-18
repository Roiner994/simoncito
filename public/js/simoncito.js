$(function () {
	$estado = $('#estado').html();
	if ($estado == "activo") {
		$('#estado').addClass("label label-success");
	}
	else if ($estado == "inactivo") {
		$('#estado').addClass("label label-danger");
	}else{
		$('#estado').addClass("label label-default");
	}
	
});