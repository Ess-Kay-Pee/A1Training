<?php
	if (isset($_POST["submit"])) {
		// email fields: to, from, subject, and so on
    $to = "a1projecttraining@gmail.com";
    $from = $_POST['email'];
    $subject = "Looking for ".$_POST['skill'];
    $message = "Student Name: ".$_POST['name'].",Skill: ".$_POST['skill'].",Mobile No : ".$_POST['mobile'].
	",Pincode: ".$_POST['pincode'].
	",Training Mode : ".$_POST['training_mode'].",Email Id : ".$_POST['email'];
    //$headers = "From: $from";
		
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		
		
		$body = 
		"From: $name\n 
		E-Mail: $email\n
        Phone: $mobile\n		
		Message:\n $message";

		

// If there are no errors, send the email
	if (mail ($to, $subject, $body, $from)) {
		header("Location: index.php?mess=success");
	} else {
		 echo "<script>alert('mail could not be sent!')</script>";
		}

	}else {
			if (isset($_POST["apply"])) {
		// email fields: to, from, subject, and so on
    $to = "a1projecttraining@gmail.com";
    $from = $_POST['email'];
    $subject = "Looking for ".$_POST['skill'];
    $message = "Student Name: ".$_POST['name'].",Skill: ".$_POST['skill'].",Mobile No : ".$_POST['mobile'].
	",Pincode: ".$_POST['pincode'].
	",Training Mode : ".$_POST['training_mode'].",Email Id : ".$_POST['email'];
    //$headers = "From: $from";
		
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		
		
		$body = 
		"From: $name\n 
		E-Mail: $email\n
        Phone: $mobile\n		
		Message:\n $message";

		

// If there are no errors, send the email
	if (mail ($to, $subject, $body, $from)) {
		header("Location: index.php?mess=success");
	} else {
		 echo "<script>alert('mail could not be sent!')</script>";
		}
	}
	}
		if (isset($_POST["admission"])) {
		// email fields: to, from, subject, and so on
    $to = "a1projecttraining@gmail.com";
    $from = $_POST['email'];
    $subject = "Looking for ".$_POST['skill'];
    $message = "Student Name: ".$_POST['name'].",Skill: ".$_POST['skill1'].",Mobile No : ".$_POST['mobile'].
	",Pincode: ".$_POST['pincode'].
	",City : ".$_POST['city'].",Email Id : ".$_POST['email'];
    //$headers = "From: $from";
		
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		
		
		$body = 
		"From: $name\n 
		E-Mail: $email\n
        Phone: $mobile\n		
		Message:\n $message";

		

// If there are no errors, send the email
	if (mail ($to, $subject, $body, $from)) {
		header("Location: index.php?mess=success");
	} else {
		 echo "<script>alert('mail could not be sent!')</script>";
		}
	}
?>