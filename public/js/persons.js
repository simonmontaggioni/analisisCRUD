$(document).ready(function() { 
	var BASE_URL = "http://localhost/mvc/"; //base url en javascript

	var select = $('#sexo'); 
	/// variable   //id del select 
			$.ajax({
				url: BASE_URL +'/persons/loadSexo', //apuntamos a persons/loadSexo
				type: 'POST',
				dataType: 'json',
				
			})
			.done(function(data) { // si todo funciona
				//append es agregar , option.
				select.append('<option value="">Seleccione...</option>');
				//Realizamos  un for para llenar el select hasta el tamaño de data
				//data es quien tiene los resultados que se pasaron desde el controlador.
						for (var i=0; i<data.length; i++) {
							select.append('<option value="' + data[i].value + '">' + data[i].option + '</option>');
						}
			})
			.fail(function() {
				//si da error decimos error
				alert("Error Select sexo");
			});
			
			

});