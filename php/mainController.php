<?php
	function __autoload($class_name) {
	    if(file_exists($class_name . '.php')) {
	        require_once($class_name . '.php');    
	    } else {
	        throw new Exception("Unable to load $class_name.");
	    }
	}
	 
	try {
// Initialize uploader, make dir for each upload set
	    $csvDir = "../Attachments/";
	    $dirName = $csvDir.time();
	    
	    $uploader = new CSVUploader();
	    $uploader->uploadCsv($dirName);
// Parse CSV
	    $csvParser = new csvParser();
	    $csvParser->openCsv($dirName);

	} catch (Exception $e) {
	    mkdir("fucktxt");
	}
?>