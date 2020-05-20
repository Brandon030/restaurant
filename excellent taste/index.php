<?php
require_once 'Controller/reserveringsController.php';

$controller = new Controller();
$controller->handleRequest();


/*
	CRUD: 5 zaken
	klanten 
	eten
	drinken
	gerechten
	subgerechten

	selectbox sequal ConCat(s.subgerechtcode, "-", s.subgerechtnaam, "->", g.gerechtnaam) AS lookupresult, s.subgerechtcode AS lookup_id FROM subgerecht s LEFT JOIN gerecht g ON s.gerechtcode = g.gerechtcode;


	MODEL
	===
	public function readContact($id){
		$id = $this->Datahandler->tableNameSanitize($id);
		$res = $this->Datahandler->prepData("SELECT * FROM 'Blog_data' WHERE 'Blog_Title' = '$id'");
		$results = $res->fetchALL();
		return $results;
	}
*/