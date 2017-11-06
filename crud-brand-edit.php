<?php

if (empty($_GET['id'])){
    die('Morate proslediti id');
}

$id = (int) $_GET['id'];

$link = mysqli_connect('127.0.0.1', 'cubes', 'cubes', 'cubesphp');

if ($link === FALSE){
    die ('MySQL Error: ' . mysqli_connect_error());
}

$query = "SELECT * FROM brands WHERE id = '" . mysqli_real_escape_string($link, $id) . "'";
$result = mysqli_query($link, $query);
if ($result === FALSE){
    die('MySQL Error: ' . mysqli_error($link));
}

$brand = mysqli_fetch_assoc($result);
if (empty($brand)){
    die('Trazeni brend ne postoji');
}

//ovde se prihvataju vrednosti polja, popisati sve kljuceve i pocetne vrednosti
$formData = array(
    'title' => $brand['title'],
    'website_url' => $brand['website_url'],
	//ovde napisati sve kljuceve i pocetne vrednosti
);

//ovde se smestaju greske koje imaju polja u formi
$formErrors = array();


//uvek se prosledjuje jedno polje koje je indikator da su podaci poslati sa forme
//odnosno da je korisnik pokrenuo neku akciju
if (isset($_POST["task"]) && $_POST["task"] == "naziv Taska") {
	
	/*********** filtriranje i validacija polja ****************/
	
	/*********** filtriranje i validacija polja ****************/
	
	
	//Ukoliko nema gresaka 
	if (empty($formErrors)) {
		//Uradi akciju koju je korisnik trazio
	}
}

require_once __DIR__ . '/views/layout/header.php';
require_once __DIR__ . '/views/templates/t_crud-brand-edit.php';
require_once __DIR__ . '/views/layout/footer.php';


