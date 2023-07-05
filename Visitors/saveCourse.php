<?php
session_start();
include('connection.php');
$firstName = $_POST['user_name'];

if(isset($_POST['save'])){

    $courseList=$_POST['courseList'];
    foreach ($courseList as  $courseItems )
    {

        // echo $courseItems."<br>"; 

        $query="INSERT INTO courses (courseName,userName) VALUES('$courseItems','$firstName')";
        $run=mysqli_query($connect,$query); }
    if($run){

        $_SESSION['status']="inserted successfuly";
        header("location: login.php");
    }
    else{
        $_SESSION['status']="not inserted successfuly";
        header("location: checkbox.php");
    }
}


?>