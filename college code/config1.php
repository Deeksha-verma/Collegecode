<?php
	
	
	$email = $_POST['email'];
	


	// Database connection
	$con = new mysqli('localhost','root','','fileuploaddownload');
	if($con->connect_error){
		echo "$con->connect_error";
		die("Connection Failed : ". $con->connect_error);
	} else {
		$stmt = $con->prepare("insert into subscribers(email) values(?)");
		$stmt->bind_param("s",$email);
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
        header('location:home.php');
    }
		$stmt->close();
		$con->close();
	}
?>