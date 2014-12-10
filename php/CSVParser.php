<?php
class CSVParser {

	function __construct(){
		
	}

	public function openCsv($csvDir){
		$files = scandir($csvDir);
		// Wyrzuc znaki powrotu 
		unset($files[0]);
		unset($files[1]);

		foreach($files as $file) {
			if($file !== "." || $file !== ".."){
				$openedCSV = fopen($csvDir."/".$file, 'a+');
				$CSVObject = fgetcsv($openedCSV);
				// Obiekt to po prostu tablica 2 wymiarowa
				echo($CSVObject[0] );
				$this->generateSVG($CSVObject, $SVGTemplate)
			}
		}
	}


	public function generateSVG($CSVObject, $SVGTemplate){
		// Jakis matcher do wybierania templatek
		fopen("../svg/test.svg");

		// LOGIKA PODMIANY
	}
}