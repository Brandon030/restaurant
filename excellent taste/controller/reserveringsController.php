<?php
require_once 'model/reserveringLogic.php';
class Controller{
	
	public function __construct() {
		$this->reserveringLogic = new reserveringLogic();
	}

	public function handleRequest()
	{
		try {
			$op = isset($_REQUEST['op'])?$_REQUEST['op']:NULL;
			switch ($op) {
				case 'create':
				$this->collectCreateReservering();
				break;
				case 'reads':
				$this->collectReadsReserveringen();
				break;
				case 'read':
				$this->collectReadReservering($_REQUEST['id']);
				break;
				case 'update':
				$this->collectUpdateReservering();
				break;
				case 'delete':
				$this->collectDeleteReservering($_REQUEST['id']);
				break;
				default:
				$this->collectReadsReserveringen();
				break;
			}			
		} catch (ValidationException $e) {
				$errors = $e->getErrors();

		}
		
	}

	public function collectCreateReservering(){
		include 'view/reserveringMaken.php';
		$this->reserveringLogic->createReservering();
	}

	public function collectReadsReserveringen(){
		$reserveringen = $this->reserveringLogic->readReserveringen();
		include 'view/reserveringOverzicht.php';
	}

	public function collectReadReservering($id){
		$reservering = $this->reserveringLogic->readReservering($id);
		include 'view/reserveringAanpassen.php';
	}
	
	public function collectUpdateReservering($id){
		$reserveringUpdate = $this->reserveringLogic->updateReservering($id);
	}		

	public function collectDeleteReservering($id){
		$reservering = $this->reserveringLogic->deleteReservering($id);
		include '';
	}

	public function __destruct(){

	}

}
?>