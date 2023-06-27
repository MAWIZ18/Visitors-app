<?php
session_start();
include('connection.php');


if(isset($_POST['save'])){

    $courseList=$_POST['courseList'];
    foreach ($courseList as  $courseItems )
    {

        // echo $courseItems."<br>"; 

        $query="INSERT INTO demo (name) VALUES('$courseItems')";
        $run=mysqli_query($connect,$query); }
    if($run){

        $_SESSION['status']="inserted successfuly";
        header("location: checkbox.php");
    }
    else{
        $_SESSION['status']="not inserted successfuly";
        header("location: checkbox.php");
    }
}


?>