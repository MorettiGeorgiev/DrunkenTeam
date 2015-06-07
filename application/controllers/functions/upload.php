<?php

class Upload extends CI_Controller{
	public function index(){
		
		$ds          = DIRECTORY_SEPARATOR;  
		if (!empty($_FILES)) {
		    $tempFile = $_FILES['file']['tmp_name'];      
		    $targetPath = $storeFolder;
		    $targetFile =  $targetPath.$ds. $_FILES['file']['name']; 
		    move_uploaded_file($tempFile, $targetFile);	
		print_r($directories);	     
		}

	}
}