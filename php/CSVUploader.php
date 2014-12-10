<?php
class CSVUploader {

	function __construct(){
		
	}

	public function uploadCsv($output_dir){
		if(isset($_FILES["filesArray"]))
		{
			$outputFolder= $output_dir.time();

			mkdir($outputFolder);

			$ret = array();
			$error =$_FILES["filesArray"]["error"];
			if(!is_array($_FILES["filesArray"]["name"]))
			{
		 	 	$fileName = $_FILES["filesArray"]["name"];
		 	 	echo $output_dir;
		 		move_uploaded_file($_FILES["filesArray"]["tmp_name"],$outputFolder."/".$fileName);
		    	$ret[]= $fileName;
			}
			else
			{
			  $fileCount = count($_FILES["myfile"]["name"]);
			  for($i=0; $i < $fileCount; $i++)
			  {
			  	$fileName = $_FILES["myfile"]["name"][$i];
				move_uploaded_file($_FILES["myfile"]["tmp_name"][$i],$outputFolder."/".$fileName);
			  	$ret[]= $fileName;
			  }
			}
		    echo json_encode($ret);
		 }
	}
}