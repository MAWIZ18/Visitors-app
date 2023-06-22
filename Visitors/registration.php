<?php

$first_Name= $_POST['fname'];
$last_name=$_POST['lname'];
$contact=$_POST['Contact'];
$reg_number= $_POST['reGnumber'];

include 'connection.php';


$sql= "INSERT INTO students_data (fName,sName,phoneContact,registration_number)  VALUES ('$first_Name','$last_name',$contact,'$reg_number')";
$query= mysqli_query ($connect,$sql);
if($query){
    echo 'inserted seccesfuly';
    // header('location:display.php');
}else{
    // echo 'eror while insertig try again';  
      echo 'faild to insert';             
}



?>