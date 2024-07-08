<?php
    
	
    session_start();


	// Database connection
	$con = new mysqli('localhost','root','','fileuploaddownload');
	if($con->connect_error){
		echo "$con->connect_error";
		die("Connection Failed : ". $con->connect_error);
	} else {
		if(isset($_POST['login']))
		{
			$email = $_POST['email'];
	        $password = $_POST['password'];
			$query="SELECT * from signup where email='$email' or username='$email'";
			$result=mysqli_query($con,$query);
			if($result)
			{
				if(mysqli_num_rows($result)==1)
				{
					$result_fetch=mysqli_fetch_assoc($result);
					if(password_verify($password,$result_fetch['password']))
					{
						$_SESSION['logged_in']=true;
						$_SESSION['username']=$result_fetch['username'];
						header("location:home.php");
					}
					else{
						echo"<script> 
							alert('incorrect password');
							window.location.href='home.php';
						    </script>";
					}
				}
				else{
					echo "<script> 
							alert('email or username not registered');
							window.location.href='home.php';
						</script>";
				}
			}
		}
		
		

		if(isset($_POST['register']))
		{
			$name = $_POST['name'];
			$username = $_POST['username'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$user_exist_query="SELECT * FROM signup where username='$username' OR email='$email'";
			$result=mysqli_query($con,$user_exist_query);
			if($result)
			{
                if(mysqli_num_rows($result)>0)
				{
					#if any user has already taken username or email
					$result_fetch=mysqli_fetch_assoc($result);
					if($result_fetch['username']==$_POST['username'])
					{
						echo "<script> 
						alert('$result_fetch[username]-username already taken');
						window.location.href='home.php';
						</script>";
					}
					else{
						echo "<script> 
						alert('$result_fetch[email]- email already registered');
						window.location.href='home.php';
						</script>";
					}
				}
				else{
					$password=password_hash($password,PASSWORD_BCRYPT);
					$query="INSERT into signup(name,username, email, password) values('$name','$username','$email','$password')";
				    if(mysqli_query($con,$query))
					{
						echo "<script> 
							alert('registration successful');
							window.location.href='home.php';
							</script>";
					}
					else{
						echo "<script> 
							alert('registration not successful');
							window.location.href='home.php';
							</script>";
					}
				}
			}
			else{
				echo "<script> 
					alert('query is not running');
					window.location.href='home.php';
				</script>";
			}
		}

		
		$con->close();
	}
?>