<?php

session_start();

require_once __DIR__ . '/models/m_groups.php';



//ovde se prihvataju vrednosti polja, popisati sve kljuceve i pocetne vrednosti
$formData = array(
	'title' => '',
	);

//ovde se smestaju greske koje imaju polja u formi
$formErrors = array();


//odnosno da je korisnik pokrenuo neku akciju
if (isset($_POST["task"]) && $_POST["task"] == "insert") {
	
	/*********** filtriranje i validacija polja ****************/
	if (isset($_POST["title"]) && $_POST["title"] !== '') {
		//Dodavanje parametara medju podatke u formi
		$formData["title"] = $_POST["title"];
		
		//Filtering 1
		$formData["title"] = trim($formData["title"]);
		
		
	} else {//Ovaj else ide samo ako je polje obavezno
		$formErrors["title"][] = "Polje title je obavezno";
	}
	
	
	/*********** filtriranje i validacija polja ****************/
	
	
	if (empty($formErrors)) {
		//Uradi akciju koju je korisnik trazio
		
		$newGroupId = groupsInsertOne($formData);
		
		header('Location: /crud-group-list.php');
		die();
	}
}
require_once __DIR__ . '/views/layout/header.php';
require_once __DIR__ . '/views/templates/t_crud-group-insert.php';
require_once __DIR__ . '/views/layout/footer.php';

