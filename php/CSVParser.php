<?php
class CSVParser {

	function __construct(){
		
	}

	public function openCsv($csvDir){
		$files = scandir("../Attachments/1418246314");
		// Wyrzuc znaki powrotu 
		unset($files[0]);
		unset($files[1]);

		foreach($files as $file) {
			if($file !== "." || $file !== ".."){
				$openedCSV = fopen("../Attachments/1418246314"."/".$file, 'a+');
				$CSVObject = fgetcsv($openedCSV);
				// Obiekt to po prostu tablica 2 wymiarowa
				echo($CSVObject[0] );
			}
		}
	}


	public function generateSVG($file){
		fopen("../svg/test.svg");
	}
}