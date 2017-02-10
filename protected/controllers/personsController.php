<?php 
	class personsController extends Controller{
		
		
		protected $_sidebar_menu;
		private $_person;
		
		public function __construct(){
	
			parent::__construct();
			$this->_person = $this->loadModel('persons');
		//Objeto donde almacenamos todas las funciones de PersonsModel.php

			$this->_sidebar_menu =array(
					array(
				'id' => 'insert_new',
				'title' => 'Nueva Persona',
				'link' => BASE_URL . 'persons' . DS . 'insert'
						)
										);
		}
		
		function index(){
			
			$this->_view->render('index', 'persons', '',$this->_sidebar_menu);
			// clase  metodo 	  vista    carpeta dentro de views 
		}


			
			function insert(){
				$this->_view->setJs(array('js/insertPerson'));
				//Si hay una solicitud via POST
				if ($_SERVER['REQUEST_METHOD']=='POST') {
				
		//Guardamos en un arreglo  lo que recibimos via POST de la vista
				$persona = array(
					':cedula' => $_POST['cedula'] ,
					':nombre' => $_POST['nombre'] ,
					':apellido' => $_POST['apellido'] ,
					':sexo' => $_POST['sexo'] ,
					':fecha_nacimiento' => $_POST['fecha_nacimiento'] ,
					':telefono' => $_POST['telefono'],
					':correo' => $_POST['correo']  
					);
	//enviamos ala funcion Insert en el modelo de personas el arreglo 
			$this->_person->insertPerson($persona);	
						 // metodo  arreglo
			$this->_view->redirect('persons/listing');
				}else{ 
					// se muestra la ventana si no es via post.
					$this->_view->render('insert', 'persons', '',$this->_sidebar_menu);
				}
			}



			function listing(){
		//llamamos a la funcion getPersons en el modelo y Guardamos en
		// la variable $listado  guarda el resultado de la funcion GetPersons
		//para luego ser enviada a la vista en el objeto _listado
				$listado = $this->_person->getPersons();
				$this->_view->_listado = $listado;
				
				$this->_view->render('listing', 'persons', '',$this->_sidebar_menu);
			}



		
		function update($id = false){
			//Si le damos al boton modificar.
				if ($_SERVER['REQUEST_METHOD']=='POST') {
		//guardamos en un arreglo los valores enviados desde la vista
				//para luego enviarlos a la funcion UpdatePerson
					$persona = array(
							':id' => $_POST['id'] ,
							':cedula' => $_POST['cedula'] ,
							':nombre' => $_POST['nombre'] ,
							':apellido' => $_POST['apellido'] ,
							':sexo' => $_POST['sexo'] ,
							':fecha_nacimiento' => $_POST['fecha_nacimiento'] ,
							':telefono' => $_POST['telefono'],
							':correo' => $_POST['correo']  
						);
					$this->_person->updatePerson($persona);	
						 // metodo  arreglo
					$this->_view->redirect('persons/update/'.$persona[':id']);
					//OJO redireccionamos a persona update MAS EL ID de la persona, 
					//para que vea los cambios

				}else{//si no mostramos igual.

		//llamamos a la funcion getPergetUnicaPersona en el modelo la cual
		// le pasamos el id, Guardamos en la variable $person el resultado 
		//de la funcion getUnicaPersona
		//para luego ser enviada a la vista en el objeto _persona

					$persona = $this->_person->getUnicaPersona($id);
					$this->_view->_persona = $persona;
					$this->_view->render('update', 'persons', '',$this->_sidebar_menu);

				}
		}




		function delete($id){

			$this->_person->deletePersons($id);
			$this->_view->redirect('persons/listing');

		}
		
		
		
		
		

	
	
	
	









}?>