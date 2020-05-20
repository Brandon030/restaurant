<?php
require_once 'model/DataHandler.php';

class reserveringLogic {

	public function __construct() {
		$this->DataHandler = new Datahandler('localhost','mysql' ,'excellent_taste' ,'root' ,'');
	}

	public function createReservering(){
		if (isset($_POST['formSubmit'])){
			$datum = $_POST['datum'];
			$tijd = $_POST['tijd'];
			$tafel = $_POST['tafel'];
			$naam = $_POST['naam'];
			$telnr = $_POST['telnr'];
			$personen = $_POST['personen'];

			$sql = "INSERT INTO `reserveringen`(`reserveringsID`, `datum`, `tijd`, `tafel`, `klantnaam`, `telefoonnummer`, `aantal_personen`) VALUES ('', '$datum', '$tijd', '$tafel', '$naam', '$telnr', '$personen')";
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
		$sql = 'SELECT * FROM reserveringen WHERE reserveringsID = ' . $id;
		$results = $this->DataHandler->readData($sql);
		$reservering = $results->fetch(PDO::FETCH_ASSOC); 
		return $reservering;
	}

	public function updateReservering(){
		$sql = 'UPDATE excellent_taste SET datum = ' . $datum . ', tijd = ' . $tijd . ', tafel = ' . $tafel . ', klantnaam = ' . $naam . ', telefoonnummer = ' . $telnr . ', aantal_personen = ' . $personen .' WHERE reserveringsID = ' . $reserveringsID;
		$results = $this->Datahandler->updateData($sql);
	}

	public function deleteReservering($id){
		$sql = 'DELETE FROM reserveringen WHERE reserveringsID = ' . $id;
		$results = $this->DataHandler->deleteData($sql);
	}
}