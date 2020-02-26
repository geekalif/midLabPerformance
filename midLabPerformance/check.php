<?php

	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$day = $_REQUEST['day'];
	$month = $_REQUEST['month'];
	$year = $_REQUEST['year'];

	if( isset($_POST['name'])){
		if(empty(trim($name)) || strlen(trim($name)) < 2 || is_numeric($name[0]) == true){
			echo "Unvailid Name";
		}
		else{
			echo "Name Submission Success";
		}
	}

	if( isset($_POST['email'])){
		if(!empty((trim($email))) && (strpos($email,'@') != true)){
			echo "Invalid Email";
		}
		else{
			echo "Email Submission Success";
		}
	}

	if (isset($_POST['gender'])) {
		$gender = $_REQUEST['gender'];
		if (empty($gender)) {
			echo "Invalid Gender";
		}
		else{
			echo "Gender Submission Success";
		}
	}

	if (((!empty(trim(day))) && (!empty(trim(month))) (!empty(trim(year)))) && ($day >= 1 || $day <=31) && ($month >= 1 || $month <=12) && ($year >= 1980 || $year <=2000)) {
		echo "Date Submission Success";
	}
	else{
		echo "Invalid Date";
	}



		

		// $blood = $_REQUEST['blood'];
		// $picture = $_REQUEST["fileupload"];



		// function nameCheck(){
			
		// }
		
		// nameCheck();
		// emailCheck();




?>