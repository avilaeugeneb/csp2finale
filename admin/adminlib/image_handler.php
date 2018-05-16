<?php
if(isset($_FILES["file"]["type"])){

	$filename = $_FILES["file"]["name"];
	$validextensions = array("jpeg", "jpg", "png");
	$temporary = explode(".", $filename);
	$file_extension = end($temporary);
	$filetype = $_FILES["file"]["type"];
	$filesize = $_FILES["file"]["size"];
	$fileerror = $_FILES["file"]["error"];
	$filetmp = $_FILES['file']['tmp_name'];

	if((($filetype== "image/png") || ($filetype == "image/jpg") || ($filetype == "image/jpeg")) 
		&& ($filesize < 1000000)
		&& in_array($file_extension, $validextensions)){
		
		if ($fileerror > 0){
			echo "Return Code: " . $fileerror . "<br/><br/>";
		}else{
			
			if (file_exists("../../assets/img/" . $filename)) {
				echo $filename . " <span id='invalid'><b>already exists.</b></span> ";
			}else{

				$targetPath = "../../assets/img/".$filename;
				move_uploaded_file($filetmp,$targetPath);
				echo "<span id='success'>Image Uploaded Successfully...!!</span><br/>";
			}
		}	

	}else{
		echo "<span id='invalid'>***Invalid file Size or Type***<span>";
	}
}

?>