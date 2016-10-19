$(function () {
	$estado = $('#estados').html();
	if ($estado == "activo") {
		$('#estados').addClass("label label-success");
	}
	else if ($estado == "inactivo") {
		$('#estados').addClass("label label-danger");
	}else{
		$('#estados').addClass("label label-default");
	}
	
});