<?php

	class personsModel extends Model{

		protected $query;

		public function __construct(){
			parent::__construct();
		}
		public function __destruct(){
			// REVIEW THIS THING;
		}

		public function insertPerson($query){
			try {
				$this->_db->beginTransaction();
				$this->_db->prepare($this->query)->execute($persona);
				$this->_db->commit();
			}
			catch (Exception $e){
				$this->_db->rollBack();
				echo "Error :: ".$e->getMessage();
				exit();
			}
		}

		public function listing($query){

			$auxiliar = $this->_db->query($query);
				try {
				$this->_db->beginTransaction();
				$result= $auxiliar->fetchAll();
				$this->_db->commit();
				}
				catch (Exception $e){
					$this->_db-rollBack();
					echo "Error :: ".$e->getMessage();
					exit();
				}
				return $result;
		}

		public function update($query){
			try {
				$this->_db->beginTransaction();
				$this->_db->prepare($this->query)->execute($persona);
				$this->_db->commit();
			}
			catch (Exception $e){
				$this->_db->rollBack();
				echo "Error :: ".$e->getMessage();
				exit();
			}
		}

		public function delete($query){
			try {
				$this->_db->beginTransaction();
				$this->_db->prepare($this->query)->execute();
				$this->_db->commit();
			}
			catch (Exception $e){
				$this->_db->rollBack();
				echo "Error :: ".$e->getMessage();
				exit();
			}
		}
}?>
