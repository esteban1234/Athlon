$(function(){

	$('#form').validate({
		submitHandler:function(){
			var form = $("#formUsers").serialize();
			$.ajax({
				beforeSend: function(){
						$('#ajaxLoader').show();
				},
				cache: false,
				type: 'POST',
				dataType: 'json',
				url:'ajax.php?mode=goPEDIDO',
				data:form + '&accion=addPRODUCTO',
				success: function(response){
					$('#ajaxLoader').hide();
					$('#updateIN').empty();
					// $('#myModal').modal('toggle');
					$('#refresca').append(response.contenido);
					$('#updateIN').append(response.mensaje);
					// $('#folSIG').val = response.mensaje;
				},
				error: function(){
					alert('Error del sistema, Vuelva a intentar');
				}
			});
		},

			errorPlacement:function(error,element){
			error.appendTo(element.prev("span").append());
		}
	});
});
