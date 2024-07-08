<?php
	$name = $_POST['name'];
	
	$email = $_POST['email'];
	$phone = $_POST['phone'];
    $message = $_POST['message'];


	// Database connection
	$con = new mysqli('localhost','root','','fileuploaddownload');
	if($con->connect_error){
		echo "$con->connect_error";
		die("Connection Failed : ". $con->connect_error);
	} else {
		$stmt = $con->prepare("insert into message(name, email, phone,message) values(?, ?, ?, ?)");

		$stmt->bind_param("ssss", $name,$email, $phone,$message);
		$execval = $stmt->execute();
		echo $execval;
        if($insert_query_run)
    {
        $_SESSION['message']= "Registered Successfully";
        header('location:home.php');
    }
    else
    {
        $_SESSION['message']= "something went wrong";
    
    }
		$stmt->close();
		$con->close();
	}
?>