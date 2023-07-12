<?php
$user=$_POST['user'];
include ('connection.php');
$sql= "DELETE  FROM `courses` WHERE userName='$user'";
$query= mysqli_query ($connect,$sql);
if($query){
    echo'thanks for using attendance app';
    header('location:home.php');
}




?>