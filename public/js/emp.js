$(document).ready(function(){
	$("#estado_natal_id").on('change', function () {
		$("#estado_natal_id option:selected").each(function () {
			elegido=$(this).val();
			$.post("municipios.php", { elegido: elegido }, function(data){
			$("#municipio_natal_id").html(data);
		});			
		});
	});
});