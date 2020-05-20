<?php
require_once 'model/gerecthLogic.php';
class Controller{
	
	public function __construct() {
		$this->gerechtLogic = new gerechtLogic();
	}

	public function handleRequest()
	{
		try {
			$op = isset($_REQUEST['op'])?$_REQUEST['op']:NULL;
			switch ($op) {
				case 'create':
				$this->collectCreateGerecht();
				break;
				case 'reads':
				$this->collectReadsGerechten();
				break;
				case 'read':
				$this->collectReadGerecht($_REQUEST['id']);
				break;
				case 'update':
				$this->collectUpdateGerecht();
				break;
				case 'delete':
				$this->collectDeleteGerecht($_REQUEST['id']);
				break;
				default:
				$this->collectReadsGerechten();
				break;
			}			
		} catch (ValidationException $e) {
				$errors = $e->getErrors();

		}
		
	}

	public function collectCreateGerecht(){
		include '';
		$this->gerechtenLogic->collectCreateGerecht();
	}

	public function collectReadsGerechten(){
		$gerechten = $this->gerechtenLogic->readGerechten();
		include '';
	}

	public function collectReadsGerecht($id){
		$gerecht = $this->gerechtenLogic->readGerecht($id);
		include '';
	}
	
	public function collectUpdateGerecht($id){
		$gerechtUpdate = $this->gerechtenLogic->updateGerecht($id);
	}		

	public function collectDeleteGerecht($id){
		$gerecht = $this->gerechtenLogic->delete($id);
		include '';
	}

	public function __destruct(){

	}
}
?>