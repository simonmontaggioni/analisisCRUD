<?php
	
	class loginModel extends Model {
		
		protected 	$query;
		
		public function __construct() {
			parent::__construct();
		}
		
		public function __destruct() {
			;
		}
		
		public function getUser($user, $pass) {
			$data = $this->_db->query(
				'SELECT
					persona.nombre1,
					persona.apellido1,
					usuario.usuario,
					usuario.clave,
					perfil.perfil
					FROM
					persona
					INNER JOIN usuario ON usuario.persona_idpersona = persona.idpersona
					INNER JOIN perfil ON usuario.perfil_idperfil = perfil.idperfil
					WHERE 
						usuario.usuario = "'.$user.'" 
					AND 
						usuario.clave = "'.md5($pass).'"'
			);
			return $data->fetch();
		}
		
		
		
	}
?>