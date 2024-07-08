<?php

session_start();
include('../config/dbcon.php');
include('../functions/myfunctions.php');

if(isset($_POST["add_category_btn"]))
{
    $department= $_POST['department'];
    $subject= $_POST['subject'];
    $meta_title= $_POST['meta_title'];
    $meta_keyword= $_POST['meta_keyword'];

    $file= $_FILES['file']['name'];
    $path = "../uploads";
    $image_ext=pathinfo($file, PATHINFO_EXTENSION);
    $filename= time().'.'.pdf;
    
    $cate_query= "INSERT INTO files(department,subject,meta_title,meta_keyword,file)VALUES('$department','$subject','$meta_title','$meta_keyword','$file')";

    $cate_query_run= mysqli_query($con,$cate_query);

    if($cate_query_run)
    {
        move_uploaded_file($_FILES['file']['tmp_name'], $path.'/'.$filename);
        redirect("add-files.php", "category added successfully");
    }
    else
    {
        redirect("add-files.php","something went wrong");
    }

}

?>