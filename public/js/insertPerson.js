//esto captura el ID del formulario al cual se le aplicaran las validaciones.
//dichas validaciones son al campo por nombre 
$('#persons_insert').bootstrapValidator({
	 feedbackIcons: {
		 valid: 'glyphicon glyphicon-ok',
		 invalid: 'glyphicon glyphicon-remove',
		 validating: 'glyphicon glyphicon-refresh'
	 },
	 fields: {
	 	cedula: { // campo cedula

			 validators: {
			 	 notEmpty: { // No puede ser vacio
					 message: 'La Cedula es requerida'
				 },
				 regexp: { // Solo estos caracteres pueden ser usados
					 regexp: /^[1234567890]+$/,
					 message: 'El Formato de la cedula es incorrecto'
				 },
				 between: { //rango entre 1 y 40 millones
				 			   min: 1,
                        	   max: 40000000,
				 	 message: 'El Rango de la Cedula es de 1 a 40 Millones'
				 	 	
				 }
			 } 
		 },
		 nombre: {
			 validators: {
			 	 notEmpty: { // No puede ser vacio
					 message: 'El nombre es requerido'
				 },
				 regexp: { // Solo estos caracteres pueden ser usados
					 regexp: /^[ABCDEFGHIJKLMNÑOPQRSTUVWXYZabcdefghijklmnñopqrstuvwxyz]+$/,
					 message: 'El Nombre Solo Puede Contener Letras'
				 }
			 }
		 },
		 apellido: {
			 validators: {
				 notEmpty: { // Solo estos caracteres pueden ser usados
					 message: 'El apellido es requerido'
				 },
				 regexp: { // Solo estos caracteres pueden ser usados
					 regexp: /^[ABCDEFGHIJKLMNÑOPQRSTUVWXYZabcdefghijklmnñopqrstuvwxyz]+$/,
					 message: 'El Apellido Solo Puede Contener Letras'
				 }
			 }
		 },
		 correo: {
			 validators: {
				 notEmpty: {
					 message: 'El correo es requerido y no puede ser vacio'
				 },
				 emailAddress: {//valida que sea tipo correo
					 message: 'El correo electronico no es valido'
				 }
			 }
		 },
		 fecha_nacimiento: {
			 validators: {
				 notEmpty: {
					 message: 'La fecha de nacimiento es requerida y no puede ser vacia'
				 },
				 date: {//valida que sea tipo date
					 format: 'YYYY-MM-DD',
					 message: 'La fecha de nacimiento no es valida'
				 }
			 }
		 },
		 sexo: {
			 validators: {
				 notEmpty: { // no puede ser vacio el sexo
					 message: 'El sexo es requerido'
				 }
			 }
		 },
		 telefono: { 
			 message: 'El teléfono no es valido',
			 validators: {
				 notEmpty: {
					 message: 'El teléfono es requerido y no puede ser vacio'
				 },
				 regexp: {// valida solo numeros del 0 a 9
					 regexp: /^[0-9]+$/,
					 message: 'El teléfono solo puede contener números'
				 }
			 }
		 }
 
	 }
});
