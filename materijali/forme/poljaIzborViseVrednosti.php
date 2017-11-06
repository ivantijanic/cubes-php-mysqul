<?php

	if (isset($_POST["fieldName"])) {
		//Dodavanje parametara medju podatke u formi
		$formData["fieldName"] = $_POST["fieldName"];
		
		//Filtering 
		$formData["fieldName"] = is_array($formData["fieldName"]) ? $formData["fieldName"] : array($formData["fieldName"]);
		
		//Filtering 2
		//Filtering 3
		//Filtering 4
		$fieldNamePossibleValues = array("value1", "value2", "value3");
		
		//Validation - validate selected options
		$invalidValues = array_diff($formData["fieldName"], $fieldNamePossibleValues);
		if (!empty($invalidValues)) {
			$formErrors["fieldName"][] = "Izabrali ste neodgovarajuce vrednosti za polje fieldName";
		}
		
		//Validation 2
		//Validation 3
		//...
	} else {//Ovaj else ide samo ako je polje obavezno
		$formErrors["fieldName"][] = "Polje fieldName je obavezno";
	}
