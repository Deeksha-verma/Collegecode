<?php
session_start();
include("config.php");

if(isset($_POST['user_signup_submit']))
{
    $name=mysqli_real_escape_string($con,$_POST['username']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $password=mysqli_real_escape_string($con,$_POST['password']);

    //  insert user data
    $insert_query="INSERT INTO signup(name,email,password) VALUES('$name','$email','$password')";
    $insert_query_run= mysqli_query($con.$insert_query);

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
}


?>