<?php
	
	if( isset($_REQUEST['submit'])){
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$radioButton = $_REQUEST['gender'];
		$dd = $_REQUEST['dd'];
		$mm = $_REQUEST['mm'];
		$yy = $_REQUEST['yy'];

		
		if(empty(trim($name)) || strlen(trim($name)) < 2 || is_numeric($name[0]) == true){
			echo "Unvailid name";
		}

		function checkEmail() {
    		for ($i=0; $i <strlen($email); $i++) { 
    			# code...
    		}
		}



		if(){

		}
		
		if(!filter_var($email, FILTER_VALIDATE_EMAIL) || $radioButton == null || (!((((int)$dd >=1) && ((int)$dd <=31)) && (((int)$mm >= 1) && ((int)$mm <= 12)) && (((int)$yy >= 1900) && ((int)$yy <= 2016))))){
			echo "Unvalid Submission";
		}
		else{
			echo "success";
		}

	}

?>