<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "fileuploaddownload";

$con = mysqli_connect($server,$username,$password,$database);

if(!$con){
    die("connection Failed:". mysqli_connect_error());
}
else{
    echo "connection successfully.";
 }
?>