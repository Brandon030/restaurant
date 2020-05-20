<?php
require_once 'model/DataHandler.php';

class reserveringLogic {

	public function __construct() {
		$this->DataHandler = new Datahandler('localhost','mysql' ,'excellent_taste' ,'root' ,'');
	}

	public function createReservering(){

			$sql = "";
			$this->DataHandler->createData($sql);
			header('Location: index.php');
		}
		
	}

	public function readReserveringen(){
		$sql = 'SELECT * FROM reserveringen';
		$results = $this->DataHandler->readsData($sql); 
		return $results;
	}

	public function readReservering($id){
		$sql = "";
		$results = $this->DataHandler->readData($sql);
		$reservering = $results->fetch(PDO::FETCH_ASSOC); 
		return $reservering;
	}

	public function updateReservering(){
		$sql ="";
		$results = $this->Datahandler->updateData($sql);
	}

	public function deleteReservering($id){
		$sql = 'DELETE FROM reserveringen WHERE reserveringsID = ' . $id;
		$results = $this->DataHandler->deleteData($sql);
	}
}